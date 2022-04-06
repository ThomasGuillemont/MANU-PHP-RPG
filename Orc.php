<?php
require_once(dirname(__FILE__).'/Character.php');

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
    public function __construct(int $damage, string $weapon, int $weaponDamage, string $shield, int $shieldValue, int $health, int $rage){
        // Orc stats
        $this -> setDamage($damage);
        $this -> setWeapon($weapon);
        $this -> setWeaponDamage($weaponDamage);
        $this -> setShield($shield);
        $this -> setShieldValue($shieldValue);

        // Character stats
        parent::__construct($health, $rage);
    }

    // Create Orc
    public function __toString(){
        return '
            <div class="fw-bold fs-5 pb-2c">Orc</div>
            <div><b>'.$this -> weapon.'</b> - '.$this -> weaponDamage.' de dégats</div>
            <div><b>'.$this -> shield.'</b> - '.$this -> shieldValue.' de défense</div>
        ';
    }

    // Orc damage
    public function attack():void{
        $this -> setDamage(rand(600, 800) + $this -> getWeaponDamage());
    }

    // Orc damage receive
    public function attacked(int $damage):void{
        $this -> setHealth(($this -> getShieldValue() + $this -> getHealth()) - $damage);
    }
}