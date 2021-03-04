<?php

class Admin extends AdminController{

    public function __construct(){
        parent::__construct();
    }

    
    public function index(){
        $this->render('panel');
    }

}