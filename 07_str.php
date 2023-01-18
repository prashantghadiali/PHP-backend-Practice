<?php
$name = "Prashant is a good boy.";
echo $name;
echo "<br>";

echo "The length of " . "string is " . strlen($name) . ".";
echo "<br>";
echo "The total " . "word is " . str_word_count($name) . ".";
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "is");
echo "<br>";
echo str_replace("Prashant", "Rohan", $name);
echo "<br>";
echo str_repeat($name, 4);
?>