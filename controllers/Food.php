<?php

class Food extends Controller{

    public function __construct(){
        $this->loadModel('FoodModel');
    }

    public function index(){
        $week = [];
        $week[0] = date("Y-m-d", strtotime("sunday -1 week"));
        $week[1] = date("Y-m-d", strtotime("monday this week"));
        $week[2] = date("Y-m-d", strtotime("tuesday this week"));
        $week[3] = date("Y-m-d", strtotime("wednesday this week"));
        $week[4] = date("Y-m-d", strtotime("thursday this week"));
        $week[5] = date("Y-m-d", strtotime("friday this week"));
        $week[6] = date("Y-m-d", strtotime("saturday this week"));
        $menu = $this->FoodModel->getWeekMenu($week);
        $this->render('menu', compact('menu'));
    }

}