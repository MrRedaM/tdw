<?php

class ArticleModel extends Model{

    private $articleTable = 'Article';

    public function __construct(){
        $this->getConnection();
    }

    public function getAllArticles(){
        $sql = "SELECT * FROM ".$this->articleTable;
        return $this->requestAll($sql);
    }

    public function getArticleById($id){
        $sql = "SELECT * FROM ".$this->articleTable." WHERE id=".$id;
        return $this->request($sql);
    }

    public function delete($id){
        $sql = "DELETE FROM ".$this->articleTable." WHERE id=".$id;
        return $this->request($sql);
    }
}