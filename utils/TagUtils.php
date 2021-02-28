<?php

class TagUtils{

    public static function getIDArray(string $tags){
        $result = [];
        $i = 0;
        foreach(explode('#', $tags) as $id){
            if($id != ''){
                $result[$i] = $id;
                $i++;
            }
        }
        return $result;
    }

    public static function getString(array $tags){
        if(count($tags) == 0){
            return "";
        }
        $result = "#";
        foreach($tags as $tag){
            $result = $result.$tag['id'].'#';
        }
        return $result;
    }

}