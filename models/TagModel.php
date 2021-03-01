<?php

class TagModel extends Model{

    public function __construct(){
        $this->getConnection();
        $this->table = $this->tagTable;
    }

    public function insert($name){
        $sql = "INSERT INTO ".$this->tagTable." (`id`, `name`) 
        VALUES (NULL, '".$name."')";
        return $this->request($sql);
    }

    public function delete($id){
        $sql = "DELETE FROM ".$this->tagTable." WHERE id=".$id;
        return $this->request($sql);
    }

    public function update($id, $name){
        $sql = "UPDATE ".$this->tagTable."
        SET name = '".$name."
        WHERE id = ".$id;
        return $this->request($sql);
    }
}