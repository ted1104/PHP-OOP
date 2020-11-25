<?php
//    require "classes/first.php";
//    require "classes/second.php";

//    spl_autoload_register($class){
//        require "classes/".$class.".php";
//        
//    }
    spl_autoload_register(function ($class) {
    require 'classes/' . $class . '.php';
    });

    $test = new First();

?>