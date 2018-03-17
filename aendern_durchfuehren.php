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
$Zaehler       = $_POST["Zaehler"];

$sql = "update adressen set Vorname = '$Vorname', Nachname = '$Nachname', 
Titel = '$Titel', Firma = '$Firma', Strasse = '$Strasse', Ort = '$Ort',
Bundesland = '$Bundesland',Postleitzahl = '$Postleitzahl',Land = '$Land', 
where Zaehler = $Zaehler";

mysqli_set_charset($verbindung, "utf-8");

$verbindung->query($sql);

echo "Datensatz wurde geändert!";


include "close.php";

?>