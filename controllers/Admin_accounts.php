<?php

class Admin_accounts extends Controller{

    public function __construct(){
        $this->loadModel('AccountModel');
    }

    public function index(){
        //$paragraphs = $this->PresentationModel->getAll('p_index');
        $this->render('index', compact('paragraphs'));
    }

    public function teachers(string $order = "", string $search = ""){
        if(isset($_POST['search'])){
            $search = $_POST['search'];
        }
        $teachers = $this->AccountModel->getTeachers($order, $search);
        $this->render('teachers', compact('teachers'));
    }

    public function students(){
        //$paragraphs = $this->PresentationModel->getAll('p_index');
        $this->render('index', compact('paragraphs'));
    }

    public function tutors(){
        //$paragraphs = $this->PresentationModel->getAll('p_index');
        $this->render('index', compact('paragraphs'));
    }

    public function new(){
        $this->render('new');
    }

    public function applyNew(){
        $result = $this->PresentationModel->insert($_POST['index'], $_POST['content']);
        header("Location: ".PRE."/admin_presentation");
    }

    public function edit($id){
        $p = $this->PresentationModel->findById($id);
        $this->render('edit', compact('p'));
    }

    public function applyEdit($id){
        $result = $this->PresentationModel->update($id, $_POST['index'], $_POST['content']);
        header("Location: ".PRE."/admin_presentation");
    }

    public function delete($id){
        $result = $this->PresentationModel->delete($id);
        header("Location: ".PRE."/admin_presentation");
    }

}