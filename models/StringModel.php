<?php

class StringModel extends Model{

    public function __construct(){
        $this->getConnection();
        $this->table = $this->stringTable;
    }

}