<?php

include "open.php";


$Zaehler       = $_POST["Zaehler"];

$sql = "delete from adressen where Zaehler = $Zaehler";

$verbindung->query($sql);

echo "Datensatz wurde gelöscht!";


include "close.php";

?>