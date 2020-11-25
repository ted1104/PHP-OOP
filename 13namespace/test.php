<?php
    namespace test;
    class Test{
        public function __construct(){
            echo 'This is Test class <br>';
            
        }
        
        public function first(){
            echo 'This first function <br>';
            return $this;
        }
        public function second(){
            echo 'This Second function <br>';
            return $this;
        }
        public function third(){
            echo 'This Third function <br>';
            return $this;
        }
    }


?>