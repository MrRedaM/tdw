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

    public function insertPerson($last, $first, $mail, $address, $phone1, $phone2, $phone3){
        $sql = "INSERT INTO ".$this->personTable." (`id`, `last_name`, `first_name`, `address`, `phone1`, `phone2`, `phone3`, `mail`, `passwd_hash`) 
        VALUES (NULL, '".$last."', '".$first."', '".$phone3."', '".$address."', '".$phone1."', '".$phone2."', '".$mail."', '')";
        return $this->request($sql);
    }

    public function deletePerson($id){
        $sql = "DELETE FROM ".$this->personTable." WHERE id=".$id;
        return $this->request($sql);
    }

    public function updatePerson($id, $last, $first, $mail, $address, $phone1, $phone2, $phone3){
        $sql = "UPDATE ".$this->personTable."
        SET last_name = '".$last."', first_name = '".$first."', address = '".$address."', phone1 = '".$phone1."', phone2 = '".$phone2."', phone3 = '".$phone3."'
        WHERE id = ".$id;
        return $this->request($sql);
    }

    public function insertTeacher($id){
        $sql = "INSERT INTO ".$this->teacherTable." (`id`) 
        VALUES (".$id.")";
        return $this->request($sql);
    }

    public function updateTeacher($id){
        $sql = "UPDATE ".$this->teacherTable."
        SET title = '".$title."', description = '".$desc."' 
        WHERE id = ".$id;
        return $this->request($sql);
    }

    public function insertStudent($id){
        $sql = "INSERT INTO ".$this->studentTable." (`id`) 
        VALUES (".$id.")";
        return $this->request($sql);
    }

    public function updateStudent($id, $class_id){
        $sql = "UPDATE ".$this->studentTable."
        SET classroom = ".$class_id."
        WHERE id = ".$id;
        return $this->request($sql);
    }

    public function insertTutor($id){
        $sql = "INSERT INTO ".$this->tutorTable." (`id`) 
        VALUES (".$id.")";
        return $this->request($sql);
    }

    public function getPersons(string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->personTable;
        if($search != ""){
            $sql = $sql." WHERE (first_name LIKE '%".$search."%' OR last_name LIKE '%".$search."%' OR mail LIKE '%".$search."%')";
        }
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->requestAll($sql);
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

    public function getPersonIdByMail($mail){
        $sql = "SELECT id FROM ".$this->table." WHERE mail='".$mail."' ORDER BY id DESC";
        return $this->request($sql);
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

    public function getTeacherById($id){
        $sql = "SELECT * FROM ".$this->teacherTable." WHERE id=".$id;
        return $this->request($sql);
    }

    public function getStudentById($id){
        $sql = "SELECT * FROM ".$this->studentTable." WHERE id=".$id;
        return $this->request($sql);
    }

    public function getTutorById($id){
        $sql = "SELECT * FROM ".$this->tutorTable." WHERE id=".$id;
        return $this->request($sql);
    }

    public function isTeacher($id){
        $sql = "SELECT id FROM ".$this->teacherTable;
        return count($this->request($sql)) == 1;
    }

}