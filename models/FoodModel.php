<?php

class FoodModel extends Model{

    public function __construct(){
        $this->getConnection();
        $this->table = $this->foodTable;
    }

    public function insert($date, $plat){
        $sql = "INSERT INTO ".$this->foodTable." (`id`, `day`, `menu`) 
        VALUES (NULL, '".$date."', '".$plat."')";
        return $this->request($sql);
    }

    public function delete($id){
        $sql = "DELETE FROM ".$this->foodTable." WHERE id=".$id;
        return $this->request($sql);
    }

    public function update($id, $plat){
        $sql = "UPDATE ".$this->foodTable."
        SET menu = '".$plat."' 
        WHERE id = ".$id;
        return $this->request($sql);
    }

    public function getWeekMenu($week, string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->foodTable." WHERE (";
        foreach($week as $day){
            $sql = $sql."day = '".$day."' OR ";
        }
        $sql = $this->str_lreplace("OR ", "", $sql);
        $sql = $sql.")";
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->requestAll($sql);
    }

    private function str_lreplace($search, $replace, $subject){
        $pos = strrpos($subject, $search);

        if($pos !== false){
            $subject = substr_replace($subject, $replace, $pos, strlen($search));
        }

        return $subject;
    }
}