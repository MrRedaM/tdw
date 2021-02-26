<?php

class Admin_articles extends Controller{

    public function __construct(){
        $this->loadModel('ArticleModel');
    }

    public function index(){
        $articles = $this->ArticleModel->getAll();
        $this->render('index', compact('articles'));
    }

    public function new(){
        $this->render('new');
    }

    public function applyNew(){
        $file = "res/images/".basename($_FILES['image']['name']);
        if(move_uploaded_file($_FILES['image']['tmp_name'], $file)){
            //$result = $this->ArticleModel->insert($_POST['article_title'], $_POST['article_desc'], $_POST['image']);
            //header("Location: ".PRE."/admin_articles");
            echo "success";
        }else{
            var_dump($_FILES['image']['tmp_name']);
            var_dump($file);
        }
        
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