<?php

abstract class Sample {
    // abstract method
    abstract public function print();
}

class Example extends Sample {
        function print() {
            echo "Hi WD91P.";
        }
    }


$myobj = new Example;
$myobj->print();



?>

