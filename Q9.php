<?php
$mainString = "Route Academy";
$secondString = "Route";

if(preg_match("/$secondString/" , $mainString)){
    echo "<h2>'$secondString' was founded in the main string.</h2>";
}else{
    echo "<h2>'$secondString' was not founded in the main string.</h2>";
}