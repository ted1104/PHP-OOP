<?php 
//TYPE HINTING
//int, float, String, Bool, Array, Class/Interface Name, Object

    function sum(int $value){
        echo $value + 10;
    }
    
    sum(12);
    //sum("Teddy");

    class Hello{
        public function sayHello(){
            echo "Salut Teddy";
        }
    }

    function wow(Hello $c){
        $c->sayHello();
    }
    $test = new Hello();
    wow($test);

?>