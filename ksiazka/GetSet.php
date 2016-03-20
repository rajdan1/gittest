<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 20.03.16
 * Time: 12:17
 */

class GetSet{
    private $dataWarehouse;

    function __construct(){
        $this->setter(2000);
        $got=$this->getter();
        echo $got;
    }

    private function getter(){
        return $this->dataWarehouse;
    }

    private function setter($setValue){
        $this->dataWarehouse=$setValue;
    }
}
$worker= new GetSet();
?>
