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
            $persons = $this->AccountModel->getPersons($order, $search);
        }else{
            switch($_POST['type']){
                case 'all':
                    $persons = $this->AccountModel->getPersons($order, $search);
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

    public function apply_new(){
        $_POST['search'] = $_POST['mail'];
        $result = $this->AccountModel->insertPerson($_POST['last_name'], $_POST['first_name'],
            $_POST['mail'], $_POST['address'], $_POST['phone1'], $_POST['phone2'], $_POST['phone3']);
        $id = $this->AccountModel->getPersonIdByMail($_POST['mail']);
        switch($_POST['type']){
            case 'teacher':
                $this->AccountModel->insertTeacher($id['id']);
                break;
            case 'student':
                $this->AccountModel->insertStudent($id['id']);
                break;
            case 'tutor':
                $this->AccountModel->insertTutor($id['id']);
                break;
        }
        header("Location: ".PRE."/admin_accounts");
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
        $result = $this->AccountModel->deletePerson($id);
        header("Location: ".PRE."/admin_accounts");
    }

}