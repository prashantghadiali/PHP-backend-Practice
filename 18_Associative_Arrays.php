<?php
echo "Welcome to world of Associative Arrays.";
// This is called as index arrays becaouse it is 0 to 5
// echo $Favcol['Prashant'];
// echo '<br>';
// echo $Favcol['Jatin'];
// echo '<br>';
// echo $Favcol['Suraj'];
// echo '<br>';
// echo $Favcol['Kirtan'];
// echo '<br>';
// Associative Arrays for favourite colour. it is string based arrays.
$Favcol = array('Prashant' => 'Red' ,'Jatin' => 'kesariya' , 'Suraj' => 'Black', 'Kirtan' => 'brown');
foreach ($Favcol as $key => $value) {
    echo "<br> The $key's favourite colour is $value.";
}
?>