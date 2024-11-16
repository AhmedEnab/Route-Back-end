<?php

// --------------------------------- shape 1 ----------------------------------
echo "<h2>Shape 1</h2>";
for ($i = 1; $i <= 5; $i++) {
    // Print spaces before stars
    for ($upSpace = 0; $upSpace < 5 - $i; $upSpace++) {
        echo "&nbsp;";
    }
    // Print stars
    for ($up = 0; $up < $i; $up++) {
        echo "*";
    }
    echo "<br>";
}

for ($y = 1; $y < 5; $y++) {
    // Print spaces before stars
    for ($downSpace = 0; $downSpace < $y; $downSpace++) {
        echo "&nbsp;";
    }
    // Print stars
    for ($down = 0; $down < 5 - $y; $down++) {
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";
// --------------------------------- shape 2 ----------------------------------
echo "<h2>Shape 2</h2>";
for ($i = 1; $i <= 5; $i++) {
    for ($up = 0; $up < $i; $up++) {
        echo "*";
    }
    echo "<br>";
}

for ($y = 0; $y < 5; $y++) {
    for ($down = 0; $down < 5 - $y; $down++) {
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
// --------------------------------- shape 3 ----------------------------------
echo "<h2>Shape 3</h2>";
$i = 1;
while ($i <= 5) {
    for ($up = 0; $up < $i; $up++) {
        echo "*";
    }
    echo "<br>";
    $i += 2;
}
for ($y = 1; $y < 4; $y += 2) {
    for ($z = 0; $z < 4 - $y; $z++) {
        echo "*";
    }
    echo "<br>";
}
