<?php
    // Loop snippets

    // for-loop:
    $numbers = [1, 2, 3, 4, 5];
    $count = count($numbers);

    for ($i = 0; $i < $count; $i++) {
        echo $numbers[$i] . " ";
    }
    // Output: 1 2 3 4 5


    // foreach loop:
    $colors = ['red', 'green', 'blue'];

    foreach ($colors as $color) {
        echo $color . " ";
    }
    // Output: red green blue

    // while loop:
    $fruits = ['apple', 'banana', 'orange'];
    $index = 0;
    $count = count($fruits);

    while ($index < $count) {
        echo $fruits[$index] . " ";
        $index++;
    }
    // Output: apple banana orange


    // Array Functions:

    // map
    $numbers = [1, 2, 3, 4, 5];

    // Using array_map to square each element
    $squaredNumbers = array_map(function($num) {
        return $num * $num;
    }, $numbers);

    print_r($squaredNumbers);
    // Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

    // filter
    $ages = [25, 18, 30, 16, 22];

    // Example: Filtering ages greater than or equal to 18
    $adults = array_filter($ages, function($age) {
        return $age >= 18;
    });

    print_r($adults);
    // Output: Array ( [0] => 25 [2] => 30 [4] => 22 )


    // reduce 
    $numbers = [1, 2, 3, 4, 5];

    // Example: Calculating the sum of all numbers in the array
    $sum = array_reduce($numbers, function($accumulator, $num) {
        return $accumulator + $num;
    }, 0);

    echo $sum;
    // Output: 15

?>