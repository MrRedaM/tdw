<?php

class ArticleModel extends Model{

    private $articleTable = 'Article';

    public function __construct(){
        $this->getConnection();
        $this->table = $this->articleTable;
    }

    public function insert($title, $desc, $image){
        $sql = "INSERT INTO ".$this->articleTable." (`id`, `title`, 'image', `description`) 
        VALUES (NULL, '".$title."', '".$image."', '".$desc."')";
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