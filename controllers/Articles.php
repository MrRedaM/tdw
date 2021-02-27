<?php

class Articles extends Controller{

    public function __construct(){
        $this->loadModel('ArticleModel');
    }

    public function index(int $page = 1){
        $all = $this->ArticleModel->getAll("id DESC");
        $articles = [];
        for($i = ($page * 8 - 8); $i < ($page * 8); $i++){
            if(!isset($all[$i])){
                break;
            }
            $articles[$i] = $all[$i];
        }
        $pages = ceil(count($all) / 8);
        $this->render('index', compact('articles', 'pages', 'page'));
    }

    public function read($id){
        $article = $this->ArticleModel->findById($id);
        $this->render('article', compact('article'));
    }

}