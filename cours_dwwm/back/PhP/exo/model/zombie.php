<?php


class Zombie extends heroController {
    private const ATTAQUE_ZOMBIE = 10;
	private const CLASSE_ZOMBIE = 'Zombie';
	private const FORCE_ZOMBIE = false;

    public function __construct($nom, $pointsdevie)
    {
        parent::__construct($nom, self::CLASSE_ZOMBIE,self::ATTAQUE_ZOMBIE, $pointsdevie, self::FORCE_ZOMBIE);
    }
}