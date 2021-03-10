<?php

class StringModel extends Model{

    public function __construct(){
        $this->getConnection();
        $this->table = $this->stringTable;
    }

    public function findStrById($id){
        $sql = "SELECT * FROM ".$this->table." WHERE id='".$id."'";
        return $this->request($sql);
    }

    public function update($id, $value){
        $sql = "UPDATE ".$this->stringTable."
        SET value = '".$value."' 
        WHERE id = '".$id."'";
        return $this->request($sql);
    }

}