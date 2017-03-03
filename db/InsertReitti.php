<?php
	if(!empty($_REQUEST["alku"])){
	$alk = $_REQUEST['alku'];
	$lop = $_REQUEST['loppu'];
	$kuv = $_REQUEST['kuvaus'];
	$hui = $_REQUEST['huippu'];
	$kes = $_REQUEST['keski'];
	$kokm = $_REQUEST['kokmatka'];
	$koka = $_REQUEST['kokaika'];	
	$db = new PDO('sqlite:reittiseuranta.sqlite');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->beginTransaction();
	try {
	$db->exec("INSERT INTO reitit(alku, loppu, kuvaus, huippu, keski,kokmatka,kokaika) VALUES('$alk','$lop','$kuv',$hui, $kes, $kokm,'$koka');");	
	$last_id = $db->lastInsertId();
	echo $last_id;
	$db->commit();
	}
	catch (Exception $e){
	echo $e->getMessage();
	$db->rollBack();
	}
	$db=null;	
	}
?>
