<?php
class Fire extends Energytype {
    public function __construct($name, $Hitpoints, $Health, $AttackOne, $AttackTwo, $Weakness, $Resistance)
{
    $Energytype = 'Avengers';
    parent::__construct($name, $Energytype, $Hitpoints, $Health, $AttackOne, $AttackTwo, $Weakness, $Resistance);
}

}