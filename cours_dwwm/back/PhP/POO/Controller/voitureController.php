<?php

require ROOT_PATH . 'model/voiture.php';

class VoitureController {
	private object $voiture;

	public function __construct(){
		$this->voiture = new Voiture(200, 9);
	}

	public function setPuissance($nouvellePuissance){
		$this->voiture->setPuissance($nouvellePuissance);
	}

	public function setVitesse($nouvelleVitesse){
		$this->voiture->setVitesse($nouvelleVitesse);
	}

}




