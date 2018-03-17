<?php

$server    = "192.168.12.105";
$user      = "kurs";
$password  = "kurs";
$datenbank = "rubleva";

$verbindung = new mysqli("$server","$user","$password","$datenbank");

if ($verbindung->connect_error){
	die("Fehler:".$verbindung->connect_error);
}


?>