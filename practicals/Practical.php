<?php

class Practical {
    /**
     * Prints "Hello, World!"
     */
    public static function printHello() {
        echo "Hello, World!" . PHP_EOL;
    }

    /**
     * Takes two numbers as arguments. Returns the sum of two numbers.
     *
     * @param int $num1 The first number.
     * @param int $num2 The second number.
     * @return int The sum of $num1 and $num2.
     */
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    /**
     * Takes an integer 'n' as an argument. Returns an array of Fibonacci sequence containing 'n' integers.
     *
     * @param int $n The number of Fibonacci numbers to generate.
     * @return array An array containing the first 'n' Fibonacci numbers.
     */
    public static function generateFibonacciSequence($n) {
        $sequence = [];
        $a = 0;
        $b = 1;

        for ($i = 0; $i < $n; $i++) {
            $sequence[] = $a;
            $next = $a + $b;
            $a = $b;
            $b = $next;
        }

        return $sequence;
    }
}

// Example usage
Practical::printHello();
$result = Practical::add(5, 7);
echo "Sum: " . $result . PHP_EOL;
$fibonacciSequence = Practical::generateFibonacciSequence(10);
echo "Fibonacci Sequence: " . implode(", ", $fibonacciSequence) . PHP_EOL;

?>

