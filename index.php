<?php
// require_once "helper/env.php";
// require_once "helper/request.php";

array_map(fn($f)=> include $f, glob("helper/*.php"));
// print_r(glob("helper/*.php"));
spl_autoload_register(function($classname){
$path="apps/libs/$classname.php";
if(file_exists($path)){
    require_once $path;
}

});
$obj= new Autoload();
?>
