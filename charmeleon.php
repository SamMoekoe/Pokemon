<?php
class Charmeleon extends Pokemon {
    public function __construct($name, $Hitpoints, $Health, $AttackOne, $AttackTwo, $Weakness, $Resistance)
{
    $energytype = 'fire';
    parent::__construct($name, $energytype, $hitpoints, $health, $attackOne, $attackTwo, $weakness, $resistance);
}

}