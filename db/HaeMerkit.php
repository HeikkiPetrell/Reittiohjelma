<?php
try{
	$id = $_REQUEST['id'];
	$db = new PDO('sqlite:reittiseuranta.sqlite');
	$sql  = "SELECT lon, lat FROM merkit WHERE idR='$id';";
	$array = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);	
	echo json_encode($array);
}catch(PDOException $e){
	echo("Ei ok!" . $e);
}
$db=null;
?> 	