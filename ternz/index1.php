<?php
	include('config1.php');
	$db=new Config();
	$isAdded=$db->addUser("carla", "M", "Reyes");
	if($isAdded){
		echo '<script>alert("user has been Added"); </script>';
	}else{
		echo '<script> alert("Addition failed. Pls. try Again. </script>';
		}
?>