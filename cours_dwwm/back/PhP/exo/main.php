<?php
require 'lib/init.php';
require ROOT_PATH . 'controller/heroController.php';
require ROOT_PATH . 'controller/humainController.php';
require ROOT_PATH . 'controller/zombieController.php';

$hero1 = new heroController('milo', 'guerrier', 10, 100, false);
$hero2 = new heroController('tya', 'archère', 5, 50, false);
$hero3 = new heroController('lili', 'archère', 5, 50, true);
$hero4 = new heroController('gael', 'voleur', 2, 10, true);
$humain1 = new humainController('perrine', 'mage', 50, 25, false, 99);


// echo ($hero1) . "\n";
// echo $hero2 . "\n";
// echo $hero3 . "\n";
// echo $hero4 . "\n";
$humain1->afficherHumain();

