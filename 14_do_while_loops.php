<?php
echo "Welcome to do while loop. <br>";
$i = 18;
// do is run once if condition is false. when both are true then it is run upto condition
do {
    echo "The driving age is $i. <br>";
    $i++;
} while ($i <= 65);
echo "do while loop is completed";
?>