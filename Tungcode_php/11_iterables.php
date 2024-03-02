<?php

function display(iterable $myiterable) {
    foreach ($myiterable as $item) {
        echo "<br>" . $item;
    }
}

$arr = ["one", "two", "three"];
display($arr);



?>

