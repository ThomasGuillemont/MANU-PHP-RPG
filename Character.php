<?php

// Character
class Character{
    protected int $health;
    protected int $rage;

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