<?php

namespace Apkit\Easyfunc;

class EasyfuncController
{
    public static function index($str){
        $res = ['data' => $str];
        return $res;
    }
}
