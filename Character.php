<?php

// Character
class Character{
    protected string $weapon;
    protected int $weaponDamage;
    protected string $shield;
    protected int $shieldValue;
    protected int $health;
    protected int $rage;

    
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
     * setHealth
     * @param int $health
     * 
     * @return void
     */
    public function setHealth(int $health):void{
        $this -> health = $health;
    }

    /**
     * getHealth
     * @return int
     */
    public function getHealth():int{
        return $this -> health;
    }

    /**
     * setRage
     * @param int $rage
     * 
     * @return void
     */
    public function setRage(int $rage):void{
        $this -> rage = $rage;
    }

    /**
     * getRage
     * @return int
     */
    public function getRage():int{
        return $this -> rage;
    }

    /**
     * __construct
     * @param int $health
     * @param int $rage
     */
    function __construct(int $health, int $rage){
        $this -> setHealth($health);
        $this -> setRage($rage);
    }
}