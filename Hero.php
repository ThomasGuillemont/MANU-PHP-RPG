<?php
require_once(dirname(__FILE__).'/Character.php');

// Character
class Hero extends Character{
    /**
     * __construct
     * @param string $weapon
     * @param int $weaponDamage
     * @param string $shield
     * @param int $shieldValue
     * @param int $health
     * @param int $rage
     */
    public function __construct(string $weapon, int $weaponDamage, string $shield, int $shieldValue, int $health, int $rage){
        // Hero stats
        $this -> setWeapon($weapon);
        $this -> setWeaponDamage($weaponDamage);
        $this -> setShield($shield);
        $this -> setShieldValue($shieldValue);

        // Character stats
        parent::__construct($health, $rage);
    }

    // Create Hero
    public function __toString(){
        return '
            <div class="fw-bold fs-5 pb-2">Héro</div>
            <div><b>'.$this -> weapon.'</b> - '.$this -> weaponDamage.' de dégats</div>
            <div><b>'.$this -> shield.'</b> - '.$this -> shieldValue.' de défense</div>
        ';
    }

    // Hero damage receive
    public function attacked(int $damage):void{
        $this -> setHealth(($this -> getShieldValue() + $this -> getHealth()) - $damage);
    }

    // Hero rage up
    public function rageUp(int $rage):void{
        $this -> setRage($this -> rage += $rage);
    }
}