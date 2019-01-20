<?php

try{
	$clienteSOAP = new SoapClient('calculator.wsdl');

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$op = $_POST['op'];
		$num1 = $_POST['num1'];

		//check if 'num2' is inbound, not always it is
		if(isset($_POST['num2'])){
			$num2 = $_POST['num2'];
		}

		//'POST' data control
		if(isset($_POST['op'])){

			//check all incoming data are numbers
			try{
				if(!is_numeric($_POST['num1']))
					throw new Exception('num1 is not a number.');

				//check num2 is present
				if(isset($_POST['num2'])){
					if(!is_numeric($_POST['num2']))
						throw new Exception('num2 is not a number.');
				}
			}catch (Exception $exception) {
				die('Error, you must use only numbers: ' . $exception->getMessage());
			}
		}

		switch($op){
			case 'sum': $result = $clienteSOAP->addition($num1, $num2); break;
			case 'sub':	$result = $clienteSOAP->subtract($num1, $num2); break;
			case 'mul': $result = $clienteSOAP->multiplication($num1, $num2); break;
			case 'div': $result = $clienteSOAP->division($num1, $num2); break;
			case 'sqrt': $result = $clienteSOAP->squareRoot($num1); break;
			case 'sin':	$result = $clienteSOAP->sine($num1); break;
			case 'cos':	$result = $clienteSOAP->cosine($num1); break;
			case 'tan':	$result = $clienteSOAP->tangent($num1); break;
			default: print "no enough data";break;
		}
		printf("<h2>Result: %.3f </h2>", $result);
	}



} catch(SoapFault $e){
	var_dump($e);
}
?>