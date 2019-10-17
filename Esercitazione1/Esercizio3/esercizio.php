<?php


$stud1 = array('Nome'=>'Filippo', 'Cognome'=>'Botti','Telefono'=>'3314394622');
$stud2 = array('Nome'=>'Gabriele', 'Cognome'=>'Sechi','Telefono'=>'3294356782');
$stud3 = array('Nome'=>'Shaban', 'Cognome'=>'Fida','Telefono'=>'3331267855');


$studenti = array('287065'=>$stud1, '294522' =>$stud2 , '273112'=>$stud3 );

foreach($studenti as $key => $value){
	echo "<table style='float:left'>";
	echo "<tr>";
	foreach($value as $chiave => $name){
		echo "<td><font face ='arial' color='red'>$chiave</td> </font> <td>$name</td></tr>";
	}
echo "</table>";
}
echo "<br><br><br><br><br>";
if(isset($_REQUEST['Matricola'])){
	$var = $_REQUEST["Matricola"];
	echo "Ora cerco la matricola numero $var <br>";
	foreach($studenti as $matricola => $value){
		if($var == $matricola){
			foreach($value as $chiave => $name){
				echo "$chiave: $name ";
				echo "<br>";
			}
		}
	}
}
?>
