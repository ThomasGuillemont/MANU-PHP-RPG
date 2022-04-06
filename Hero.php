<?php

// Character
class Hero extends Character{
    private string $weapon;
    private int $weaponDamage;
    private string $shield;
    private int $shieldValue;

    /**
     * setWeapon
     * @param string $Weapon
     * 
     * @return void
     */
    public function setWeapon(string $weapon):void{
        $this -> weapon = $weapon;
    }

    /**
     * getWeapon
     * @return string
     */
    public function getWeapon():string{
        return $this -> weapon;
    }

    /**
     * setWeaponDamage
     * @param int $weaponDamage
     * 
     * @return void
     */
    public function setWeaponDamage(int $weaponDamage):void{
        $this -> weaponDamage = $weaponDamage;
    }

    /**
     * getWeaponDamage
     * @return int
     */
    public function getWeaponDamage():int{
        return $this -> weaponDamage;
    }

    /**
     * setShield
     * @param string $shield
     * 
     * @return void
     */
    public function setShield(string $shield):void{
        $this -> shield = $shield;
    }

    /**
     * getShield
     * @return string
     */
    public function getShield():string{
        return $this -> shield;
    }

    /**
     * setShieldValue
     * @param int $shieldValue
     * 
     * @return void
     */
    public function setShieldValue(int $shieldValue):void{
        $this -> shieldValue = $shieldValue;
    }

    /**
     * getWeaponDamage
     * @return string
     */
    public function getShieldValue():int{
        return $this -> shieldValue;
    }

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
            <div class="fw-bold">Le Hero vient de voir le jour</div>
            <div>'.$this -> health.' PV / '.$this -> rage.' rage</div>
            <div>'.$this -> weapon.' avec '.$this -> weaponDamage.' de dégats</div>
            <div>'.$this -> shield.' avec '.$this -> shieldValue.' de défense</div>
        ';
    }

    // Hero damage receive
    public function attacked(int $damage):void{
        $this -> setHealth($damage - $this -> getShieldValue());
    }

    // Hero rage up
    public function rageUp(int $rage):void{
        $this -> setRage($this -> rage += $rage);
    }

    // Hero attack
    public function superAttack(){
        return $this -> getWeaponDamage();
    }
}

// Hero
$hero = new Hero('Epée de débutant', 250, 'Armure de débutant', 600, 2000, 0);