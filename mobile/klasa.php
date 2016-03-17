<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 17.03.16
 * Time: 14:45
 */
class MobileSniffer{
    private $userAgent;
    private $device;
    private $browser;
    private $deviceLength;
    private $browserLength;

    public function __construct(){
        $this->userAgent=$_SERVER['HTTP_USER_AGENT'];
        $this->userAgent=strtolower($this->userAgent);

        $this->device=array('tphone','ipad','android'.'stlk','blackberry','touch');
        $this->browser=array('firefox','chrome','opera','msie','safari','blackberry','trident');
        $this->deviceLength=count($this->device);
        $this->browserLength=count($this->browser);
    }
    public function findDevice(){
        for($uanSniff=0;$uanSniff<$this->deviceLength;$uanSniff++){
            if(strstr($this->userAgent,$this->device[$uanSniff])){
                return $this->device[$uanSniff];
            }
        }
    }
    public function findBrowser(){
        for($uanSniff=0;$uanSniff<$this->browserLength;$uanSniff++){
            if(strstr($this->userAgent,$this->browser[$uanSniff])){
                return $this->browser[$uanSniff];
            }
        }
    }
}


?>
