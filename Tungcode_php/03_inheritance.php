<?php

class Student {
    public $name;
    public $bootcamp;

    public function __construct($name, $bootcamp) {   
        // Initializing the class properties
        $this->name = $name;
        $this->bootcamp = $bootcamp;
    }

    public function intro() {
        echo "Hi, I'm $this->name and I am from $this->bootcamp bootcamp";
    }
}



class Course extends Student {
    public function print() {
        echo "The course that I took is Full Stack Web Development.";
    }
}

$course = new Course("Ivana Alawi", "WD91P");
$course->print();
$course->intro();



?>