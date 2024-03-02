<?php

class Tourist {
    public $visitor;
    public $country;

    public function __construct($visitor, $country)
    {
        $this->visitor = $visitor;
        $this->country = $country;
    }

    public function intro() {
        echo "Hi, I'm $this->visitor and I am from $this->country";
    }

}

//initialize object and passing parameter value

$tourist01 = new Tourist("Rika Watanabe", "Japan");
echo $tourist01->intro();

$tourist02 = new Tourist("Jin Woo", "Korea");
echo $tourist02->intro();

$tourist03 = new Tourist("Rachel Smith", "Australia");
echo $tourist03->intro();

?>