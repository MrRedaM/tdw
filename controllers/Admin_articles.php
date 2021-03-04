<?php

class Admin_articles extends AdminController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('ArticleModel');
        $this->loadModel('TagModel');
    }

    public function index(){
        $articles = $this->ArticleModel->getAll();
        $this->render('index', compact('articles'));
    }

    public function new(){
        $tags = $this->TagModel->getAll();
        $this->render('new', compact('tags'));
    }

    public function applyNew(){
        $tags = [];
        $i = 0;
        foreach($this->TagModel->getAll() as $tag){
            if(isset($_POST['tag'.$tag['id']])){
                $tags[$i] = $tag;
                $i++;
            }
        }
        $file = "res/images/".basename($_FILES['image']['name']);
        if(move_uploaded_file($_FILES['image']['tmp_name'], $file) or !isset($_POST['image'])){
            $result = $this->ArticleModel->insert($_POST['article_title'], $_POST['article_desc'], 
                $_FILES['image']['name'], TagUtils::getString($tags));
            header("Location: ".PRE."/admin_articles");
        }else{
            var_dump($_FILES['image']['tmp_name']);
            var_dump($file);
        }
        
    }

    public function edit($id){
        $article = $this->ArticleModel->findById($id);
        $tags = $this->TagModel->getAll();
        $this->render('edit', compact('article', 'tags'));
    }

    public function applyEdit($id){
        $tags = [];
        $i = 0;
        foreach($this->TagModel->getAll() as $tag){
            if(isset($_POST['tag'.$tag['id']])){
                $tags[$i] = $tag;
                $i++;
            }
        }
        $result = $this->ArticleModel->update($id, $_POST['article_title'], 
            $_POST['article_desc'], TagUtils::getString($tags));
        header("Location: ".PRE."/admin_articles");
    }

    public function delete(){
        $result = $this->ArticleModel->delete($_POST['id_article']);
        header("Location: ".PRE."/admin_articles");
    }

}