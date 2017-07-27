<?php

namespace vendor\core\base;


abstract class Controller
{
    /**
     * Поточний маршрут
     * @var array
     */
    public $route = [];

    /**
     * Поточний вид
     * @var string
     */
    public $view = [];

    /**
     * Поточний лайаут
     * @var string
     */
    public $layout = [];

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render();

    }

}