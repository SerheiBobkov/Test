<?php
header('Content-type: text/plain');

$arrayOfStrings = [
    ["Hello", "world"],
    ["Brad", "came", "to", "dinner", "with", "us"],
    ["He", "loves", "tacos"]
];

$location = ["LEFT", "RIGHT", "LEFT"];
$limit = 16;

function resultArr($location, $limit, $arrayOfStrings): array
{
    for ($row = 0; $row < 3; $row++) {
        $lengthOfWords = 0;
        $strings = "";
        $arrLength = count($arrayOfStrings[$row]);
        for ($col = 0; $col < $arrLength; $col++) {
            $lengthOfWords += strlen($arrayOfStrings[$row][$col]);
            $strings = $strings . $arrayOfStrings[$row][$col] . ' ';
        }

        $lengthOfWords += $arrLength;
        if ($lengthOfWords <= $limit) {
            if ($location[$row] == "LEFT") {
                $strings = str_pad($strings, $limit);
                $decoration[] = "*" . $strings . "*";
            } elseif ($location[$row] == "RIGHT") {
                $strings = str_pad($strings, $limit, " ", STR_PAD_LEFT);
                $decoration [] = "*" . $strings . "*";
            }
        } else {
            $word = 0;
            while ($word < $arrLength) {
                $strings = "";
                $charLimit = 0;
                while ($charLimit + strlen($arrayOfStrings[$row][$word]) + 1 < $limit) {
                    $charLimit += strlen($arrayOfStrings[$row][$word]) + 1;
                    $strings = $strings . $arrayOfStrings[$row][$word] . ' ';
                    $word++;
                }

                $strings = rtrim($strings);
                if ($location[$row] == "LEFT") {
                    $strings = str_pad($strings, $limit);
                    $decoration [] = "*" . $strings . "*";
                } elseif ($location[$row] == "RIGHT") {
                    $strings = str_pad($strings, $limit, " ", STR_PAD_LEFT);
                    $decoration [] = "*" . $strings . "*";
                }
            }
        }
    }

    array_unshift($decoration, "******************");
    array_push   ($decoration, "******************");
    return $decoration;
}

/*//print_r($arrayOfStrings);
var_dump($arrayOfStrings);
echo "\n";*/

$i = resultArr($location, $limit, $arrayOfStrings);
//print_r($i);
var_dump($i);