<?php
// require_once "helper/env.php";
// require_once "helper/request.php";
<<<<<<< HEAD

array_map(fn($f)=> include $f, glob("helper/*.php"));
=======
// Gyanu 
array_map(function($filename){
    require_once $filename;
}, glob("helper/*.php"));
>>>>>>> c2a22b21ff8a631406bee5389ce3c88a7c683295
// print_r(glob("helper/*.php"));
spl_autoload_register(function($classname){
$path="apps/libs/$classname.php";
if(file_exists($path)){
    require_once $path;
}

});
$obj= new Autoload();
