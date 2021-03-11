<?php

class ProgramModel extends Model{

    public function __construct(){
        $this->getConnection();
        $this->table = $this->programTable;
    }

    public function insert($teacher, $classroom, $subject, $day, $start, $end){
        $sql = "INSERT INTO ".$this->programTable." (`id`, `teacher`, `subject`, `classroom`, `day`, `start`, `end`) 
        VALUES (NULL, ".$teacher.", ".$subject.", ".$classroom.", ".$day.", '".$start."', '".$end."')";
        return $this->request($sql);
    }

    public function delete($id){
        $sql = "DELETE FROM ".$this->programTable." WHERE id=".$id;
        return $this->request($sql);
    }

    public function update($id, $teacher, $subject, $start, $end){
        $sql = "UPDATE ".$this->programTable."
        SET teacher = ".$teacher.", subject = ".$subject.", start = '".$start."', end = '".$end."' 
        WHERE id = ".$id;
        return $this->request($sql);
    }

    public function findByTeacher($id, string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->table." WHERE teacher = ".$id;
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->requestAll($sql);
    }

    public function findByCycle($id, string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->table." WHERE classroom IN
            (SELECT id FROM ".$this->classroomTable." WHERE school_year IN 
            (SELECT id FROM ".$this->yearTable." WHERE cycle = ".$id."))";
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->requestAll($sql);
    }

    public function findByClassroom($id, string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->table." WHERE classroom = ".$id;
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->requestAll($sql);
    }
}