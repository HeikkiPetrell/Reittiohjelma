<?php
try{	
	$db = new PDO('sqlite:reittiseuranta.sqlite');
	$sql  = "SELECT idR, pvm, alku, loppu, kuvaus, huippu, keski, kokmatka, kokaika FROM reitit;";
	$array = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);	
	echo json_encode($array);
}catch(PDOException $e){
	echo("Ei ok!" . $e);
}
$db=null;
?> 