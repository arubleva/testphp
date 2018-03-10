<?php 

define ('mwst',0.19);
$netto = $_POST["Netto"];

function BerechneMWST($eingabe)
{
	$brutto = $eingabe + $eingabe*mwst;
	return $brutto;
}

$ergebnis=BerechneMWST($netto);

echo "Brutto:$ergebnis";

?>