<?php 

$bestellung      = 50;
$limit           = 1000;
$warenkorb       = 0;

while ($warenkorb < $limit)
{
	$warenkorb = $warenkorb + $bestellung;
	echo "$warenkorb<br/>";
}

?>