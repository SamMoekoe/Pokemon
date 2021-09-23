<?php
class Pokemons { 
   public $name;
   public $energytype ;
   public $hitpoints ;
   public $health;
   public $attackOne;
   public $attackTwo;
   public $weakness;
   public $resistance;

   public function __construct($name, $energytype, $hitpoints, $health, $attackOne, $attackTwo, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energytype = $energytype;
        $this->hitpoints = $hitpoints;
        $this->health = $health;
        $this->attackOne = $attackOne;
        $this->attackTwo = $attackTwo;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }
}