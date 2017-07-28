<?php
/**
 * Created by PhpStorm.
 * User: Andriy
 * Date: 27.07.2017
 * Time: 20:22
 */

namespace app\controllers;

use \vendor\core\base\Controller;

class AppController extends Controller
{
    public $meta = [];
//    типу beforeFilter? initialize і тд..
    public function __construct($route)
    {
        parent::__construct($route);

    }

    protected function setMeta($title = '', $description = '', $keywords = '')
    {
        $this->meta['title'] = $title;
        $this->meta['description'] = $description;
        $this->meta['keywords'] = $keywords;
    }
}