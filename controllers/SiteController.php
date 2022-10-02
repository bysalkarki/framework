<?php

namespace app\controllers;

use app\core\Application;

class SiteController extends  Controller
{
    public function handleContact (): string
    {
        return 'handeling submiteed data';
    }

    public function contact ()
    {
       return $this->render('contact');
    }

    public function home(){
        $params = [
            'name'=>'this is test'
        ];
        return $this->render('home',$params);
    }
}