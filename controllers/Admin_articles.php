<?php

class Admin_articles extends Controller{

    public function __construct(){
        if($_SERVER['REMOTE_ADDR'] != '127.0.0.1'){
            http_response_code(404);
            echo 'Erreur 404: Page introuvable';
            exit();
        }
        $this->loadModel('ArticleModel');
    }

    public function index(){
        $articles = $this->ArticleModel->getAllArticles();
        $this->render('index', compact('articles'));
    }

    public function new(){
        echo 'new article please';
    }

    public function edit(){
        echo 'edit '.$_POST['id_article'];
    }

    public function delete(){
        $result = $this->ArticleModel->delete($_POST['id_article']);
        header("Location: /tdw/admin_articles");
    }

}