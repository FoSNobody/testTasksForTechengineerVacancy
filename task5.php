<?php

$fp = fopen('FilesFromTasks/task5.csv', 'w');

$arrayOne = [
    "name" => "some name",
    "age" => 5,
    "city" => "some town"
];
$arrayTwo = [
    "age" => 6,
    "country" => "small country",
    "city" => "mego city",
    "street" => "cute ave."
];
$arrayThree = mergeArrays($arrayOne, $arrayTwo);

writeToCsv($arrayThree,$fp);

fclose($fp);


function writeToCsv($arrayThree, $fp)
{
        $headers = array_keys($arrayThree);
        fputcsv($fp, $headers);
        fputcsv($fp, $arrayThree);
}

function mergeArrays($arrayOne, $arrayTwo) {
    $newArray = array_merge_recursive($arrayOne, $arrayTwo);
    foreach ($newArray as &$item) {
        if (is_array($item)) {
            $item = implode(', ', $item);
        }
    }
    return $newArray;
}