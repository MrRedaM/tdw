<?php

class S{

    public static function value($key, $tab){
        foreach($tab as $row){
            if($row['id'] == $key){
                return $row['value'];
            }
        }
    }

}