<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 20.03.16
 * Time: 12:46
 */
include_once('FurryPets.php');
class Cats extends FurryPets{
    function __construct(){
        echo "Koty ".$this->fourlegs()."<br/>";
        echo $this->makesSound("Mrr, purrr")."<br/>";
        echo $this->ownsHouse()."<br/>";
    }
    private function ownsHouse(){
        return "Przejdę się tylko po tej klawiaturze..."."<br/>";
    }
}
?>