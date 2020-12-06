<?php
    class Abc {
        public static $name ="Papa";
        public static function hello(){
            echo "This hello static method";
        }
        
    }
    
    $test = new Abc();
    echo $test::$name;
    
    
?>