<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 17.03.16
 * Time: 14:45
 */
class TellAll{
    private $userAgent;
    public function __construct(){
        $this->userAgent=$_SERVER['HTTP_USER_AGENT'];
        echo $this->userAgent;
    }

}
$tellAll=new TellAll();

?>