<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 19.03.16
 * Time: 21:21
 */
interface IConnectInfo{
    const HOST   ="localhost";
    const UNAME  ="phpWorker";
    const DBNAME ="dpPatt";
    const PW     ="eassyWay";
    function testConnection();
}


?>
