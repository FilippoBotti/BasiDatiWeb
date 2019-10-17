<?php

$squadre = array('Milan'=>10,'Juve'=>8,'Inter'=>3,'Roma'=>4,'Parma'=>5,'Napoli'=>6,'Torino'=>7,'Fiorentina'=>8);
echo "<h4>CLASSIFICA</h4>";
arsort($squadre);
foreach($squadre as $key => $valori){
	echo "$key $valori";
	echo "<br>";
}

if(isset($_REQUEST['Partita'])){
$var =$_REQUEST['Partita'];
	if($var==1){
		$squadre['Milan']+=3;
	}

	if($var=='X'){
		$squadre['Milan']+=1;
		$squadre['Juve']+=1;
	}
	
	if($var==2){
		$squadre['Juve']+=3;
	}
}


if(isset($_REQUEST['Partita2'])){
$var =$_REQUEST['Partita2'];
	if($var==1){
		$squadre['Inter']+=3;
	}

	if($var=='X'){
		$squadre['Inter']+=1;
		$squadre['Roma']+=1;
	}
	
	if($var==2){
		$squadre['Roma']+=3;
	}
}

if(isset($_REQUEST['Partita3'])){
$var =$_REQUEST['Partita3'];
	if($var==1){
		$squadre['Parma']+=3;
	}

	if($var=='X'){
		$squadre['Parma']+=1;
		$squadre['Napoli']+=1;
	}
	
	if($var==2){
		$squadre['Napoli']+=3;
	}
}

if(isset($_REQUEST['Partita4'])){
$var =$_REQUEST['Partita4'];
	if($var==1){
		$squadre['Torino']+=3;
	}

	if($var=='X'){
		$squadre['Fiorentina']+=1;
		$squadre['Torino']+=1;
	}
	
	if($var==2){
		$squadre['Fiorentina']+=3;
	}
}

echo "<font color= 'red'> <h4>CLASSIFICA AGGIORNATA</h4>";
arsort($squadre);
echo "<font color = 'black'>";
foreach($squadre as $key => $valori){
	echo "$key $valori";
	echo "<br>";
}

?>
