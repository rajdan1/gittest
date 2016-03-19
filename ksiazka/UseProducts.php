<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 19.03.16
 * Time: 23:21
 */

include_once('CitrusStore.php');
include_once('FruitStore.php');

class UseProducts{
    public function __consturct(){
        $appleSauce = new FruitStore();
        $orangeJuice= new CitrusStore();
        $this->doInterface($appleSauce);
        $this->doInterface($orangeJuice);
    }
    function doInterface(IProduct $product){
        echo $product->apples();
        echo $product->oranges();
    }
}

$worker=new UseProducts();
?>
