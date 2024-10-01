<?php

class voiture {
	private int $vitesse;
	private int $puissance;

	public function __construct($vitesse, $puissance)
	{
		$this->vitesse = $vitesse;
		$this->puissance = $puissance;
	}

	public function getVitesse(){
		return $this->vitesse;
	}

	public function setVitesse($nouvelleVitesse){
		$this->vitesse = $nouvelleVitesse;
	}

	/**
	 * Get the value of puissance
	 *
	 * @return int
	 */
	public function getPuissance(): int {
		return $this->puissance;
	}

	/**
	 * Set the value of puissance
	 *
	 * @param int $puissance
	 *
	 * @return self
	 */
	public function setPuissance(int $puissance): self {
		$this->puissance = $puissance;
		return $this;
	}
}

// $voiture1 = new Voiture(150, 10);

// echo $voiture1->getPuissance() . " CV ";
// echo $voiture1->getVitesse() . " km/h" . PHP_EOL;


// $voiture1->setVitesse(230);
// $voiture1->setPuissance(7);



// echo $voiture1->getPuissance() . " CV ";
// echo $voiture1->getVitesse() . " km/h ";