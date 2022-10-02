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

    public function getMethod (): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}