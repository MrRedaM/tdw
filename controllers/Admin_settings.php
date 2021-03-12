<?php

class Admin_settings extends AdminController{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $str = $this->StringModel->getAll();
        $this->render('settings', compact('str'));
    }

}