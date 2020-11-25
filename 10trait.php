<?php 
    trait Hello{
        protected static $name = "Bonjour Teddy";
        public function sayHello(){
            echo self::$name;
            echo "<br>";
        }
    }
    trait Bye{
        protected static $names = "Bye Bye Teddy";
        public function sayBye(){
            echo self::$names;
        }
    }
    class Base{
        use Hello;
        use Bye;
    }
    $obj = new Base();
    $obj->sayHello();    
    $obj->sayBye();

//METHOD OVERRIDING

?>