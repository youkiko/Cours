<?php
$bonjour = 'bonjour';
$tout = 'tout';
$lemonde = 'le monde';

$bonjour .= " $tout ";
$bonjour .= $lemonde ;

echo $bonjour;

// echo "$bonjour  $lemonde";  PHP_EOL;

// $jour = 'aujourd'hui'; // erreur
$jour = 'aujourd\'hui'; // ok échappement
$jour = "aujourd'hui"; // ok


