<?php

class Contact extends Controller{

    public function __construct(){
        parent::__construct();
        //$this->loadModel('StringModel');
    }

    public function index(){
        $str = $this->StringModel->getAll();
        $this->render('index', compact('str'));
    }

}