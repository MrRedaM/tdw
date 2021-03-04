<?php

class Admin_accounts extends AdminController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('AccountModel');
        $this->loadModel('ClassroomModel');
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
        $person = $this->AccountModel->findById($id);
        $type = $this->AccountModel->getTeacherById($id);
        $person['type'] = 'teacher';
        if($type == false) {
            $type = $this->AccountModel->getStudentById($id);
            $person['type'] = 'student';
        }
        if($type == false) {
            $type = $this->AccountModel->getTutorById($id);
            $person['type'] = 'tutor';
        }

        $classrooms = $this->ClassroomModel->getAll();


        $this->render('edit', compact('person', 'type', 'classrooms'));
    }

    public function apply_edit($type, $id){
        $result = $this->AccountModel->updatePerson($id, $_POST['last_name'], $_POST['first_name']
            , $_POST['mail'], $_POST['address']
            , $_POST['phone1'], $_POST['phone2'], $_POST['phone3']);
        switch($type){
            case 'teacher':

                break;
            case 'student':
                $result = $this->AccountModel->updateStudent($id, $_POST['class_id']);
                break;
            case 'teacher':

                break;
        }
        header("Location: ".PRE."/admin_accounts");
    }

    public function delete($id){
        $result = $this->AccountModel->deletePerson($id);
        header("Location: ".PRE."/admin_accounts");
    }

}