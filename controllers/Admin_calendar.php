<?php

class Admin_calendar extends AdminController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('ProgramModel');
        $this->loadModel('SubjectModel');
        $this->loadModel('AccountModel');
        $this->loadModel('ClassroomModel');
        $this->loadModel('AccountModel');
    }

    public function index(){
        $programs = $this->ProgramModel->getAll("start");
        $teachers = $this->AccountModel->getTeachers();
        $classrooms = $this->ClassroomModel->getAll(); 
        $subjects = $this->SubjectModel->getAll();
        $this->render('index', compact('classrooms', 'programs', 'teachers', 'subjects'));
    }

    public function new(){
        $class_name = $_POST['class_name'];
        $class_id = $_POST['class_id'];
        $day = $_POST['day'];
        $subjects = $this->SubjectModel->findByClassroom($class_id);
        $teachers = $this->AccountModel->getTeachers();
        $this->render('new', compact('class_name', "class_id", 'day', 'subjects', 'teachers'));
    }

    public function applyNew(){
        $this->ProgramModel->insert($_POST['teacher'], $_POST['class_id'], 
            $_POST['subject'],$_POST['day'], $_POST['start'], $_POST['end']);
        header("Location: ".PRE."/admin_calendar");
    }

    public function edit($id){
        $class_name = $_POST['class_name'];
        $class_id = $_POST['class_id'];
        $day = $_POST['day'];
        $subjects = $this->SubjectModel->findByClassroom($class_id);
        $teachers = $this->AccountModel->getTeachers();
        $program = $this->ProgramModel->findById($id);
        $this->render('edit', compact('class_name', "class_id", 'day', 'subjects', 'teachers', 'program'));
    }

    public function applyEdit($id){
        $this->ProgramModel->update($id, $_POST['teacher'], $_POST['subject'], $_POST['start'], $_POST['end']);
        header("Location: ".PRE."/admin_calendar");
    }

    public function delete($id){
        $this->ProgramModel->delete($id);
        header("Location: ".PRE."/admin_calendar");
    }

}