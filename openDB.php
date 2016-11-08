<?php
	$db = sqlite_open("../homework.db",0666,$sqliteerror);
	if($db){
		echo "success";
   	}
?>
