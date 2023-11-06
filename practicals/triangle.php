<?php

// Define the number of rows for the inverted half triangle
$numRows = 5;

for ($i = $numRows; $i >= 1; $i--) {
    // Print asterisks for each row
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }

    // Move to the next line after each row
    echo "\n";
}

?>

