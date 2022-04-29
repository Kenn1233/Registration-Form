<?php
if ((isset($_POST['fName'])) &&
	(isset($_POST['mName']))&&
	(isset($_POST['lName']))&&
	(isset($_POST['email']))&&
	(isset($_POST['uName'])) &&
	(isset($_POST['password'])) &&
	(isset($_POST['repassword']))) {
	include ('validation.php');
	$db = new Validate();
	$fnameValid=$db->validateName($_POST['fName']);
	$mnameValid=$db->validateName($_POST['mName']);
	$lnameValid=$db->validateName($_POST['lName']);
	$emailValid=$db->validateEmail($_POST['email']);
	$passValid =$db->getlength($_POST['password']);
if($fnameValid&&$mnameValid&&$lnameValid){
	
if ((!empty($_POST['fName'])) &&
	(!empty($_POST['lName'])) &&
	(!empty($_POST['email'])) &&
	(!empty($_POST['uName'])) &&
	(!empty($_POST['password'])) &&
	(!empty($_POST['repassword']))) {
		
if ($_POST['password']===$_POST['repassword']) {
			include('config.php');
			$db = new Config();
			$isUserAdded = $db->addUserInfo($_POST['fName'], $_POST['mName'], $_POST['lName'], $_POST['email'], $_POST['accStat']);
			$isLoginAdded = $db->addLoginInfo ($_POST['uName'], $_POST['password']);

if ($isUserAdded && $isLoginAdded){
		echo "Registered Successfully"; }
		else { "Registration Failed"; }
			
			} else { echo 'Password not Matched.';}
			} else { echo 'Some fields are empty' ;}
			} else { echo 'Please enter a valid name';}
			} else { echo 'Not posted' ;}
 	


?>