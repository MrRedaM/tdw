<?php

class Admin extends Controller{

    public function __construct(){
        if($_SERVER['REMOTE_ADDR'] != '127.0.0.1'){
            http_response_code(404);
            echo 'Erreur 404: Page introuvable';
            exit();
        }
        $this->loadModel('AccountModel');
    }

    public function index(){
        $this->render('login');
    }

    public function login(){
        $admin = $this->AccountModel->getAdmin($_POST['mail'], md5($_POST['passwd']));
        if($admin != null) {
            header('Location: /tdw/admin/panel');
        }else{
            header('Location: /tdw/admin');
        }
    }

    public function panel(){
        $this->render('panel');
    }

}