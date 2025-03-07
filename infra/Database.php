<?php

namespace Infra;

use PDO;
use PDOException;

class Database
{
    private $host = "127.0.0.1";
    private $port = "3306";
    private $dbname = "teste";
    private $user = "root";
    private $password = "root";
    private $conn;

    public function __construct()
    {
        try {
            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->dbname}";
            $this->conn = new PDO($dsn, $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
