<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 20.03.16
 * Time: 12:41
 */

class FurryPets{
    protected $sound;
    protected function fourlegs(){
        return "Chodzą na czterech łapach.";
    }
    protected function makesSound($petNoise){
        $this->sound=$petNoise;
        return $this->sound;
    }
}
?>