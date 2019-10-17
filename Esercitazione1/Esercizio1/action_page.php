<form action = "Esercizio.php">
 
<?php
if($_REQUEST['Day'] && $_REQUEST['Month'] && $_REQUEST['Year'])
{
	$var1 = $_REQUEST['Day'];
	$var2 = $_REQUEST['Month'];
	$var3 = $_REQUEST['Year'];
	$durata = true;
	$mesiTrenta = array('Novembre','Aprile','Giugno','Settembre');
	foreach($mesiTrenta as $mese){
		if($var2 == $mese && $var1 == 31){
			$durata = false;
		}
	}
	if($var2 == "Febbraio" && $var1 >=29){
		$durata = false;
	}
	
	
	if($durata == true){
		echo "Grazie per avermelo detto, il tuo compleano è il " . $var1 . "/" . $var2 . "/" . $var3;
	}
	else{
		echo "Questo mese non ha così tanti giorni, riprova";
		echo "<input type='submit' value='Torna indietro'>";
	}
}

?>
</form>

