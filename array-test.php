<?php

$user = [
    "name" => "John Doe",
    "age" => 30,
    "occupation" => "programmer",
    "gratuated" => false
];

foreach($user as $key => $data) {

    if($key === "gratuated" && $data == true) {
        $data = "Yes";
    } else if($key === "gratuated" && $data == false) {
        $data = "No";
    }
     
    echo $key . "=" . $data. "<br>";
}
