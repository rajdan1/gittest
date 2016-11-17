<?php
ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);
include_once('IMethodHolder.php');
class ImplementAlpha implements IMethodHolder
{
    public function getInfo($info)
    {
        echo "Wiadomości z ostatniej chwili! " . $info . "<br/>";
    }
    public function sendInfo($info)
    {
        return $info;
    }
    public function calculate($first,$second)
    {
        $calulated = $first * $second;
        return $calulated;
    }
    public function useMethods()
    {
        $this->getInfo("Niebo się wali...");
        echo $this->sendInfo("Głosuj na senatora Parskacza!") . "<br/>";
        echo "Zarabiasz " . $this->calculate(20,15) . " zł w swojej pracy dorywczej<br/>";
    }
}
$worker=new ImplementAlpha();
$worker->useMethods();
?>
