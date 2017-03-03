<?php
	if(!empty($_REQUEST["idR"])){
	$idr = $_REQUEST['idR'];
	$lon = $_REQUEST['lon'];
	$lat = $_REQUEST['lat'];
	$db = new PDO('sqlite:reittiseuranta.sqlite');
	$db->beginTransaction();
	try {
	$db->exec("INSERT INTO merkit(idR,lon,lat) VALUES($idr,$lon,$lat);");	
	$db->commit();
	}
	catch (Exception $e){
	echo $e->getMessage();
	$db->rollBack();
	}
	$db=null;	
	}
?>

