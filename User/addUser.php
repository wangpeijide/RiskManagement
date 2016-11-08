<?php
	/*$username = $_POST["username"];
	$password = $_POST["password"];
	$role = $_POST["role"];
	$telephone = $_POST["telephone"];
	*/
	
	$username = "wpj";
	$password = "123";
	$role = "1";
	$telephone = "18795890682";
	
	include("../openDB.php");
	$ins = "insert into user(username, password, role, telephone) values" .
			"('$username','$password','$role','$telephone')";
	$res = sqlite_query($db, $ins);
	if(!$res){
		echo "fail to insert";// fail to insert
	}
	include("../closeDB.php");
?>
