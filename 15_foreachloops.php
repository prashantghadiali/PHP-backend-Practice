<?php
echo "welcome to the world of for each loop. <br>";
$arr = array("banana", "apples", "harpic", "bread", "butter");

// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i];
//     echo "<br>";
// }

// Better way to do this - foreach loops
foreach ($arr as $value) {
    echo "$value <br>";
}

?>