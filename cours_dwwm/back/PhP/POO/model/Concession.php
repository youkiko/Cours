<?php

class garage {
	private string $nom;
	private array $tabVoiture;

	public function __construct($nom = 'chez Bernard')
	{
		$this->nom = $nom;
		$this->tabVoiture = [];
	}

	/**
	 * Get the value of tabVoiture
	 *
	 * @return array
	 */
	public function getTabVoiture(): array {
		return $this->tabVoiture;
	}

	/**
	 * Set the value of tabVoiture
	 *
	 * @param array $tabVoiture
	 *
	 * @return self
	 */
	public function setTabVoiture(array $tabVoiture): self {
		$this->tabVoiture = $tabVoiture;
		return $this;
	}

	/**
	 * Get the value of nom
	 */
	public function getNom() {
		return $this->nom;
	}

	/**
	 * Set the value of nom
	 */
	public function setNom($nom): self {
		$this->nom = $nom;
		return $this;
	}
}