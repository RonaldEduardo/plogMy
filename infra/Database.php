<?php

namespace Infra;

use PDO;
use PDOException;
use Dotenv\Dotenv;

require '../vendor/autoload.php';

class Database
{
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $pass;
    private $conn;

    public function __construct()
    {
        // Carregar variáveis de ambiente do arquivo .env
        $pathEnv = dirname(__DIR__, 1);
        $dotenv = Dotenv::createImmutable($pathEnv);
        $dotenv->load();

        // Atribuir valores das variáveis de ambiente às propriedades da classe
        $this->host = $_ENV["DB_HOST"];
        $this->port = $_ENV["DB_PORT"];
        $this->dbname = $_ENV["DB_NAME"];
        $this->user = $_ENV["DB_USER"];
        $this->pass = $_ENV["DB_PASS"];

        try {
            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->dbname}";
            $this->conn = new PDO($dsn, $this->user, $this->pass);
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

    public function query($sql)
    {
        return $this->conn->query($sql);
    }
}
