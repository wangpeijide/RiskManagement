<?php
	session_start();
	/*$content = $_POST["content"];
	$possibility = $_POST["posibility"];
	$effect = $_POST["effect"];
	$threshold = $_POST["threshold"];
	$submitter = $_SESSION["username"];
	*/
	
	$content = "risk1";
	$possibility = 1;
	$effect = 2;
	$threshold = 13;
	$submitter = "wpj";
	
	include("../openDB.php");
	$ins = "insert into risk(content, possibility, effect, threshold, submitter) values" .
			"('$content',$possibility,$effect,$threshold,'$submitter')";
	$res = sqlite_query($db, $ins);
	if(!$res){
		echo "fail to insert";// fail to insert
	}
	include("../closeDB.php");
?>
