<?php

class Schedule extends Controller{

    public function __construct(){
        $this->loadModel('ProgramModel');
        $this->loadModel('SubjectModel');
        $this->loadModel('AccountModel');
        $this->loadModel('ClassroomModel');
    }

    public function index(){
        $programs = $this->ProgramModel->getAll();
        $teachers = $this->AccountModel->getTeachers();
        $classrooms = $this->ClassroomModel->getAll(); 
        $subjects = $this->SubjectModel->getAll();
        $this->render('schedules', compact('classrooms', 'programs', 'teachers', 'subjects'));
    }

    public function cycle($id){
        $programs = $this->ProgramModel->findByCycle($id);
        $teachers = $this->AccountModel->getTeachers();
        $classrooms = $this->ClassroomModel->findByCycle($id); 
        $subjects = $this->SubjectModel->getAll();
        $this->render('schedules', compact('classrooms', 'programs', 'teachers', 'subjects'));
    }


    public function classroom($id){
        $programs = $this->ProgramModel->findByClassroom($id);
        $teachers = $this->AccountModel->getTeachers();
        $classrooms = $this->ClassroomModel->findByCycle($id); 
        $subjects = $this->SubjectModel->getAll();
        $this->render('schedules', compact('classrooms', 'programs', 'teachers', 'subjects'));
    }
}