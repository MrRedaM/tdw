<?php

class Secondary extends Controller{

    public function __construct(){
        $this->loadModel('ArticleModel');
        $this->loadModel('TagModel');
    }

    public function index(int $page = 1){
        $all = $this->ArticleModel->findByTag(3, "created DESC");
        $articles = [];
        for($i = ($page * 4 - 4); $i < ($page * 4); $i++){
            if(!isset($all[$i])){
                break;
            }
            $articles[$i] = $all[$i];
        }
        $pages = ceil(count($all) / 4);
        $this->render('index', compact('articles', 'pages', 'page'));
    }

}