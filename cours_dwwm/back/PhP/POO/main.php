<?php

require ('lib/init.php');
require ROOT_PATH . ("Controller/concessionController.php");
require ROOT_PATH . ('./Controller/voitureController.php');
// require ("./Concession.php");

$voiture1 = new VoitureController (50, 7);
$voiture1->setPuissance(18);
$voiture2 = new VoitureController (70, 9);
$voiture2->setVitesse(320);


$concessionController = new ConcessionController();
$concessionController->enregistrerVoiture($voiture1);
$concessionController->enregistrerVoiture($voiture2);

$concessionController->showAllCar();

print_r($concessionController->showAllCar());