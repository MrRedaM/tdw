<?php

class Articles extends Controller{

    public function __construct(){
        $this->loadModel('ArticleModel');
    }

    public function index(){
        $articles = $this->ArticleModel->getAllArticles();
        $this->render('index', compact('articles'));
    }

    public function read($id){
        $article = $this->ArticleModel->getArticleById($id);
        $this->render('article', compact('article'));
    }

}