<?php

class PresentationModel extends Model{

    private $pTable = 'Paragraph';

    public function __construct(){
        $this->getConnection();
        $this->table = $this->pTable;
    }

    public function insert($index, $text){
        $sql = "INSERT INTO ".$this->pTable." (`id`, `p_index`, `content`) 
        VALUES (NULL, ".$index.", '".$text."')";
        return $this->request($sql);
    }

    public function delete($id){
        $sql = "DELETE FROM ".$this->pTable." WHERE id=".$id;
        return $this->request($sql);
    }

    public function update($id, $index, $text){
        $sql = "UPDATE ".$this->pTable."
        SET p_index = ".$index.", content = '".$text."' 
        WHERE id = ".$id;
        return $this->request($sql);
    }
}