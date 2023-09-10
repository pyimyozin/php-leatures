<?php
function star_arrange($limit) {
    for ($i = 0 ; $i < $limit ; $i++) {
        for ($j = 0; $j <= $i ; $j++) {
            if(!$i%2 == 0) {
                echo "*";
            }
        }
        echo "<br>";
    }
}

$limit = 5;
star_arrange($limit);
