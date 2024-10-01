<?php


# Array

$prenom = "nicolas, marie, gregorie, sylvain, celine";
// echo $prenom;

$listprenoms =  array("nicolas", "marie", "gregoire", "sylvain", "celine");
$listprenoms2 = ["nicolas", "marie", "gregorie", "sylvain", "celine"];

array_push($listprenoms2, "laura", "perrinne", "emile");
$listprenoms2[] = "geoffrey";
#print_r($listprenoms2);
#echo $listprenoms[2];
#var_dump($listprenoms2); // ajoute les longeurs et type des ittérations

for ($i= 0; $i < count($listprenoms2) ; $i++) { 
	echo "$listprenoms2[$i]\n";
}