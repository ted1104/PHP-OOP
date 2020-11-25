<?php 
    class Person{
        public $name, $age;
        
        function __construct($n="Name", $a=0){
            $this->name = $n;
            $this->age = $a;
        }
        
        function show(){
            echo $this->name.' a '.$this->age."<br>";
        }
         
    }
    
    $p0 = new Person();
    $p1 = new Person("Teddy",90);    
    $p2 = new Person("Jenny",80);    
    $p3 = new Person("Titien",70);


//    $p1->name = "Teddy";
//    $p1->age = 25;
    $p0->show();
    $p1->show();
    $p2->show();
    $p3->show();
?>