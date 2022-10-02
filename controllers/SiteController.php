<?php

namespace app\controllers;

use app\core\Application;
use app\core\Request;

class SiteController extends  Controller
{
    public function handleContact (Request  $request): string
    {
        $request->getBody();
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