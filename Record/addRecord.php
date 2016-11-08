<?php
	session_start();
	/*$riskid = $_POST["riskid"];
	$spoorer = $_SESSION["username"];
	$possibility = $_POST["possibility"];
	$effect = $_POST["effect"];
	$info = $_POST["info"];
	*/
	
	$riskid = 123;
	$spoorer = "wpj";
	$possibility = 1;
	$effect = 1;
	$info = "qwwe";
	
	include("../openDB.php");
	$ins = "insert into record(riskid, spoorer, possibility, effect, info) values" .
			"($riskid,'$spoorer',$possibility,$effect,'$info')";
	$res = sqlite_query($db, $ins);
	if(!$res){
		echo "fail to insert";// fail to insert
	}
	include("../closeDB.php");
?>
