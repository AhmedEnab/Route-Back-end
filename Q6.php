<?php
$numbers = [10, 30, 20];

$max_number = 0 ;

foreach ($numbers as $number) {
    if ($number > $max_number) {
        $max_number = $number;
    }
}

echo " <h2> The maximum number is:  $max_number </h2>";