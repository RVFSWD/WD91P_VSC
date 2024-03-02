<?php
$name = "Ray";
$age = 29;
$loc = "Muntinlupa City";

echo "<h2> Hello World! Good morning.</h2>";
print ($name);
echo " <br> Hi, My name is " . $name . " and I am " . $age . " years old. From";

class Books {
    // properties
    public $title;
    public $author;

    // methods
    function set_value($title) {
        $this->title = $title;
    }

    function get_title() {
        return $this->title;
    }
}

$Book = new Books();
$Book->set_value('Berserker');

echo $Book->get_title();

if (10 >1){
    echo "This is a conditional statement";
}

function functname() {
    
}

?>

