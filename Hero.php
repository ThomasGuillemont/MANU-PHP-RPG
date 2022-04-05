<?php
require 'Character.php';

// Character
class Hero extends Character{
    private string $weapon;
    private int $weaponDamage;
    private string $shield;
    private int $shieldValue;

    // __construct
    public function __construct(string $weapon, int $weaponDamage, string $shield, int $shieldValue, int $health, int $rage){
        // Hero stats
        $this -> weapon = $weapon;
        $this -> weaponDamage = $weaponDamage;
        $this -> shield = $shield;
        $this -> shieldValue = $shieldValue;
        // Character stats
        $this -> health = $health;
        $this -> rage = $rage;
        parent::__construct($health, $rage);
    }
}

// Hero
$hero = new Hero('L\'épée d\'Ophile', 10, 'Armure de débutant', 50, 100, 0);
var_dump($hero);