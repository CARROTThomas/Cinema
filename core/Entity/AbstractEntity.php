<?php

namespace Entity;
require_once ('core/Database/PDOMySQL.php');
class AbstractEntity
{
    protected \PDO $pdo;
    protected $tableName;

    public function __construct(){
        $this->pdo = \Database\PDOMySQL::getPdo();
    }

    public function findAll()
    {

        $request = $this->pdo->query("SELECT * FROM $this->tableName");

        $posts = $request->fetchAll();
        return $posts;
    }
}