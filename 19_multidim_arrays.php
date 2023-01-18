<?php
echo "Welcome to world of Mutidimensional arrays.<br>";
// arrays in array of 2 dimensional array
// $multiDim = array(
//                     array(2,5,7,8),
//                     array(1,2,3,1),
//                     array(4,5,0,8)
// );
// // echo var_dump($multiDim);
// echo $multiDim[1][2];
// $multiDim = array(
//                     array(2,5,7,8),
//                     array(1,2,3,1),
//                     array(4,5,0,8)
// );
// for ($i=0; $i < count($multiDim); $i++) { 
//     for ($j=0; $j < count($multiDim[$i]) ; $j++) { 
//         echo $multiDim[$i][$j];
//         echo " ";
//     }
//     echo "<br>";
// }
// 3 dimensional array practice
$multiDim = array(array(
                    array(2,5,7,8),
                    array(1,2,3,1),
                    array(4,5,0,8)
                    )     );
for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        for ($k=0; $k < count($multiDim[$i][$j]); $k++) { 
            echo $multiDim[$i][$j][$k];
            echo " ";
        }
        echo "<br>";
    }
}
?>