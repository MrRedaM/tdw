<?php

abstract class AdminController {

    public function __construct(){
        if($_SERVER['REMOTE_ADDR'] != '127.0.0.1'){
            http_response_code(404);
            echo 'Erreur 404: Page introuvable';
            exit();
        }
        $this->loadModel('AccountModel');
        $this->loadModel('StringModel');
        session_start();
        if(!isset($_SESSION['person_type']) or $_SESSION['person_type'] != 'admin'){
            $this->login();
            die();
        }
    }

    public function loadModel(string $model){
        require_once(ROOT.'models/'.$model.'.php');
        $this->$model = new $model();
    }

    public function login(){
        if(isset($_POST['mail']) and isset($_POST['passwd'])){
            $admin = $this->AccountModel->connectAdmin($_POST['mail'], md5($_POST['passwd']));
            if($admin !== false) {
                $_SESSION['person_type'] = 'admin';
                $_SESSION['person'] = $admin;
                header("Location: ".PRE."/admin");
                exit();
            }
        }
        $account = [];
        if(isset($_POST['mail'])){
            $account['mail'] = $_POST['mail'];
        }
        $this->renderOnly('login', compact('account'));
    }

    public function disconnect(){
        session_unset();
        $this->login();
    }

    public function render(string $file, array $data = []){
        extract($data);

        ob_start();

        require_once(ROOT.'views/'.strtolower(get_class($this)).'/'.$file.'.php');

        $content = ob_get_clean();

        require_once(ROOT.'views/layouts/admin.php');
    }

    public function renderOnly(string $file, array $data = []){
        extract($data);

        //ob_start();

        require_once(ROOT.'views/admin/'.$file.'.php');

        //$content = ob_get_clean();
    }


}