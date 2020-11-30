<?php
    class Student{
        private $firstName;
        private $lastName;
        
        private function setName($fname, $lname){
            $this->firstName = $fname;
            $this->lastName = $lname;
        }
        
        public function __call($method, $args){
            echo "This is private or Non existing methode : $method";
            if(method_exists($this,$method)){
                call_user_func_array([$this, $method], $args);
            }else{
                echo "Method does not exist : $method";
            }
        }
    }

    $test = new Student();
    $test->setName("TEDDY", "WALTER");
?>