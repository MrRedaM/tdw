<?php

class SubjectModel extends Model{

    public function __construct(){
        $this->getConnection();
        $this->table = $this->subjectTable;
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

}