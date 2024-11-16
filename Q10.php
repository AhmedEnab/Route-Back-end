<?php 

$number =9;

function isPrime($num) {
    if ($num < 2) {
        return false;
    }

    for($i = 2 ; $i < $num ; $i++ ){
        if($num % $i == 0 && $num != $i){
            return false;
        }
    }

    return true;
}

if (isPrime($number)) {
    echo "<h2>$number is a prime number.</h2>";
} else {
    echo "<h2>$number is not a prime number.</h2>";
}