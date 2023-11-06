<?php
function generateFibonacci($n) {
    $fibonacciSequence = [];

    if ($n < 1) {
        return $fibonacciSequence; // No Fibonacci numbers to generate
    }

    $fibonacciSequence = [0]; // The first Fibonacci number

    if ($n > 1) {
        $fibonacciSequence[] = 1; // The second Fibonacci number
    }

    for ($i = 2; $i < $n; $i++) {
        $nextFibonacci = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        $fibonacciSequence[] = $nextFibonacci;
    }

    return $fibonacciSequence;
}

$n = 10; // Change this to the number of Fibonacci numbers you want to generate

$fibonacciNumbers = generateFibonacci($n);

foreach ($fibonacciNumbers as $number) {
    echo $number . " ";
}
?>

