<?php 
    class Student{
        private $name;
        
        public function __get($property){
            echo "You are trying to access Non existing or private property ($property)";
        }
        
        public function __set($property, $value){
            
            if(property_exists($this, $property)){
                $this->$property = $value;
            }else{
                echo "Property does not exist : $property";
            }
            
        }
        public function hello(){
            echo $this->name;
        }
    }
    
    $test = new Student();
    $test->name = "TONTON";
    $test->hello(); 

?>