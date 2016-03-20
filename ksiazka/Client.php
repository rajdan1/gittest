<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 20.03.16
 * Time: 12:49
 */

include_once('Dogs.php');
include_once('Cats.php');
class Client{
    function __construct(){
        $dogs=new Dogs();
        $cats=new Cats();
    }
}
$worker = new Client();
?>