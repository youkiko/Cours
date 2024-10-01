<?php

$fruit1 = 'Pomme';
$fruit2 = 'Banane';
// echo "fruit1 : $fruit1\n";  // pomme
// echo "fruit2 : $fruit2"; // banane
$fruit2 = &$fruit1; // passage par référence
// echo "fruit1 : $fruit1\n";  // pomme
// echo "fruit2 : $fruit2"; // banane

$fruit1 = 'fraise';
echo "fruit1 : $fruit1\n";  // pomme
echo "fruit2 : $fruit2"; // banane