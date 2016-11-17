<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 19.03.16
 * Time: 21:31
 */
include_once('IConnectInfoMethod.php');
class ConSQL implements IConnectInfo{
    private $server=IConnectInfo::HOST;
    private $currentDB=IConnectInfo::DBNAME;
    private $user=IConnectInfo::UNAME;
    private $pass=IConnectInfo::PW;

    public function testConnection(){
        $hookup=new mysqli($this->server, $this->user, $this->pass, $this->currentDB);

        if(mysqli_connect_error()){
            die('life is brutal');
        }
        print "połączyłeś się, graty </br>".$hookup->host_info;
        $hookup->close();
    }
}
$userConstant = new ConSQL();
$userConstant->testConnection();
?>
