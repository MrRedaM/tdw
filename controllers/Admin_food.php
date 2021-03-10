<?php

class Admin_food extends AdminController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('FoodModel');
    }

    public function index(){
        $menu = $this->FoodModel->getAll("day DESC");
        $this->render('index', compact('menu'));
    }

    public function new(){

        $this->render('new');
    }

    public function applyNew(){
        $this->FoodModel->insert($_POST['date'], $_POST['plat']);
        header("Location: ".PRE."/admin_food");
    }

    public function edit($id){
        $day = $this->FoodModel->findById($id);
        $this->render('edit', compact('day'));
    }

    public function applyEdit($id){
        $this->FoodModel->update($id, $_POST['plat']);
        header("Location: ".PRE."/admin_food");
    }

    public function delete($id){
        $result = $this->FoodModel->delete($id);
        header("Location: ".PRE."/admin_food");
    }

}