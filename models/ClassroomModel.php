<?php

class ClassroomModel extends Model{

    public function __construct(){
        $this->getConnection();
        $this->table = $this->classroomTable;
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

    public function findByCycle($id, string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->classroomTable." WHERE school_year IN 
            (SELECT id FROM ".$this->yearTable." WHERE cycle = ".$id.")";
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->requestAll($sql);
    }

    public function getYearFromClassroom($id, string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->yearTable." WHERE id IN 
            (SELECT school_year FROM ".$this->classroomTable." WHERE id = ".$id.")";
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->request($sql);
    }

    public function getCycleFromClassroom($id, string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->cycleTable." WHERE id IN 
            (SELECT cycle FROM ".$this->yearTable." WHERE id IN 
            (SELECT school_year FROM ".$this->classroomTable." WHERE id = ".$id."))";
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->request($sql);
    }

}