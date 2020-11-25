<?php 
    //INHERITANCE
    // On dit que Class A herite de la classe B lorsque la classe B peut utilisers les proprietes et les methodes de la classe A et cela se fait avec le mot clé extends
    class Employee{
        public $name;
        public $age;
        public $salary;
        
        function __construct($n, $a, $s){
            $this->name = $n;
            $this->age = $a;
            $this->salary = $s;
        }
        
        function info(){
            echo "<h3>Employee Profile</h3>";
            echo "Name :".$this->name."<br>";
            echo "Age :".$this->age."<br>";
            echo "Salary :".$this->salary."<br>";
                
        } 
    }

    class Manager extends Employee{
        public $tatolSalary;
        public $ta = 4000;
        public $phone = 3000;
        
        function info(){
            $this->totalSalary = $this->salary + $this->ta + $this->phone;
            echo "<h3>Manager Profile</h3>";
            echo "Name :".$this->name."<br>";
            echo "Age :".$this->age."<br>";
            echo "Salary :".$this->totalSalary."<br>";
                
        }
    }

    $e1 = new Employee("Teddy",28,500);
    $e1->info();

    $m1 = new Manager("Jenny",22,600);
    $m1->info();


    //public : la variable ou la fonction peut etre appelé dans la classe qui extends et aussi en dehors par un object extentier
    
    //protected : Ok dans la classe qui extends, et NON dans l'object extenisier

    //private : Non dans la classe qui extends, Non dans l'object qui est extensier, 


?>