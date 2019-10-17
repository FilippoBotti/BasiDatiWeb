<!DOCTYPE html>
<html>
<body>

<form action = "action_page.php" method="post">

<h1>Please select your date</h1>
<br></br>

<?php
	
	//creo array
	$mesi = array('Gennaio','Febbraio', 'Marzo', 'Aprile' , 'Maggio' , 'Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre');


	echo "Day ";
	echo "<select name ='Day'>";
	for($i=1;$i<32;$i++){
	echo "<option value ='$i'> $i </option>";
	}
	echo "</select>";	
	echo "<br></br>";
	
	echo "Month ";
	echo "<select name ='Month'>";
	foreach($mesi as $month){
		echo"<option value = '$month'> $month </option>";		
	}
	echo "</select>";
	echo "<br></br>";
	
	echo "Year ";
	echo "<select name ='Year'>";
	for($k=1900;$k<2019;$k++){
	echo "<option value ='$k'> $k </option>";
	
	}
	echo "</select>";
	echo "<br></br>";
	
	echo "<input type = 'submit' value = 'invia'>";
?> 
</form>
</body>
</html>


