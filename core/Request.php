<?php

namespace app\core;

class Request
{
    public function getPath ():string
    {
        $path=$_SERVER['REQUEST_URI'] ?? '/';
        $postion=strpos($path, '?');
        if (!$postion) {
            return $path;
        }

        return substr($path,0,$postion);

    }

    public function method (): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getBody(){
        $body = [];
        if($this->method() == 'get'){
            foreach ($_GET as $key =>$value){
                $body[$key] = filter_input(INPUT_GET,$value,FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        return $body;
    }

}