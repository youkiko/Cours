<?php

echo "Nom : " . $humain->getNom() . "\n";
echo "Classe : " . $humain->getClass() . "\n";
echo "Attaque : " . $humain->getAttaque() . "\n";
echo "Points de vie : " . $humain->getpointsdevie() . "\n";
echo "Fait partie des forces du : " . ((!$humain->getdesforcedumal()) ? 'mal'  : 'bien') . "\n";
echo "Level : " . $humain->getLevel() . "\n";