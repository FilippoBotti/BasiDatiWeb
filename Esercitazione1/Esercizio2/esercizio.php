
<form action="action_page.php">
<?php
	

$squadre = array('Milan'=>10,'Juve'=>8,'Inter'=>3,'Roma'=>4,'Parma'=>5,'Napoli'=>6,'Torino'=>7,'Fiorentina'=>8);
$risultati = array('1','X','2');
arsort($squadre);
foreach($squadre as $key => $valori){
	echo "$key $valori";
	echo "<br>";
}


	echo "<h3>MILAN-JUVE<h3>";
	echo "<select name ='Partita'>";
	foreach($risultati as $val){
	echo "<option value ='$val'> $val </option>";
	}
	echo "</select>";	
	echo "<br></br>";
	
	echo "<h3>INTER-ROMA<h3>";
	echo "<select name ='Partita2'>";
	foreach($risultati as $val){
	echo "<option value ='$val'> $val </option>";
	}
	echo "</select>";	
	echo "<br></br>";

	echo "<h3>PARMA-NAPOLI<h3>";
	echo "<select name ='Partita3'>";
	foreach($risultati as $val){
	echo "<option value ='$val'> $val </option>";
	}
	echo "</select>";	
	echo "<br></br>";

	echo "<h3>TORINO-FIORENTINA<h3>";
	echo "<select name ='Partita4'>";
	foreach($risultati as $val){
	echo "<option value ='$val'> $val </option>";
	}
	echo "</select>";	
	echo "<br></br>";
	echo "<input type = 'submit' value = 'invia'>";
?>
</form>
