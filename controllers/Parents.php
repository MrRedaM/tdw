<?php

class Parents extends Controller{

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
        $all = $this->ArticleModel->findByTag(6, "created DESC");
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
        $person = $this->AccountModel->connectTutor($_POST['mail'], $_POST['password']);
        if($person !== false){
            $tutor = $this->AccountModel->getTutorById($person['id']);
            $children = $this->AccountModel->getPersonsByTutor($person['id'], 'id');
            $students = $this->AccountModel->getStudentsByTutor($person['id'], 'id');
            for($i = 0; $i < count($children); $i++){
                $children[$i]['classroom'] = $students[$i]['classroom'];
            }
            $_SESSION['person_type'] = 'tutor';
            unset($person['passwd_hash']);
            //$person['classroom'] = $student['classroom'];
            $person['children'] = $children;
            $_SESSION['person'] = $person;
            $_SESSION['child_index'] = 0;
            header("Location: ".PRE."/parents");
        }else{
            $this->index();
        }
    }

    public function disconnect(){
        session_unset();
        header("Location: ".PRE."/parents");
    }

    public function child(){
        $_SESSION['child_index'] = $_POST['child'];
        header("Location: ".PRE."/parents");
    }

    public function info(){
        if(!isset($_SESSION['person_type']) or $_SESSION['person_type'] != 'tutor'){
            $this->index();
            return;
        }
        $class_id = $_SESSION['person']['children'][$_SESSION['child_index']]['classroom'];
        $classroom = $this->ClassroomModel->findById($class_id);
        $year = $this->ClassroomModel->getYearFromClassroom($class_id);
        $cycle = $this->ClassroomModel->getCycleFromClassroom($class_id);
        $this->render('info', compact('classroom', 'year', 'cycle'));
    }

    public function marks(){
        if(!isset($_SESSION['person_type']) or $_SESSION['person_type'] != 'tutor'){
            $this->index();
            return;
        }
        $child_id = $_SESSION['person']['children'][$_SESSION['child_index']]['id'];
        $class_id = $_SESSION['person']['children'][$_SESSION['child_index']]['classroom'];
        $marks = $this->MarkModel->findByStudent($child_id);
        $subjects = $this->SubjectModel->findByClassroom($class_id);
        $year = $this->ClassroomModel->getYearFromClassroom($class_id);
        $cycle = $this->ClassroomModel->getCycleFromClassroom($class_id);
        $this->render('marks', compact('marks', 'subjects', 'cycle', 'year'));
    }

    public function activities(){
        if(!isset($_SESSION['person_type']) or $_SESSION['person_type'] != 'tutor'){
            $this->index();
            return;
        }
        $child_id = $_SESSION['person']['children'][$_SESSION['child_index']]['id'];
        $activities = $this->ActivityModel->findByStudent($child_id);
        $this->render('activities', compact('activities'));
    }
}