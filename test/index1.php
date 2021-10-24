<?php
header('Content-type: text/plain');

/*$matrix = [
    [1, 2, 3, 2, 7],
    [4, 5, 6, 8, 1],                 //For example;
    [7, 8, 9, 4, 5],
];*/

$matrix = [
    [1, 1, 2, 3, 7],
    [4, 6, 5, 4, 1],
    [7, 7, 9, 8, 6],
];

$col = 0;

function myMatrix($matrix, $col, $arrLength)
{
    for ($i = 0; $i <= $arrLength - 3; $i++) {
        for ($row = 0; $row < 3; $row++) {
            for ($j = $col; $j <= $col + 2; $j++) {
                $am[] = $matrix[$row][$j];
            }
        }
        for ($con = 1; $con <= 9; $con++) {
            if (in_array($con, $am)) {
                $result = true;
                //break;
            } else {
                $result = false;
                break;
            }
        }
        $arrRes[] = $result;
        unset($am);
        $col++;
    }
    return $arrRes;
}

$arrLength = count($matrix[0]);
echo "SOURCE MATRIX: \n \n";
//print_r($matrix);
var_dump($matrix);

$arrRes = myMatrix($matrix, $col, $arrLength);
echo "\n RESULT OF CHECKING: \n \n";
//print_r($arrRes);
var_dump($arrRes);




