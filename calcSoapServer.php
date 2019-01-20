<?php

class SimpleSoapServer{
	
	public function addition($num1,$num2){
		return $num1+$num2;
	}

	public function subtract($num1,$num2){
		return $num1-$num2;
	}
	public function multiplication($num1,$num2){
		return $num1*$num2;
	}

	public function division($num1,$num2){
		return $num1/$num2;
	}

	public function squareRoot($num1){
		return sqrt($num1);
	}

	public function sine($num1){
		return sin($num1);
	}

	public function cosine($num1){
		return cos($num1);
	}

	public function tangent($num1){
		return tan($num1);
	}
}

?>