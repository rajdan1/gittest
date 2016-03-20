<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 20.03.16
 * Time: 14:37
 */
include_once('ProtectedViss.php');

class ConcreteProtect extends ProtectVis{
    function __construct(){
        $this->countMoney();
    }
    protected function countMoney(){
        $this->wage="Twoja stawka godzinowa wynosi: $";
        echo $this->wage.$this->setHourly(36);
    }
}
$worker= new ConcreteProtect();

?>