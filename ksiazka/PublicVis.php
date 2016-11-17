<?php
//PublicVis.php
class PublicVis
{
    private $password;
    private function openSesame($someData)
    {
        $this->password=$someData;
        if($this->password=="sekret")
        {
            echo "Uzyskałeś dostęp!<br/>";
        }
        else
        {
            echo "Wypuścić psy!<br/>";
        }
    }
    public function unlock($safe)
    {
        $this->openSesame($safe);
    }
}
$worker=new PublicVis();
$worker->unlock("sekret");
$worker->unlock("coś");
?>
