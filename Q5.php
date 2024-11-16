<?php 
$array = [2,4,3,1,6,7,5,8,0,9] ;
$arrayLength = count($array);

for($i = 0 ;$i < $arrayLength ;$i++){
    if($array[$i] % 2 == 0){
        unset($array[$i]);
    }
}
echo "<h2>array after delete all even numbers is : </h2>";

print_r($array);