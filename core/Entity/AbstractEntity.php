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

    public function findById(int $id)
    {
        $request = $this->pdo->prepare("SELECT * FROM $this->tableName WHERE id = :id");
        $request->execute(["id"=>$id]);
        $data = $request->fetch();
        return $data;
    }

    public function delete(int $id)
    {
        $request = $this->pdo->prepare("DELETE FROM $this->tableName WHERE id = :id");
        $request->execute(["id"=>$id]);
    }




}