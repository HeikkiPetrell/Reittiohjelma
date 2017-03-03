<?php
	if(!empty($_REQUEST["id"])){
	$id = $_REQUEST['id'];
	$db = new PDO('sqlite:reittiseuranta.sqlite');
	$sql  = "DELETE FROM merkit WHERE idR='$id';";
	$sql2 = "DELETE FROM reitit WHERE idR='$id';";
	$db->beginTransaction();
	try{
	$db->exec($sql);
	$db->exec($sql2);
	$db->commit();
	}
		catch(PDOException $e){
		$db->rollBack();
		}
	}
$db=null;
?> 