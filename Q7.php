
<?php
$date = '2012-12-21';

$year = substr($date, 0, 4);
$month = substr($date, 5, 2);
$day = substr($date, 8, 2);

$month++;
if ($month > 12) {
    $month = 1;
    $year++;
}

echo "<h2> $year  - ". str_pad($month, 2, '0', STR_PAD_LEFT) . "-  $day </h2>";
