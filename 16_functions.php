<?php
echo "Welcome to functions on php. <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $key => $value){
        $sum += $value;
    }
    return $sum;
}

$rohan = [34, 98, 45, 12, 98, 93];
$sumMarks = processMarks($rohan);

$prashant = [80, 50, 60, 75, 80, 90];
$sumPrashant = processMarks($prashant);
echo "Total marks scored by rohan out of 600 is $sumMarks. <br>";
echo "Total marks scored by prashant out of 600 is $sumPrashant. <br>";
?>