<?php

abstract class Model {
    private $host = 'localhost';
    private $db_name = "tdw";
    private $username = "root";
    private $password = "";

    protected $personTable = 'Person';
    protected $adminTable = 'Admin';
    protected $teacherTable = 'Teacher';
    protected $studentTable = 'Student';
    protected $tutorTable = 'Tutor';
    protected $programTable = 'Program';
    protected $classroomTable = 'Classroom';
    protected $yearTable = 'SchoolYear';
    protected $cycleTable = 'Cycle';
    protected $articleTable = 'Article';
    protected $paragraphTable = 'Paragraph';
    protected $subjectTable = 'Subject';
    protected $tagTable = 'Tag';
    protected $receptionTable = 'Reception';
    protected $stringTable = 'String';

    protected $_connexion;

    public $table;

    public function getConnection(){
        $this->_connexion = null;

        try{
            $dsn = "mysql:dbname=".$this->db_name."; host=".$this->host.";";
            $this->_connexion = new PDO($dsn, $this->username, $this->password);
            $this->_connexion->exec('set names utf8');
        }catch(PDOException $e){
            echo 'Erreur de connexion : '.$e->getMessage();
        }
    }   

    public function request(string $sql){
        $query = $this->_connexion->prepare($sql);
        try{
            $query->execute();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $query->fetch();
    }

    public function requestAll(string $sql){
        $query = $this->_connexion->prepare($sql);
        try{
            $query->execute();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $query->fetchAll();
    }

    public function getAll(string $order = "", string $search = ""){
        $sql = "SELECT * FROM ".$this->table;
        if($order != ""){
            $sql = $sql." ORDER BY ".$order;
        }
        return $this->requestAll($sql);
    }

    public function findById($id){
        $sql = "SELECT * FROM ".$this->table." WHERE id=".$id;
        return $this->request($sql);
    }

}
