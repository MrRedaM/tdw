<?php

class AccountModel extends Model{

    private $personTable = 'Person';
    private $adminTable = 'Admin';

    public function __construct(){
        $this->getConnection();
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