<?php

class Student {
    public $name;
    public $bootcamp;

    public function __construct($name, ) {   
        // Initializing the class properties
        $this->name = $name;
        // $this->bootcamp = $bootcamp;
    }

    public function intro() {
        echo "Hi, I'm $this->name and I am from $this->bootcamp bootcamp";
    }

    // Destructor ############################
    function __destruct()
    {
        echo "My top student is {$this->name}.";
    }

}

$student = new Student("Eddie Bridge");

//initialize object and passing parameter value ############## $bootcamp

// $student01 = new Student("Gabrielle Solis", "WD100P");
// echo $student01->intro();

// $student02 = new Student("Linnete Scavo", "UX50");
// echo $student02->intro();

?>