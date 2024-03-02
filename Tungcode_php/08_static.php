<?php

class Transpo {
    // Static properties
    public static $transponame = "Bullet Train";

    //Static Method
    public static function land() {
        echo "Train";
    } 
}


// call static method
Transpo::land();

// Call Static Property
echo Transpo::$transponame;

?>

