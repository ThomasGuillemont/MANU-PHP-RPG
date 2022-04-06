<?php

// Character
class Orc extends Character{
    private int $damage;
    
    /**
     * setDamage
     * @param int $damage
     * 
     * @return void
     */
    public function setDamage(int $damage):void{
        $this -> damage = $damage;
    }

    /**
     * getDamage
     * @return int
     */
    public function getDamage():int{
        return $this -> damage;
    }

    /**
     * __construct
     * @param int $damage
     * @param int $health
     * @param int $rage
     */
    public function __construct(int $damage, int $health, int $rage){
        // Orc stats
        $this -> setDamage($damage);

        // Character stats
        parent::__construct($health, $rage);
    }

    // Create Orc
    public function __toString(){
        return '
            <div class="fw-bold">Un Orc plutot gros arrive</div>
            <div>Entre 600 et 800 de valeur d\'attaque, ça cogne !</div>
        ';
    }

    // Orc damage
    public function attack(){
        return rand(600, 800);
    }
}

// Orc
$orc = new Orc(700, 500, 0);