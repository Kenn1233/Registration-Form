<?php

	class Config {
	public function db_connect(){
		  $con= null;
		try{
			$dbNameServer ="mysql:dbname=philsca_db;host=localhost";
			$user = "root";
			$password = "";
			$op = array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
						 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
			$this->con = new PDO ($dbNameServer, $user, $password, $op);
			return $this->con;
		}catch(PDOException $e){
			echo "Connection error:".$e->getMessage();
			}
		}
	public function close_con(){
			$this->con=null;
		}
	public function addUserInfo($fName, $mName, $lName,$email, $accStat){
	try{
		$db=$this->db_connect();
		$qry="INSERT INTO tbl_user_info(fName, mName, lName, email, accStat)VALUES(?,?,?,?,?)";
		$stmt=$db->prepare ($qry);
		$stmt1=$stmt->execute([$fName, $mName, $lName, $email, $accStat]);
		if ($stmt){
			$this->close_con();
			return true;
		}else{
			
			$this->close_con();
			return false;
		}
	}catch(PDOException $e){
	echo $e->getMessage();}
	}

public function addLoginInfo($uName, $password){
	try{
		$db=$this->db_connect();
		$qry="INSERT INTO tbl_login_info(uName, password)VALUES(?,?)";
		$stmt=$db->prepare ($qry);
		$stmt1=$stmt->execute([$uName, $password]);
		if ($stmt){
			$this->close_con();
			return true;
		}else{
			
			$this->close_con();
			return false;
		}
	}catch(PDOException $e){
	echo $e->getMessage();}
	}
}
			
			
	
			
?>
