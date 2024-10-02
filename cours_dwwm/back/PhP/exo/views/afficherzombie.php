<?php

echo "Nom : " . $zombie->getNom() . "\n";
echo "Classe : " . $zombie->getClass() . "\n";
echo "Attaque : " . $zombie->getAttaque() . "\n";
echo "Points de vie : " . $zombie->getpointsdevie() . "\n";
echo "Fait partie des forces du : " . ((!$zombie->getdesforcedumal()) ? 'mal'  : 'bien') . "\n";
echo "Level : " . $zombie->getLevel() . "\n";