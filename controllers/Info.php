<?php

class Info extends Controller{

    public function __construct(){
        $this->loadModel('ClassroomModel');
    }

    public function cycle($id){
        $infos = $this->ClassroomModel->getCycleInfos($id);
        $this->render('index', compact('infos'));
    }

}