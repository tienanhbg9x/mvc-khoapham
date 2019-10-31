<?php
/**
 * Created by PhpStorm.
 * User: TienAnhPro
 * Date: 10/31/2019
 * Time: 1:39 PM
 */
class App{

    protected $controller="Home";
    protected $action="SayHi";
    protected $params=[];

    public function __construct()
    {
        $arr = $this->UrlProcess();

        if (file_exists("./mvc/controller/".$arr[0].".php")) {
           $this->controller=$arr[0];
        }
        require_once "./mvc/controller/".$arr[0].".php";

        //xử lý action
        if (isset($arr[1])) {
            if (method_exists($this->controller,$arr[1])) {
                $this->action=$arr[1];
            }
            echo $this->action;
        }
        //xử lý params
        $this->params = $arr?array_values($arr):[];
        echo $this->params;
    }
    public function UrlProcess()
    {
        if (isset($_GET["url"])){
            return explode("/",filter_var(trim($_GET["url"],"/")));
        }
    }
}