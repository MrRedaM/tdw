<?php

class Admin_accounts extends Controller{

    public function __construct(){
        $this->loadModel('AccountModel');
    }

    public function index(string $order = "", string $search = ""){
        if(isset($_POST['search'])){
            $search = $_POST['search'];
        }
        $persons = null;
        if(!isset($_POST['type'])){
            $persons = $this->AccountModel->getAll($order, $search);
        }else{
            switch($_POST['type']){
                case 'all':
                    $persons = $this->AccountModel->getAll($order, $search);
                    break;
                case 'teachers':
                    $persons = $this->AccountModel->getTeachers($order, $search);
                    break;
                case 'students':
                    $persons = $this->AccountModel->getStudents($order, $search);
                    break;
                case 'tutors':
                    $persons = $this->AccountModel->getTutors($order, $search);
                    break;
            }   
        }
        $this->render('index', compact('persons'));
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