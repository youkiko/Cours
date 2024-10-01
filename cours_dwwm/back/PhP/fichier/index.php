<?php

require ('./lib/function.php');
require ('./lib/utils.php');


$tab = [];
$fileName = __DIR__  . "//" . "sauv.csv"; 
csvtoarray($tab, $fileName);


$personne = (object)["prenom" => "laura", "nom" => "beaugrand", "age" => 34];
$personne2 = (object)["prenom" => "perrine", "nom" => "mallard", "age" => 27];
array_push($tab, $personne, $personne2);
$header = ["prenom", "nom", "age"];
arrayToCsv($fileName, $tab, ",", $header);
change_color("red");

echo(PHP_EOL . PHP_EOL .
	"_________________" . PHP_EOL .
	"1. cherchez une personne" . PHP_EOL .
	"2. supprimer une personne" . PHP_EOL .
	"3. quitter" . PHP_EOL);

while (true) {

	$saisie = readline('veulliez choisir un menu ou 3 pour quitter ');
	switch ($saisie) {
		case 1:
			require_once('./personne/lister_personnes.php');
			break;
		case 2:
			require_once('./personne/suppimer_personnes.php');
			break;
		case 3:
			exit;
			break;
	}
}





