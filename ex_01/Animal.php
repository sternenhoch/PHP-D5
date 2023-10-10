<?php

class Animal{

    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;

    public $name;
    public $legs;
    public $type; 
    

    public function __construct($name, $legs, $type){
        $this->name = $name;
        $this->legs = $legs;
        $this->type = $type;

      echo "My name is " . $this->name . " and I am a " . $this->getType() . "!" . PHP_EOL;
    }

    public function getName(){
        return $this->name;
    }

    public function getLegs () {
        return $this -> legs;
    }
    public function getType () {
        switch ($this->type) {
            case self::MAMMAL:
                return"mammal";
            case self::FISH:
                return"fish";
            case self::BIRD;
                return"bird"; 
            default:
                return"unknown";
            

            }
            
    }
}

