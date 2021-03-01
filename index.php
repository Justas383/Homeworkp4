<?php

// $masyvas = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// for($i = 0; $i < count($masyvas); $i++){
//     if($i == count($masyvas) - 1){
//         print($masyvas[$i]);
//         break;
//     }else if($i % 2 == 0){
//         print($masyvas[$i]. ", ");
//     }
// };

$masD = [
    [1, 3, 5, 7, 9],
    [2, 4, 6, 8, 10]
];
$masD2 =[];

for($i = 0; $i < count($masD); $i++){
if($i == 1){ //pridedu "," tarp sujungtu array
    $masD2 .= ", ";
}
     for($j = 0; $j < count($masD[$i]); $j++){

        if($j == count($masD[$i])-1){
            $masD2 .= $masD[$i][$j];
            break;
        }
        $masD2 .= $masD[$i][$j] . ", ";

        if($masD[$i][$j] % 2 != 0){
            $masD2 .= $masD[$i+1][$j] . ", ";
        }
        if($masD[$i][$j] % 2 == 0){
            break;
        }
     } 
}
echo($masD2);

    ?>
