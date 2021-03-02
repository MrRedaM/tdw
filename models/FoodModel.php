<?php

class FoodModel extends Model{

    public function __construct(){
        $this->getConnection();
        $this->table = $this->foodTable;
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