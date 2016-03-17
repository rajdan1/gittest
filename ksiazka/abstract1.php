<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 17.03.16
 * Time: 22:45
 * abstract class
 */
class OneTrick{
    private $storeHere;
    public function trick($whathever){
        $this->storeHere=$whathever;
        return $this->storeHere;
    }
}

$doIt=new OneTrick();
$dataNow=$doIt->trick("Idealnie.");
echo $dataNow;

?>


