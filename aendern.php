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
		
		echo "Vorname:<br/>";
		echo "<input type='text' name='Vorname' value = '".$zeile["Vorname"]."' /><br/>";
		
		echo "Nachname:<br/>";
		echo "<input type='text' name='Nachname' value = '".$zeile["Nachname"]."' /><br/>";
		
		echo "Titel:<br/>";
		echo "<input type='text' name='Titel' value = '".$zeile["Titel"]."' /><br/>";
		
		echo "Firma:<br/>";
		echo "<input type='text' name='Firma' value = '".$zeile["Firma"]."' /><br/>";
		
		echo "Strasse:<br/>";
		echo "<input type='text' name='Strasse' value = '".$zeile["Strasse"]."' /><br/>";
		
		echo "Ort:<br/>";
		echo "<input type='text' name='Ort' value = '".$zeile["Ort"]."' /><br/>";
		
		echo "Bundesland:<br/>";
		echo "<input type='text' name='Bundesland' value = '".$zeile["Bundesland"]."' /><br/>";
		
		echo "Postleitzahl:<br/>";
		echo "<input type='text' name='Postleitzahl' value = '".$zeile["Postleitzahl"]."' /><br/>";
		
		echo "Land:<br/>";
		echo "<input type='text' name='Land' value = '".$zeile["Land"]."' /><br/>";
		
		echo "<input type='hidden' name='Zaehler' value='".$zeile["Zaehler"]."' />";
		
		echo "<input type='submit' value='Ändern' />";
		
		echo "</form>";
		
	}
}
else{
	echo "Kein Treffer";
}

include "close.php";

?>