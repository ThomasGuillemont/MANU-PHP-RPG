<?php

// Character
class Character{
    protected int $health;
    protected int $rage;

    // __construct
    function __construct(int $health, int $rage) {
        $this->health = $health;
        $this->rage = $rage;
    }

    // setHealth
    public function setHealth($health){
        $this -> health = $health;
    }
    // getHealth
    public function getHealth(){
        return $this -> health;
    }

    // setRage
    public function setRage($rage){
        $this -> rage = $rage;
    }
    // getRage
    public function getRage(){
        return $this -> rage;
    }
}