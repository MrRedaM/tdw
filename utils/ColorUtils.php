<?php

class ColorUtils{

    public static function getTextColor($backgroundColor){

        $r = hexdec(substr($backgroundColor,1,2));
        $g = hexdec(substr($backgroundColor,3,2));
        $b = hexdec(substr($backgroundColor,5,2));

        if($r + $g + $b > 382){
            return '#000000';
        }else{
            return '#ffffff';
        }

    }

}