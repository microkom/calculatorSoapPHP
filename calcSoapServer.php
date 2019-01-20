<?php
$server = new SoapServer("calculator.wsdl");

function addition($num1,$num2){
	return $num1+$num2;
}

function subtract($num1,$num2){
	return $num1-$num2;
}
function multiplication($num1,$num2){
	return $num1*$num2;
}

function division($num1,$num2){
	return $num1/$num2;
}

function squareRoot($num1){
	return sqrt($num1);
}

function sine($num1){
	return sin($num1);
}

function cosine($num1){
	return cos($num1);
}

function tangent($num1){
	return tan($num1);
}
$server->AddFunction("addition");
$server->AddFunction("subtract");
$server->AddFunction("multiplication");
$server->AddFunction("division");
$server->AddFunction("squareRoot");
$server->AddFunction("sine");
$server->AddFunction("cosine");
$server->AddFunction("tangent");
$server->handle();
?>