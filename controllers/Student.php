<?php

class Student extends Controller{

    public function __construct(){
        session_start();
        $this->loadModel('AccountModel');
        $this->loadModel('ArticleModel');
        $this->loadModel('TagModel');
    }

    public function index($page = 1){
        $all = $this->ArticleModel->findByTag(5, "id DESC");
        $articles = [];
        for($i = ($page * 4 - 4); $i < ($page * 4); $i++){
            if(!isset($all[$i])){
                break;
            }
            $articles[$i] = $all[$i];
        }
        $pages = ceil(count($all) / 4);
        $account = [];
        $account['mail'] = isset($_POST['mail'])? $_POST['mail'] : "";
        $this->render('index', compact('articles', 'pages', 'page', 'account'));
    }

    public function connect(){
        $student = $this->AccountModel->connectStudent($_POST['mail'], $_POST['password']);
        if($student !== false){
            $_SESSION['person_type'] = 'student';
            $_SESSION['person'] = $student;
            $_SESSION['preson']['passws_hash'] = "";
            header("Location: ".PRE."/student");
        }else{
            //header("Location: ".PRE."/student");
            $this->index();
        }
    }

    public function disconnect(){
        session_unset();
        header("Location: ".PRE."/student");
    }
}