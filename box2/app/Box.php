<?php

class Box {

    public $id, $bannana;

    public static function getRandom() 
    {
        return 'BOX No.: '.Helper::getRandom();
    }

    public static function orderByCount(array $boxes) 
    {
        usort($boxes, 
        function($a, $b){return $a->bannana <=> $b->bannana;});
        return $boxes;
    }


}