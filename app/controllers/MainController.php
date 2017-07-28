<?php

namespace app\controllers;

use app\models\Main;
use \R;
use vendor\core\App;

class MainController extends AppController
{
//    public $layout = 'main';

    public function index()
    {
        if(isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
            $this->set(['admin' => 1]);
        };
//        unset($_SESSION['admin']);

//        App::$app->getList();

//        кешування

//        $model = new Main;
//        $posts = App::$app->cache->get('posts');
//        if(!$posts){
//            $posts = R::findAll('posts');
//            App::$app->cache->set('posts', $posts);
//        }

//        перенесення таблички

//        $res = $model->query('CREATE TABLE posts SELECT * FROM investor.posts');
//        var_dump($res);
//        $posts = $model->findAll();
//        $post = $model->findOne(9)[0];


//        $post = 'dsfsd';
//        $this->setMeta('Лала', 'Опис', 'ss,ss ');
//        $meta = $this->meta;

//        $this->set(compact(['post', 'meta']));
    }

    public function testAjaxAction()
    {

        if ($this->isAjax()) {

            $this->layout = false;
            echo json_encode(['dd' => 'ss']);
        }


    }
}