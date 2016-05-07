<?php


namespace Doc\Core;


class MySQLDatabase
{
    private $pdo = false;
    private $host;
    private $dbname;
    private $user;
    private $password;

    public function __construct(array $config)
    {
        foreach($config as $key => $value){
            $setter = 'set' . ucfirst($key);
            if( method_exists($this, $setter) ){
                $this->$setter($value);
            }
        }
    }

    private function setHost($host)
    {
        $this->host = $host;
    }

    private function setDbname($dbname)
    {
        $this->dbname = $dbname;
    }

    private function setPassword($password = '')
    {
        $this->password = $password;
    }

    private function setUser($user = 'root')
    {
        $this->user = $user;
    }

    public function getPdo()
    {
        if($this->pdo === false) {
            $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->dbname;", $this->user, $this->password);
        }
        return $this->pdo;
    }


}