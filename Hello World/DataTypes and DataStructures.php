<?php

    // PHP DataTypes
    $number = 42;
    $floatNumber = 3.14;
    $text = 'Hello, World!';
    $isTrue = true;
    $isFalse = false;
    $nullValue = null;


    // Resource:
    $fileHandle = fopen("example.txt", "r");

    // Callable:
    function myFunction() {
        echo "Hello from myFunction!";
    }
    
    $callableVar = 'myFunction';
    $callableVar(); // Calls myFunction

    // Iterable (PHP 7.1 and later):    
    function iterateOverIterable(iterable $iterable) {
        foreach ($iterable as $item) {
            // Do something with each item
        }
    }

    

    // PHP Datastructures:

    // Arrays:
    $numericalArray = array(1, 2, 3, 4, 5);
    $associativeArray = array('name' => 'John', 'age' => 30, 'city' => 'New York');

    // Lists (Indexed Arrays):
    $colors = ['red', 'green', 'blue'];

    // Associative Arrays:
    $person = ['name' => 'Alice', 'age' => 25, 'country' => 'USA'];

    // Multidimensional Arrays:
    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    // Objects
    class Car {
        public $color;
        public $brand;
    
        public function startEngine() {
            echo "Engine started!";
        }
    }
    
    $myCar = new Car();
    $myCar->color = 'blue';
    $myCar->brand = 'Toyota';
    
    // Sets (PHP 8 and later):
    // $set = Set::of('int', 1, 2, 3, 4);

    // Maps (PHP 8 and later):
    // $map = Map::of('string', 'int');
    // $map = $map->put('age', 30);


?>

