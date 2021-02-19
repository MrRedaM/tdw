<?php

abstract class Model {
    private $host = 'localhost';
    private $db_name = "tdw";
    private $username = "root";
    private $password = "";

    protected $_connexion;

    public $table;

    public function getConnection(){
        // On supprime la connexion précédente
        $this->_connexion = null;

        // On essaie de se connecter à la base
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
        $query->execute();
        return $query->fetch();
    }

    public function requestAll(string $sql){
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getAll(string $order = ""){
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
