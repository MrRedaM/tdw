<?php

class ProgramModel extends Model{

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

    public function findByCycle($id, string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->table." WHERE classroom IN
            (SELECT id FROM ".$this->classroomTable." WHERE school_year IN 
            (SELECT id FROM ".$this->yearTable." WHERE cycle = ".$id."))";
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->requestAll($sql);
    }
}