<?php
class Controller
{
    // Hàm gọi  folder models
    public function model($model)
    {
        require_once './app/models/' . $model . '.php';
        return new $model;
    }
    // Hàm gọi  folder views
    public function view($view, $data = array())
    {
        require_once './app/views/' . $view . '.php';
    }
}
