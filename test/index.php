<?php
header('Content-type: text/plain');

/*$myArr = [1, 3, 5, 4, 5, 7];                 //For example;*/

$myArr = [10, 2, 5, 8, 9, 0];

function arr($myArr)
{
    $arrLength = count($myArr);
    if ($arrLength < 3) {
        die ('Error');
    } else {
        return $myArr;
    }
}

function arrayResult($myArr): array
{
    $arrLength = count($myArr);
    for ($i = 1; $i < $arrLength - 1; $i++) {
        if (($myArr[$i - 1] > $myArr[$i] && $myArr[$i] < $myArr[$i + 1]) || ($myArr[$i - 1] < $myArr[$i] && $myArr[$i] > $myArr[$i + 1])) {
            $arrRes[$i - 1] = 1;
        } else {
            $arrRes[$i - 1] = 0;
        }
    }
    return $arrRes;
}

arr($myArr);
echo "MY ARRAY: \n \n";
//print_r($myArr);
var_dump($myArr);
echo "\n";
$arrRes = arrayResult($myArr);
echo "RESULT ARRAY: \n \n";
//print_r($arrRes);
var_dump($arrRes);



