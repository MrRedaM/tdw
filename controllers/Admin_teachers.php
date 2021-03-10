<?php

class Admin_teachers extends AdminController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('ProgramModel');
        $this->loadModel('AccountModel');
        $this->loadModel('ClassroomModel');
        $this->loadModel('SubjectModel');
        $this->loadModel('TeacherModel');
    }

    public function index(string $order = "", string $search = ""){
        if(isset($_POST['search'])){
            $search = $_POST['search'];
        }
        $teachers = $this->AccountModel->getTeachers($order, $search);
        $this->render('index', compact('teachers'));
    }

    public function view($id){
        $programs = $this->ProgramModel->findByTeacher($id);
        $teacher = $this->AccountModel->findById($id);
        $classrooms = $this->ClassroomModel->getAll();
        $subjects = $this->SubjectModel->getAll();
        $receptions = $this->TeacherModel->getReceptions($id);
        $this->render('view', compact('programs', 'teacher', 'classrooms', 'subjects', 'receptions'));
    }

    public function new(){
        $this->render('new');
    }

    public function applyNew(){
        $result = $this->ArticleModel->insert($_POST['article_title'], $_POST['article_desc']);
        header("Location: ".PRE."/admin_articles");
    }

    public function edit($id){
        $article = $this->ArticleModel->findById($id);
        $this->render('edit', compact('article'));
    }

    public function applyEdit($id){
        $result = $this->ArticleModel->update($id, $_POST['article_title'], $_POST['article_desc']);
        header("Location: ".PRE."/admin_articles");
    }

    public function delete(){
        $result = $this->ArticleModel->delete($_POST['id_article']);
        header("Location: ".PRE."/admin_articles");
    }

}