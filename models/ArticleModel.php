<?php

class ArticleModel extends Model{

    public function __construct(){
        $this->getConnection();
        $this->table = $this->articleTable;
    }

    public function insert($title, $desc, $image, $tags){
        $sql = "INSERT INTO ".$this->articleTable." (`id`, `title`, `image`, `description`, `tags`) 
        VALUES (NULL, '".$title."', '".$image."', '".$desc."', '".$tags."')";
        return $this->request($sql);
    }

    public function delete($id){
        $sql = "DELETE FROM ".$this->articleTable." WHERE id=".$id;
        return $this->request($sql);
    }

    public function update($id, $title, $desc, $tags, $image){
        $sql = "UPDATE ".$this->articleTable."
        SET title = '".$title."', description = '".$desc."', tags = '".$tags."', image = '".$image."'  
        WHERE id = ".$id;
        return $this->request($sql);
    }

    public function updateNoImage($id, $title, $desc, $tags){
        $sql = "UPDATE ".$this->articleTable."
        SET title = '".$title."', description = '".$desc."', tags = '".$tags."'   
        WHERE id = ".$id;
        return $this->request($sql);
    }


    public function findByTag($id, string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->table." WHERE (tags LIKE '%#".$id."#%' OR tags LIKE '%#1#%')";
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->requestAll($sql);
    }
}