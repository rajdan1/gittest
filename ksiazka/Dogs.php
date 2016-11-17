<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 20.03.16
 * Time: 12:43
 */
include_once('FurryDogs.php');
class Dogs extends FurryPets{
    function __construct(){
        echo "Psy ".$this->fourlegs()."<br/>";
        echo $this->makesSound("Hau hau")."<br/>";
        echo $this->guardHouse()."<br/>";
    }
    private function guardHouse(){
        return "Wrrrrr"."<br/>";
    }
}
?>