<?php

include "open.php";

$Vorname       = $_POST["Vorname"];
$Nachname      = $_POST["Nachname"];
$Titel         = $_POST["Titel"];
$Firma         = $_POST["Firma"];
$Strasse       = $_POST["Strasse"];
$Ort           = $_POST["Ort"];
$Bundesland    = $_POST["Bundesland"];
$Postleitzahl  = $_POST["Postleitzahl"];
$Land          = $_POST["Land"];

$sql = "insert into adressen 
(Vorname, Nachname,Titel,Firma,Strasse,Ort,Bundesland,Postleitzahl,Land) 
values ('$Vorname','$Nachname','$Titel','$Firma','$Strasse','$Ort','$Bundesland','$Postleitzahl','$Land')";

mysqli_set_charset($verbindung, "utf-8");

if ($verbindung->query($sql) ===TRUE){
	echo "Datensatz wurde eingefügt";
}
else{
	echo "Fehler:".$verbindung->error;
}

include "close.php";

?>