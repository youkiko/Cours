<?php

require ROOT_PATH . 'model/humain.php';
#require (__DIR__ . "/../model/humain.php");

class humainController  {
	private object $humain;

	public function __construct($nom,
    $class,
    $attaque,
    $pointsdevie,
    $desforcedumal,
	$level)
	{
		$this->humain = new humain($nom,
		$class,
		$attaque,
		$pointsdevie,
		$desforcedumal,
		$level);
	}

	/**
	 * Get the value of humain
	 *
	 * @return object
	 */
	public function getHumain(): object {
		return $this->humain;
	}

	/**
	 * Set the value of humain
	 *
	 * @param object $humain
	 *
	 * @return self
	 */
	public function setHumain(object $humain): self {
		$this->humain = $humain;
		return $this;
	}

	public function afficherHumain(){
		$humain = $this->humain;
		require ROOT_PATH . 'views/afficherHumain.php';
	}

}