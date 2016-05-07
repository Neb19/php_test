<?php


namespace Doc\Core;


class Database
{
    private $pdo = false;
    private $host;
    private $dbname;
    private $user;
    private $password;

    /**
     * Database constructor.
     * @param string $host
     * @param string $dbname
     * @param string $user
     * @param string $password
     */
    public function __construct($host, $dbname, $user = 'root', $password = '')
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;

        return $this->getPDO();
    }

    private function getPDO()
    {
        if($this->pdo === false) {
            try {
                $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            } catch(\Exception $e) {
                var_dump('Erreur : impossible d\'établir la connexion à la Base de données');
            }
        }
        return $this->pdo;
    }
}