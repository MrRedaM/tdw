<?php

class DateUtils{

    public static function getDayName(int $day){
        switch($day){
            case 1:
                return 'Dimanche';
                break;
            case 2:
                return 'Lundi';
                break;
            case 3:
                return 'Mardi';
                break;
            case 4:
                return 'Mercredi';
                break;
            case 5:
                return 'Jeudi';
                break;
            case 6:
                return 'Vendredi';
                break;
            case 7:
                return 'Samedi';
                break;
        }
    }

}