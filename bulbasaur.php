<?php
class Grass extends Energytype {
    public function __construct($name, $hitpoints, $health, $attackOne, $attackTwo, $weakness, $resistance)
{
    $energytype = 'grass';
    parent::__construct($name, $energytype, $hitpoints, $health, $attackOne, $attackTwo, $weakness, $resistance);
}

}