<?php



class Personnage {
	// proprieté/ attribute
	/**
	 * nom du personnage
	 *
	 * @var string $nom nom du personnage
	 */
	private  string $nom;
	private int $pointsdevie;
	private int $force;

	public function __construct($nom, $pointsdevie, $force = 100)
	{
		$this->nom = $nom;
		$this->pointsdevie = $pointsdevie;
		$this->force = $force;
	}

	public function setattaquer($personnage){
		$personnage->pointsdevie -= 10;
	}

	public function nom($personnage){
		$personnage->nom = readline(" changer le nom ");
	}
	//setter
	public function setnom($personnage){
		# $this->nom = $nouveaunom;
	}

	// getter
	public function getnom (){
		return $this->nom;
	}

	public function getPointsDeVie(){
		return $this->pointsdevie;
	}

	public function __toString()
	{
		$txt = '';
		$txt .= "nom : $this->nom\n";
		$txt .= "points de vie : $this->pointsdevie\n";
		$txt .= "force : $this->force\n";
		return $txt; 
	}

}

$personnage1 = new Personnage("geoffrey", 10000, 999); // instanciation
$personnage2 = new Personnage("manu", 20000, 800);
$personnage3 = new Personnage("emile", 500);

echo $personnage3->getPointsDeVie();
echo $personnage3;
#$personnage3->nom($personnage3);

// $personnage3->parler();
#echo $personnage3->pointsdevie . PHP_EOL;
#$personnage2->attaquer($personnage3);
// $personnage3->parler();

#echo$personnage3->pointsdevie;

// manipulation
#$personnage2->pointsdevie = 900;
#$personnage3->taille = 180; // impossible
#var_dump($personnage1);
#var_dump($personnage2);
#var_dump($personnage3);
// $personnage;
