<?php

function printInvertedHalfTriangle($numRows) {
    for ($i = $numRows; $i >= 1; $i--) {
        echo str_repeat("*", $i) . PHP_EOL;
    }
}

$numRows = 5;
printInvertedHalfTriangle($numRows);

?>

