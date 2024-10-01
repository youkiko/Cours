<?php

// function calcultva() {
// 	return 100*1.2;
// }

// echo calcultva();


// function calcultva ($prix) {
// 	return $prix *1.2;
// }

// echo calcultva(100);

define("TVAVINGTPOURCENT", 1.2);
define("TVAVINGTCINQPOURCENT", 1.25);

function calcultva ($prix, $tva = 1.20) // taux 1.2 par default si npn renseigné à l'apple de la function
{
	$prixcalcule = $prix * $tva;
	return $prixcalcule;
}
function calcultva2 ($prix = 1.20, $tva) // a ne pas faire, valeur par defaut à a la suites des valeurs obligatoires
{
	$prixcalcule = $prix * $tva;
	return $prixcalcule;
}

echo calcultva2(1.25,100);
// echo calcultva(100, TVAVINGTPOURCENT);