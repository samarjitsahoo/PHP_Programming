<?php 
    echo "What is Inheritance?<br>";
    class Employee{

        public $name = "harry";
        private $salary = 12000;
        private $grade = 3;

        function setSalary($salary){
            $this->salary = $salary; 
        }

        function getSalary(){ 
            echo "The salary of employee is $this->name is $this->salary <br>";
        }

        function showName(){
            echo "The name of this employee is $this->name <br>";
        }
    }

    // Inheriting a new class Programmer from Employee
    class Programmer extends Employee{
        private $language = "php";

        function changeLanguage($lang){
            $this->language = $lang; 
            // echo $this->grade; --> This will throw an error because grade is private in the parent class
        }
    }

    $rohan = new Employee();
    $rohan->name = "Rohan";
    $rohan->setSalary(100);
    $rohan->getSalary();
    $rohan->showName();

    $shubham = new Employee();
    $shubham->name = "Shubham";
    $shubham->setSalary(10000000);
    $shubham->getSalary();
    $shubham->showName();

    $geeta = new Programmer();
    $geeta->name = "Geeta";
    echo $geeta->changeLanguage("Python");
    $geeta->getSalary();
    $geeta->showName();

?>