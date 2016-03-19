<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 19.03.16
 * Time: 22:13
 */

include_once('IProduct.php');

class CitrusStore implements IProduct{
    function apples(){
        return "CitrusStore mówi: Nie sprzedajemy jabłek!.<br/>";
    }
    function oranges(){
        return "CitrusStore mówi: Mamy pomarańcze!.<br/>";
    }
}
?>
