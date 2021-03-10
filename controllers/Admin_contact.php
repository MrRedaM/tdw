<?php

class Admin_contact extends AdminController{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $str = $this->StringModel->getAll();
        $this->render('index', compact('str'));
    }

    public function applyEdit(){
        $this->StringModel->update("contact_phone", $_POST['phone']);
        $this->StringModel->update("contact_mail", $_POST['mail']);
        $this->StringModel->update("contact_fax", $_POST['fax']);
        header("Location: ".PRE."/admin_contact");
    }

}