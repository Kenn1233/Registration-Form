<?php

	class Config {
	public function db_connect() {
	$db=new mysqli('localhost', 'root', '', 'philsca_db');
	if ($db) {
		return $db;
	} else {
		return false;
	}
}
	
		public function addUserInfo($fName, $mName, $lName,$email, $accStat) {
				$db = $this -> db_connect();
				$qry = "INSERT INTO tbl_user_info (fName, mName, lName, email, accStat)
						VALUES ('$fName', '$mName', '$lName','$email', '$accStat')";
						
				$res = $db -> query($qry);
				if ($res) { return true; }
				else { return false;}
		}
			
			
		public function addLoginInfo ($uName, $password) {
				$db = $this -> db_connect();
				$qry = "INSERT INTO tbl_login_info (uName, password)
						VALUES ('$uName', '$password')";	

				$res = $db -> query($qry);
				if ($res) { return true; }
				else { return false;
				
				}
		}
}				