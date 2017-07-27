<?php

namespace app\controllers;

class Main extends App
{
//    public $layout = 'main';

    public function indexAction()
    {
//        echo 'dsfsdf';
//        $this->layout = false;
//        $this->view = 'test';
        $this->set(['name' => 'LOH', 'gg' => 'QQ']);
    }
}