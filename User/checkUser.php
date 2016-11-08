<?php
	/*
	$username = $_POST["username"];
	$password = $_POST["password"];
 	*/
 	
 	$username = "wpj";
 	$password = "123";
 	
 	include("../openDB.php");
 	$sel = "select * from user where username = '$username' and password = '$password'";
 	$res = sqlite_query($db, $sel);
 	if($res){
 		$num = sqlite_num_rows($res);
 		if($num>0){
 			echo "success";
 		}else{
 			echo "fail";
 		}
 	}else{
 		echo "fail";
 	}
 	include("../closeDB.php");
?>
