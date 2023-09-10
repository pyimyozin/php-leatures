<?php

// Define an array
$array = [1, 2, 3, 4, 5];

// Iterate through the array by reference to modify the elements
foreach ($array as &$value) {
    // Modify the element
    $value *= 2;
}

// Unset the reference to prevent unexpected behavior
unset($value);

// Now, $array contains the modified elements
var_dump($array);
?>