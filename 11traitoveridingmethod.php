<?php 
    trait Hello{
        public function sayhello(){
            echo "Hello from Hello trait.</br>";
        }
        private function bye(){
            echo "Good Bye";
        }
    }
    trait Hi{
        public function sayhello(){
            echo "Hello from Hi trait.</br>";
        }
    }
    
    class Base{
         public function sayhello(){
            echo "Hello from base class.</br>";
        }
    }

    class Child extends Base{
        use Hello, Hi{
            Hello::sayhello insteadof Hi;
            Hi::sayhello as newHello;
            Hello::bye as public;
        }
//        public function sayhello(){
//            echo "Hello from Child class\n";
//        } 
    }

    $obj = new Child();
    $obj->sayhello();    
    $obj->newHello();
    $obj->bye();

?>