<?php
    class Abc{
        private $name = "Hello Teddy";
        private $data = ["name"=>"Titien","course"=>"PHP","fee"=>"2000"];
        public function hello(){
            echo $this->name;
        }
        public function __get($key){
//            echo "You are trying to access Non Existing or Private property($key)";
            if(array_key_exists($key, $this->data)){
                return $this->data[$key];
            }else{
                return "This key($key) is not defined";
            }
        }
    }

    $test = new Abc();
    echo $test->names;
//    print_r($data);
?>