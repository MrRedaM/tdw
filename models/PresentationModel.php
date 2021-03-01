<?php

class PresentationModel extends Model{

    public function __construct(){
        $this->getConnection();
        $this->table = $this->paragraphTable;
    }

    public function insert($index, $text){
        $sql = "INSERT INTO ".$this->paragraphTable." (`id`, `p_index`, `content`) 
        VALUES (NULL, ".$index.", '".$text."')";
        return $this->request($sql);
    }

    public function delete($id){
        $sql = "DELETE FROM ".$this->paragraphTable." WHERE id=".$id;
        return $this->request($sql);
    }

    public function update($id, $index, $text){
        $sql = "UPDATE ".$this->paragraphTable."
        SET p_index = ".$index.", content = '".$text."' 
        WHERE id = ".$id;
        return $this->request($sql);
    }
}