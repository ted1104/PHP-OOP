<?php
//LATE STATIC BINDING
    class Personal{
        protected static $name ="Yahoo";
        public function show(){
            echo static::$name;
            echo '<br>';
            echo self::$name;
        }
    }
    class Account extends Personal{
        protected static $name ="Baba";
    }
    
    $test = new Account();
    $test->show();
    

?>