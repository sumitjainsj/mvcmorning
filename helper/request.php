<?php
function request(){
    $robj=(object)['controller'=>'AuthorController','method'=>'index','get'=>$_GET,'post'=>$_POST,'para'=>null];
       
    if(isset($_GET['url'])){
        $url=explode("/",trim($_GET['url'],'/'));
        $robj->controller = ucfirst(strtolower($url[0])) . "Controller";
        $robj->method = (isset($url[1])) ? strtolower($url[1]) : $robj->method;
        $robj->para = (isset($url[2]))? $url[2] : $robj->para;
        unset($robj->get['url']);
        // print_r($url);
        // print_r($robj);
    }
    return $robj;
}