<?php
require('animal.php');
require('Frog.php');
require('Ape.php');

$sheep = new animal('shaun');
echo "Name : " . $sheep->name . "<br>";
echo "Legs : " . $sheep->legs . "<br>";
echo "Cold-blooded : " . $sheep->cold_blooded . "<br><br>";

$kodok  = new Frog('buduk');
echo "Name : " . $kodok ->name . "<br>";
echo "Legs : " . $kodok ->legs . "<br>";
echo "Cold-blooded : " . $kodok ->cold_blooded . "<br>";
echo $kodok->jump() . "<br><br>";

$sungokong  = new ape('kera sakti');
echo "Name : " . $sungokong ->name . "<br>";
echo "Legs : " . $sungokong ->legs . "<br>";
echo "Cold-blooded : " . $sungokong ->cold_blooded . "<br>";
echo $sungokong ->yell() . "<br>";
?>
