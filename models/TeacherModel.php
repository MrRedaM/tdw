<?php

class TeacherModel extends Model{

    public function __construct(){
        $this->getConnection();
        $this->table = $this->teacherTable;
    }

    public function insertReception($teacher, $day, $start, $end){
        $sql = "INSERT INTO ".$this->receptionTable." (`id`, `teacher`, `day`, `start`, `end`) 
        VALUES (NULL, ".$teacher.", ".$day.", '".$start."', '".$end."')";
        return $this->request($sql);
    }

    public function deleteReception($id){
        $sql = "DELETE FROM ".$this->receptionTable." WHERE id=".$id;
        return $this->request($sql);
    }

    public function findTeacherByCycle($id){
        $sql = "SELECT * FROM ".$this->personTable." WHERE id IN 
        (SELECT teacher FROM ".$this->programTable." WHERE classroom IN 
        (SELECT id FROM ".$this->classroomTable." WHERE school_year IN 
        (SELECT id FROM ".$this->yearTable." WHERE cycle IN 
        (SELECT id FROM ".$this->cycleTable." WHERE id = ".$id."))))";
        return $this->requestAll($sql);
    }

    public function getReceptions($id, string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->receptionTable." WHERE teacher = ".$id;
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->requestAll($sql);
    }

}