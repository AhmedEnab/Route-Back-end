<?php 
$array = [2,4,3,1,6,7,5,8,0,9];
$sum = 0;
for($i = 0 ; $i <count($array); $i++){
    $sum += $array[$i];
}

$avg = $sum / count($array);

echo "<h2>the avg of [2,4,3,1,6,7,5,8,0,9] array is : $avg</h2>";
