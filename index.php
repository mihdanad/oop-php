<?php 

	require_once('animal.php');
	require('ape.php');
	require('frog.php');
	$sheep = new Animal("shaun");
		echo "Name : " . $sheep->name . "<br>"; // "shaun"
		echo "Legs : " . $sheep->legs . "<br>"; // 4
		echo "Cold blooded: " . $sheep->cold_blooded . "<br><br>"; // "no"


	$kodok = new Frog("buduk");
		echo "Name : " . $kodok->name . "<br>"; 
		echo "Legs : " . $kodok->legs . "<br>";
		echo "Cold blooded: " . $kodok->cold_blooded . "<br>";
		echo "Yell : " . $kodok->jump() . "<br><br>";


	$sungokong = new Ape("kera sakti");
		echo "Name : " . $sungokong->name . "<br>"; 
		echo "Legs : " . $sungokong->legs . "<br>";
		echo "Cold blooded: " . $sungokong->cold_blooded . "<br>";
		echo "Yell : " . $sungokong->yell() . "<br>";

 ?>