<?php
require ROOT_PATH . 'model\hero.php';

class heroController {

	private object $hero;

	public function __construct($nom, $class, $attaque, $pointsdevie, $desforcedumal)
	{
		$this->hero = new hero ($nom, $class, $attaque, $pointsdevie, $desforcedumal);

	}

	public function __toString()
{
	$txt = '';
	$txt .= "Nom:" .  $this->hero->getNom() . "\n";
	$txt .= "Class:" . $this->hero->getClass()  . "\n";
	$txt .= "Attaque:" . $this->hero->getAttaque() . "\n";
	$txt .= "Points de vie :" . $this->hero->getPointsdevie() . "\n";
	$txt .= "Force: " . (($this->hero->getdesforcedumal())? "mal" : 'bien') . "\n";
	return $txt;
}

}