<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($divisor = 2; $divisor * $divisor <= $number; $divisor++) {
        if ($number % $divisor == 0) {
            return false;
        }
    }

    return true;
}

function printPrimesUpTo($limit) {
    for ($i = 2; $i <= $limit; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
}

$limit = 10; // Change this to set the upper limit for prime numbers

echo "Prime numbers up to $limit: ";
printPrimesUpTo($limit);
?>

