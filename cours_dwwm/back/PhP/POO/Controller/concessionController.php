<?php
require ROOT_PATH . ('model/Concession.php');




class ConcessionController {
	private object $concession;

	public function __construct()
	{
			$this->concession = new garage();
	}
	public function enregistrerVoiture($nouvelleVoiture){
		$tab = $this->concession->getTabVoiture();
		$tab[] = $nouvelleVoiture;
		$this->concession->setTabVoiture($tab);
	}

	public function showAllCar(){
		return $this->concession->getTabVoiture();
	}
}