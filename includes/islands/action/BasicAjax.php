<?php

$islands = $_POST['islands'];
$islands = str_replace(array("\r\n", "\r", "\n"), ' ', $islands);
$islands = preg_split('/ /', $islands, -1, PREG_SPLIT_NO_EMPTY);

foreach ($islands as $value) {
    $countIslands[] = preg_split('//', $value, -1, PREG_SPLIT_NO_EMPTY);
}
$countA = count($countIslands);
$countB = count($countIslands[0]);

function countIslands($countIslands, $countA, $countB) {
    $count = 0;
    for ($i = 0; $i < $countA; $i++) {
        for ($j = 0; $j < $countB; $j++) {
            if ($countIslands[$i][$j] == 1) {
                if (($i == 0 || $countIslands[$i - 1][$j] == 0) && ($j == 0 || $countIslands[$i][$j - 1] == 0))
                    $count++;
            }
        }
    }
    return $count;
}

echo "количество островов: " . countIslands($countIslands, $countA, $countB);
