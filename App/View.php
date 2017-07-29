<?php

namespace App;

class View
{
    // TODO set, get в трейт, для добавления в нужный класс
    protected $data = [];

    function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    function __get($name)
    {
        return $this->data[$name];
    }

    function __isset($name)
    {
        // TODO: Implement __isset() method. Проверка существования св-ва
    }

    function render($template) {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    function display($template) {
        echo $this->render($template);
    }
}