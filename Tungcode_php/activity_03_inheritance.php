<?php

class Tourist {
    public $name;
    public $country;
    public $city;

    public function __construct($name, $country, $city) {   
        // Initializing the class properties
        $this->name = $name;
        $this->country = $country;
        $this->country = $city;
    }

    public function intro() {
        echo "Hi, I'm $this->name and I am from $this->country";
    }
}



class City extends Tourist {
    public function print() {
        echo "The city that I want to visit is Tokyo.";
        echo "The country that I want to visit next is Australia";
        echo "Yuri wants to travel";
    }


}

$course = new City("Yuri Watanabe", "Tokyo", "osaka");
$course->print();




?>