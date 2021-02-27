<?php

class Presentation extends Controller{

    public function __construct(){
        $this->loadModel('PresentationModel');
    }

    public function index(int $page = 1){
        $paragraphs = $this->PresentationModel->getAll("p_index");
        $this->render('index', compact('paragraphs'));
    }

}