<?php
//  Sorting array to ascending order:
echo "<h2>Sorting array to ascending order:</h2>";
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
for ($r = 0; $r < 10; $r++) {
    for ($i = 0; $i < 10; $i++) {
        if ($i + 1 != 10) {
            if ($array[$i] > $array[$i + 1]) {
                $copry = $array[$i + 1];
                $array[$i + 1] = $array[$i];
                $array[$i] = $copry;
            }
        } else {
            continue;
        }
    }
}

print_r($array);

echo "<hr>";

// Sorting array to descending order:
echo "<h2>Sorting array to descending order:</h2>";
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
for ($r = 0; $r < 10; $r++) {
    for ($i = 0; $i < 10; $i++) {
        if ($i + 1 != 10) {
            if ($array[$i] < $array[$i + 1]) {
                $copry = $array[$i + 1];
                $array[$i + 1] = $array[$i];
                $array[$i] = $copry;
            }
        } else {
            continue;
        }
    }
}

print_r($array);
