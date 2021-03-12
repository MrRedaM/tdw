<?php

class Student extends Controller{

    public function __construct(){
        session_start();
        $this->loadModel('AccountModel');
        $this->loadModel('ArticleModel');
        $this->loadModel('TagModel');
        $this->loadModel('ClassroomModel');
        $this->loadModel('MarkModel');
        $this->loadModel('SubjectModel');
        $this->loadModel('ActivityModel');
    }

    public function index($page = 1){
        $all = $this->ArticleModel->findByTag(5, "created DESC");
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
        $person = $this->AccountModel->connectStudent($_POST['mail'], $_POST['password']);
        if($person !== false){
            $student = $this->AccountModel->getStudentById($person['id']);
            $_SESSION['person_type'] = 'student';
            unset($person['passwd_hash']);
            $person['classroom'] = $student['classroom'];
            $_SESSION['person'] = $person;
            header("Location: ".PRE."/student");
        }else{
            $this->index();
        }
    }

    public function disconnect(){
        session_unset();
        header("Location: ".PRE."/student");
    }

    public function info(){
        if(!isset($_SESSION['person_type']) or $_SESSION['person_type'] != 'student'){
            $this->index();
            return;
        }
        $classroom = $this->ClassroomModel->findById($_SESSION['person']['classroom']);
        $year = $this->ClassroomModel->getYearFromClassroom($_SESSION['person']['classroom']);
        $cycle = $this->ClassroomModel->getCycleFromClassroom($_SESSION['person']['classroom']);
        $this->render('info', compact('classroom', 'year', 'cycle'));
    }

    public function marks(){
        if(!isset($_SESSION['person_type']) or $_SESSION['person_type'] != 'student'){
            $this->index();
            return;
        }
        $marks = $this->MarkModel->findByStudent($_SESSION['person']['id']);
        $subjects = $this->SubjectModel->findByClassroom($_SESSION['person']['classroom']);
        $year = $this->ClassroomModel->getYearFromClassroom($_SESSION['person']['classroom']);
        $cycle = $this->ClassroomModel->getCycleFromClassroom($_SESSION['person']['classroom']);
        $this->render('marks', compact('marks', 'subjects', 'cycle', 'year'));
    }

    public function activities(){
        if(!isset($_SESSION['person_type']) or $_SESSION['person_type'] != 'student'){
            $this->index();
            return;
        }
        $activities = $this->ActivityModel->findByStudent($_SESSION['person']['id']);
        $this->render('activities', compact('activities'));
    }
}