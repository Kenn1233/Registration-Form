<?php

class Validate{
	public function validateName ($name){
		if (preg_match("/^[A-Z][a-zA-Z-]+$/",$name)===0){
			return false;
		}else{
			return true;
		}
	}
	public function validateNum ($num){
		
			return is_numeric($num);
		}
	

	public function validateEmail ($email){
		if (!preg_match("/^[_a-z0-9-]+(\.[a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+ \.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$email)===0){
			return true;
	}else {
		return false;
	}
	}
	public function validateAddress ($address){
		if (!preg_match("/^[a-zA-Z0-9]+$/",$address)===0){
			return false;
		}else{
			return true;
		}
	}
	public function getlength ($str){
		
			return strlen($str);
		}
	public function validateUpperLowerCase ($str){
		if ((!preg_match("/^[A-Z]+$/",$str)===0)&&(preg_match("/^[a-z]+$/",$str)===0)){
			return true;
		}else{
			return false;
		}
	}
}	
?>