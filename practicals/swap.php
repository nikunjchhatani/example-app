<?php
function swapNumbers(&$number1, &$number2) {
    // Use pass-by-reference to modify the original variables
    $temp = $number1;
    $number1 = $number2;
    $number2 = $temp;
}

$number1 = 5;
$number2 = 10;

echo "Before swapping: ";
echo "Number 1 = " . $number1 . ", Number 2 = " . $number2 . "<br>";

// Call the swapNumbers function to swap the numbers
swapNumbers($number1, $number2);

echo "After swapping: ";
echo "Number 1 = " . $number1 . ", Number 2 = " . $number2;
?>

