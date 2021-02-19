<?php

class AccountModel extends Model{

    private $personTable = 'Person';
    private $adminTable = 'Admin';
    private $teacherTable = 'Teacher';
    private $studentTable = 'Student';
    private $tutorTable = 'Tutor';

    public function __construct(){
        $this->getConnection();
        $this->table = $this->personTable;
    }

    public function getTeachers(string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->personTable." WHERE ";
        if($search != ""){
            $sql = $sql."(first_name LIKE '%".$search."%' OR last_name LIKE '%".$search."%' OR mail LIKE '%".$search."%') AND ";
        }
        $sql = $sql. "id IN (SELECT id FROM ".$this->teacherTable.")";
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->requestAll($sql);
    }

    public function getStudents(string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->personTable." WHERE ";
        if($search != ""){
            $sql = $sql."(first_name LIKE '%".$search."%' OR last_name LIKE '%".$search."%' OR mail LIKE '%".$search."%') AND ";
        }
        $sql = $sql. "id IN (SELECT id FROM ".$this->studentTable.")";
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->requestAll($sql);
    }

    public function getTutors(string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->personTable." WHERE ";
        if($search != ""){
            $sql = $sql."(first_name LIKE '%".$search."%' OR last_name LIKE '%".$search."%' OR mail LIKE '%".$search."%') AND ";
        }
        $sql = $sql. "id IN (SELECT id FROM ".$this->tutorTable.")";
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->requestAll($sql);
    }

    public function getAdmin(string $mail, string $pass_hash){
        $sql = "SELECT id FROM ".$this->personTable." WHERE mail='".$mail."' AND passwd_hash='".$pass_hash."'";
        $person = $this->request($sql);
        if(isset($person[0])){
            $sql = "SELECT * FROM ".$this->adminTable." WHERE id='".$person[0]."'";
            return $this->request($sql);
        }
        return null;
    }


}