<?php
class View{
    public function view($filename){
    $filename=str_replace('.','/',$filename);
    $path="apps/views/$filename.php";
    if(file_exists($path)){
        include $path;
    }
}
}