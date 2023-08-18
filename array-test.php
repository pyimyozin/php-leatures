<?php

$user = [
    "name" => "John Doe",
    "age" => 30,
    "occupation" => "programmer",
    "gratuated" => true
];

foreach($user as $key => $data) {

    if($key === "gratuated" && $data == true) {
        $data = "Yes";
    }

    echo $key . "=" . $data. "<br>";
}
