<?php

namespace app\controllers;
use app\models\Main;
use \R;
use vendor\core\App;

class MainController extends AppController
{
//    public $layout = 'main';

    public function indexAction()
    {
        App::$app->getList();


        $model = new Main;
        $posts = App::$app->cache->get('posts');
        if(!$posts){
            $posts = R::findAll('posts');
            App::$app->cache->set('posts', $posts);
        }

//        перенесення таблички

//        $res = $model->query('CREATE TABLE posts SELECT * FROM investor.posts');
//        var_dump($res);
//        $posts = $model->findAll();
//        $post = $model->findOne(9)[0];


        $post = 'dsfsd';
        $this->setMeta('Лала', 'Опис', 'ss,ss ');
        $meta = $this->meta;

        $this->set(compact(['post', 'meta']));
    }
}