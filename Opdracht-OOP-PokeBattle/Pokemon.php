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

   public function __construct($name, $Energytype, $Hitpoints, $Health, $AttackOne, $AttackTwo, $Weakness, $Resistance)
    {
        $this->name = $name;
        $this->energytype = $Energytype;
        $this->hitpoints = $Hitpoints;
        $this->health = $Health;
        $this->attackOne = $AttackOne;
        $this->attackTwo = $AttackTwo;
        $this->weakness = $Weakness;
        $this->resistance = $Resistance;
    }
}