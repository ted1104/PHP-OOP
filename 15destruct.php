<?php 

class abc{
    public function __construct(){
        echo "This is construct function"
    }
    
    public function hello(){
        echo "hello Everyone";
    }
    
    public function __destruct(){
        echo "This is destruct function";
    }
}

//DESTRUCT METHOD IS CALLING AFTER CONSTRUCT METHOD
?>
