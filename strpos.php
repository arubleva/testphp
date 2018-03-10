<?php 

$email    = "Gerd.Armbruster@gmail.com";
$position = strpos($email,"@");
if ($position > 0)
{
	echo "Alles ok";
}
else
{
	echo "Achtung @ fehlt";
}

?>