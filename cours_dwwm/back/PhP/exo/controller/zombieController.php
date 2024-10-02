<?php


require './Model/Zombie.php';

class ZombieController {
    private object $zombie;

    public function __construct($name, $pointsDeVie)
    {
        $this->zombie= new Zombie($name, $pointsDeVie);
    }

    /**
     * Get the value of zombie
     *
     * @return object
     */
    public function getZombie(): object {
        return $this->zombie;
    }

    /**
     * Set the value of zombie
     *
     * @param object $zombie
     *
     * @return self
     */
    public function setZombie(object $zombie): self {
        $this->zombie = $zombie;
        return $this;
    }


}