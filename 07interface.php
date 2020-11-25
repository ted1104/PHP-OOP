<?php 
    interface parent1{
        function calc($a, $b);
    }
    interface parent2{
        function sub($a, $b);
    }

    class childClass implements parent1, parent2{
        public function calc($a,$b){
            echo $a+$b;
        }
        public function sub($a,$b){
            echo $a-$b;
        }
        
    }
     $c1= new childClass();
     $c1->calc(10,20);

?>