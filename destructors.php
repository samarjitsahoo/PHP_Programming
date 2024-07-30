<?php
    class Employee{
        // Properties of our Class
        public $name;
        public $salary; 

        // Constructor
        function __construct($name1, $salary1){
            $this->name = $name1;
            $this->salary = $salary1;
        }

        // Destructor
        function __destruct(){
            echo "I am destructing $this->name <br>";
        }
    }

    $rohan = new Employee("Rohan", 73000);
    $harry = new Employee("Harry", 10000);
    $skillF = new Employee("SkillF", 56000); 

    echo "The salary of harry is $harry->salary <br>";
    echo "The salary of skillF is $skillF->salary <br>";
?>