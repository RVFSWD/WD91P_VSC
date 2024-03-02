<?php

class Tourist {
    public $visitor;
    public $country;
    public $travel;
    public $origin;

    

    public function __construct($visitor,$country,$travel,$origin ) {   
        // Initializing the class properties
        $this->visitor = $visitor;
        $this->visitor = $country;
        $this->visitor = $travel;
        $this->visitor = $origin;
    
    }

    public function intro() {
        echo "Hi, I'm $this->name and I am from $this->bootcamp bootcamp";
    }

    // Destructor ############################
    function __destruct()
    {
        echo "Our new visitor is {$this->visitor}.";
    }

}

$Tourist = new Tourist("Yuki Murimoto from Japan");


?>