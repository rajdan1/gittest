<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 19.03.16
 * Time: 22:08
 */
include_once('IProduct.php');
class FruitStore implements IProduct{
    function apples(){
        return "FruitStore mowi: Mamy jabkłka<>";
    }
    function oranges(){
        return "FruitStore mówi: Nie ma cytrusów!<br/>";
    }
}
?>
