<?php

spl_autoload_register('autoload');

function autoload ($classname){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    
    if (strpos($url, 'includes')!== false) {
       $path = '../classes/'; 
    }
    else {
        $path = 'classes/';
    }
    $extention = '.class.php';
    require_once $path.$classname.$extention;

}
