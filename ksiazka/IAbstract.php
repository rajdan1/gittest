<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 20.03.16
 * Time: 15:36
 */
abstract class IAbstract{
    protected $valueNow;
    abstract protected function giveCost();
    abstract protected function giveCity();

    public function displayShow(){
        $stringCost=$this->giveCost();
        $stringCost=(string)$stringCost;
        $allTogether=("Koszt: $". $stringCost." dla ".$this->giveCity());
        return $allTogether;
    }
}
?>
