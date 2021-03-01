<?php

class Teachers extends Controller{

    public function __construct(){
        $this->loadModel('TeacherModel');
    }

    public function index(){
        $teachers = $this->TeacherModel->getAll("last_name");
        $this->render('teachers', compact('teachers'));
    }

    
    public function cycle($id){
        $teachers = $this->TeacherModel->findTeacherByCycle($id, "last_name");
        for($i = 0; $i < count($teachers); $i++){
            $receptions = $this->TeacherModel->getReceptions($teachers[$i]['id']);
            $teachers[$i]['receptions'] = "";
            foreach($receptions as $reception){
                $teachers[$i]['receptions'] = $teachers[$i]['receptions'].DateUtils::getDayName($reception['day']);
                $teachers[$i]['receptions'] = $teachers[$i]['receptions']." (".$reception['start']." ➝ ".$reception['end'].")";
            }
            if(count($receptions) == 0){
                $teachers[$i]['receptions'] = 'N/A';
            }
        }
        $this->render('teachers', compact('teachers'));
    }
}