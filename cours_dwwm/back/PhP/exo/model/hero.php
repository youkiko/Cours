<?php



class hero {

	private string $nom;
	private string $class;
	private int $attaque;
	private int $pointsdevie;
	private bool $desforcedumal;


	public function __construct($nom, $class, $attaque, $pointsdevie, $desforcedumal)
	{
		$this->nom = $nom;
		$this->class = $class;
		$this->attaque = $attaque;
		$this->pointsdevie = $pointsdevie;
		$this->desforcedumal = $desforcedumal;
	}

	/**
	 * Get the value of nom
	 *
	 * @return string
	 */
	public function getNom(): string {
		return $this->nom;
	}

	/**
	 * Set the value of nom
	 *
	 * @param string $nom
	 *
	 * @return self
	 */
	public function setNom(string $nom): self {
		$this->nom = $nom;
		return $this;
	}

	/**
	 * Get the value of class
	 *
	 * @return string
	 */
	public function getClass(): string {
		return $this->class;
	}

	/**
	 * Set the value of class
	 *
	 * @param string $class
	 *
	 * @return self
	 */
	public function setClass(string $class): self {
		$this->class = $class;
		return $this;
	}

	/**
	 * Get the value of attaque
	 *
	 * @return int
	 */
	public function getAttaque(): int {
		return $this->attaque;
	}

	/**
	 * Set the value of attaque
	 *
	 * @param int $attaque
	 *
	 * @return self
	 */
	public function setAttaque(int $attaque): self {
		$this->attaque = $attaque;
		return $this;
	}

	/**
	 * Get the value of pointsdeviedesforcedubien
	 *
	 * @return int
	 */
	public function getPointsdevie(): int {
		return $this->pointsdevie;
	}

	/**
	 * Set the value of pointsdeviedesforcedubien
	 *
	 * @param int $pointsdeviedesforcedubien
	 *
	 * @return self
	 */
	public function setPointsdevie(int $pointsdevie): self {
		$this->pointsdevie = $pointsdevie;
		return $this;
	}

	/**
	 * Get the value of pointsdeviedesforcedumal
	 *
	 * @return int
	 */
	public function getdesforcedumal(): int {
		return $this->desforcedumal;
	}

	/**
	 * Set the value of pointsdeviedesforcedumal
	 *
	 * @param int $pointsdeviedesforcedumal
	 *
	 * @return self
	 */
	public function setdesforcedumal(int $desforcedumal): self {
		$this->desforcedumal = $desforcedumal;
		return $this;
	}
}