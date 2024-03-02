<?php

interface food {
    public function foodname();
    public function ingredient();
}

class Dessert implements Food {
    public function foodname()
    {
        echo "Halo-halo.";
    }
}

$food = new Dessert();
$food->foodname();
$food->ingredient();

?>