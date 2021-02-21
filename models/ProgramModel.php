<?php

class ProgramModel extends Model{

    private $programTable = 'Program';

    public function __construct(){
        $this->getConnection();
        $this->table = $this->programTable;
    }

    public function insert($title, $desc){
        $sql = "INSERT INTO ".$this->articleTable." (`id`, `title`, `description`) 
        VALUES (NULL, '".$title."', '".$desc."')";
        return $this->request($sql);
    }

    public function delete($id){
        $sql = "DELETE FROM ".$this->articleTable." WHERE id=".$id;
        return $this->request($sql);
    }

    public function update($id, $title, $desc){
        $sql = "UPDATE ".$this->articleTable."
        SET title = '".$title."', description = '".$desc."' 
        WHERE id = ".$id;
        return $this->request($sql);
    }

    public function findByTeacher($id, string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->table." WHERE teacher = ".$id;
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->requestAll($sql);
    }
}