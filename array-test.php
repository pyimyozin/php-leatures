<?php

$user = [
    "name" => "John Doe",
    "age" => 30,
    "occupation" => "programmer",
    "gratuated" => false
];

foreach($user as $key => $data) {

    if($key === "gratuated" && $data == true) {
        echo "User Johndoe is gratuated.";
    } else if($key === "gratuated" && $data == false) {
        echo "User John Doe is under graduated.";
    }
}
