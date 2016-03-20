<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 20.03.16
 * Time: 16:19
 */
include_once('InheritMath.php');

class ClientInherit{
    private $added;
    private $divided;
    private $textNum;
    private $output;
    public function __construct()
{
    $family=new InheritMath();
    $this->added=$family->simpleAdd(40,60);
    $this->divided=$family->simpleDivide($this->added,25);
    $this->textNum=$family->numToText($this->divided);
    $this->output=$family->addFace("Twój wynik",$this->textNum);
    echo $this->output;
}
}
$worker=new ClientInherit();
?>