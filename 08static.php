<?php 
    class Personal{
        public static $name="Teddy";
        public function __construct($n){
            self::$name = $n;
        }
        public static function showName(){
            echo self::$name;
        }
    }
    
    class Derived extends Personal{
        public function getName(){
            echo self::$name;
        }
    }
//    $p = new Personal();
//    $p->showName();
    echo Personal::$name;
    echo "<br>";
    echo Personal::showName();
    echo "<br>";
    
    $p = new Personal("Laurent");
    $p->showName();

    echo "<br>";
    $p1 = new Derived("Titien");
    $p1->getName();
    

?>