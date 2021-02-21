<?php

class Admin_calendar extends Controller{

    public function __construct(){
        $this->loadModel('ProgramModel');
        $this->loadModel('SubjectModel');
        $this->loadModel('AccountModel');
        $this->loadModel('ClassroomModel');
    }

    public function index(){
        $programs = $this->ProgramModel->getAll();
        $teachers = $this->AccountModel->getTeachers();
        $classrooms = $this->ClassroomModel->getAll(); 
        $subjects = $this->SubjectModel->getAll();
        $this->render('index', compact('classrooms', 'programs', 'teachers', 'subjects'));
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