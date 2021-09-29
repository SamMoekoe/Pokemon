<?php
class pokemon { 
   public $name;
   public $energytype ;
   public $hitpoints ;
   public $health;
   public $attackOne;
   public $attackTwo;
   public $weakness;
   public $resistance;

   public function __construct($energyType, $name, $hitpoints, $weakness, $resistance, $attacks)
   {
       $this->energyType = $energyType;
       $this->name = $name;
       $this->hitPoints = $hitpoints;
       $this->hp = $hitpoints;
       $this->weakness = $weakness;
       $this->resistance = $resistance;
       $this->attacks = $attacks;
       
   }
}