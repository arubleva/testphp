<?php 

$stunde = date("H");

switch($stunde)
{
	case 13:echo "Mahlzeit";break;
	case 20:echo "Guten Abend";break;
	default: echo "Guten Tag";break;
}

?>