<?php

namespace Entity;
require_once ('core/Entity/AbstractEntity.php');
class AfficheCinema extends AbstractEntity
{
    protected $tableName = "afficheCinema";

    public function insert(string $title, string $description){
        $request = $this->pdo->prepare('INSERT INTO AfficheCinema SET title = :title, description = :description');
        $request->execute([
            "title"=> $title,
            "description"=> $description
        ]);
    }

    public function update(int $id, string $title, string $description){
        $request = $this->pdo->prepare('UPDATE AfficheCinema SET title= :title, description = :description WHERE id = :id');
        $request->execute([
           "title"=> $title,
           "description"=> $description,
           "id"=> $id
        ]);
    }
}