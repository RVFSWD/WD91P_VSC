<?php

class Greetings {
    const GREET = "Good Morning";

    public function print(){
        // access constant using self keyword inside the class
        echo self::GREET;
    }
}

$greet = new Greetings();
$greet->print();

// access
echo Greetings::GREET;

?>
