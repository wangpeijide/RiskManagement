<?php
	/*
	 $riskid = $_GET["riskid"];
	 */
	 
	 $riskid = 123;

	include("../openDB.php");
	$sel = "select * from record where riskid = $riskid";
	$res = sqlite_query($db, $sel);
	if($res){
		while($item = sqlite_fetch_array($res, SQLITE_ASSOC)){
			$spoorer = $item["spoorer"];
			$possibility = $item["possibility"];
			$effect = $item["effect"];
			$info = $item["info"];
		}
	}else{
		echo "fail to find";
	}
	include("../closeDB.php");
?>
