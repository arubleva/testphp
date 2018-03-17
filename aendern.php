<?php

include "open.php";

$Vorname       = $_POST["Vorname"]."%";
$Nachname      = $_POST["Nachname"]."%";
$Titel         = $_POST["Titel"]."%";
$Firma         = $_POST["Firma"]."%";
$Strasse       = $_POST["Strasse"]."%";
$Ort           = $_POST["Ort"]."%";
$Bundesland    = $_POST["Bundesland"]."%";
$Postleitzahl  = $_POST["Postleitzahl"]."%";
$Land          = $_POST["Land"]."%";

$sql = "select * from adressen where Vorname like '$Vorname' 
and Nachname like '$Nachname' 
and Titel like '$Titel' 
and Firma like '$Firma' 
and Strasse like '$Strasse'
and Ort like '$Ort'
and Bundesland like '$Bundesland'
and Postleitzahl like '$Postleitzahl'
and Land like '$Land' ";


mysqli_set_charset($verbindung, "utf-8");

$resultat = $verbindung->query($sql);

if ($resultat->num_rows > 0){
	while($zeile=$resultat->fetch_assoc()){
		echo "<from action='aendern_durchfuehren.php' method='POST'>";
		
		echo "<Vorname:<br/>";
		echo "<input type='text' name='Vorname' value = '".$zeile["Vorname"]."' /><br/>";
		
		echo "</form>";
		
	}
}
else{
	echo "Kein Treffer";
}

include "close.php";

?>