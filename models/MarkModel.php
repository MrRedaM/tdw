<?php

class MarkModel extends Model{

    public function __construct(){
        $this->getConnection();
        $this->table = $this->markTable;
    }

    public function findByStudent($id, string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->markTable." WHERE student = ".$id;
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->requestAll($sql);
    }

}