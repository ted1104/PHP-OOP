<?php
    class Base{
        public $name = "parent class";
    }

    class Derived extends Base{
        public $name ="child class";
    }

    $test = new Derived();
    echo $test->name;

?>