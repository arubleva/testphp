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
		echo "Vorname:".$zeile["Vorname"]."<br/>";
		echo "Nachname:".$zeile["Nachname"]."<br/>";
		echo "Titel:".$zeile["Titel"]."<br/>";
		echo "Firma:".$zeile["Firma"]."<br/>";
		echo "Strasse:".$zeile["Strasse"]."<br/>";
		echo "Ort:".$zeile["Ort"]."<br/>";
		echo "Bundesland:".$zeile["Bundesland"]."<br/>";
		echo "Postleitzahl:".$zeile["Postleitzahl"]."<br/>";
		echo "Land:".$zeile["Land"]."<br/>";
	}
}
else{
	echo "Kein Treffer";
}

include "close.php";

?>