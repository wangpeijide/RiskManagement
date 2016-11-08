<?php
	include("../openDB.php");
	$ins = "select * from risk";
	$res = sqlite_query($db, $ins);
	
	if($res){
		while($item = sqlite_fetch_array($res, SQLITE_ASSOC)){
			$id = $item["id"];
			$content = $item["content"];
			$possibility = $item["possibility"];
			$effect = $item["effect"];
			$threshold = $item["threshold"];
			$submitter = $item["submitter"];
		}
	}else{
		echo "fail";
	}
	include("../closeDB.php");
?>
