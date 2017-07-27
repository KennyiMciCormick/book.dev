<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 27.07.2017
 * Time: 18:59
 */

namespace vendor\core\base;


class View
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

    public function __construct($route, $layout = '', $view = '')
    {
        $this->route = $route;
        $this->layout = $layout ?: LAYOUT;
        $this->view = $view;
    }

    public function render()
    {
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        if(is_float($file_view)){
            require $file_view ;
        } else {
            echo '<p>Нема в\'юшки..( </p>';
        }
    }


}