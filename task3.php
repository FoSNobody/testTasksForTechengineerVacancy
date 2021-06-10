<?php
$arrayOne = ["el", "ab", "cd"];
$arrayTwo = ["y5", "y6", "y7"];

$newArray = generateNewArray($arrayOne, $arrayTwo);
print_r($newArray);

function generateNewArray($arrayOne, $arrayTwo){
    $arrayTwo = array_reverse($arrayTwo);
    $newArray = array_combine($arrayOne, $arrayTwo);
    return $newArray;
}

