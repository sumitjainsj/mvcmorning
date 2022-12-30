<?php
class Autoload{
    public function __construct()
    {
    $robj=request();
    $controller= $robj->controller;
    $method= $robj->method;
    $para= $robj->para;
    $path= "apps/controllers/$controller.php";
    if(file_exists($path)){
        require_once $path;
        $cobj = new $controller();
        if(method_exists($cobj,$method))
            $cobj->$method($para);
            else
            $cobj->index();
            
        }else{
            require_once "404.php";
        }
    }
}
