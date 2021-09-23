<?php
class Water extends Energytype {
    public function __construct($name, $Hitpoints, $Health, $AttackOne, $AttackTwo, $Weakness, $Resistance)
{
    $energytype = 'water';
    parent::__construct($name, $energytype, $hitpoints, $health, $attackOne, $attackTwo, $weakness, $resistance);
}

}