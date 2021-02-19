<?php

class Articles extends Controller{

    public function __construct(){
        $this->loadModel('ArticleModel');
    }

    public function index(){
        $articles = $this->ArticleModel->getAll();
        $this->render('index', compact('articles'));
    }

    public function read($id){
        $article = $this->ArticleModel->findById($id);
        $this->render('article', compact('article'));
    }

}