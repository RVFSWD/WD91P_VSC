<?php

trait Greetings {
    public function morning(){
        echo "Good Morning!";
    }
    public function afternoon(){
        echo "Good Afternoon!";
    }    

}

class Greet {
    use Greetings;
}

$myobj = new Greet();
$myobj->morning();
$myobj->afternoon();



?>