<?php 
    
    //Abstract class: signifie que on ne peut pas apeeler la classe depuis l'exterieur  donc on ne peut pas extensier un objet du type class abstract

    abstract class Base{
        public $name="Teddy";
        abstract protected function calc($a,$b);//Les methodes sont seulement declarées mais ne contiennent pas le body
    }

    class Test extends Base{
        function calc($c,$d){
            echo $c+$d;
        }
    }
    $test = new Test();
    echo $test->name;
    echo $test->calc(10,20);


?>