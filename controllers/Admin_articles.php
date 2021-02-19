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
        $this->render('new');
    }

    public function applyNew(){
        $result = $this->ArticleModel->insert($_POST['article_title'], $_POST['article_desc']);
        header("Location: ".PRE."/admin_articles");
    }

    public function edit(){
        $article = $this->ArticleModel->getArticleById($id);
        $this->render('new', compact('article'));
    }

    public function delete(){
        $result = $this->ArticleModel->delete($_POST['id_article']);
        header("Location: ".PRE."/admin_articles");
    }

}