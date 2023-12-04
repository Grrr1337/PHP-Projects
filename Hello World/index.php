<?php
    // Define variables
    $greeting = "Hello";
    $name = "World";

    // Concatenate variables
    $message = $greeting . ", " . $name . "!";

    // HTML structure with PHP embedded
    echo "<html>";
    echo "<head><title>PHP Hello World</title></head>";
    echo "<body>";
    echo "<h1>$message</h1>";
    echo "<p>This is my first Hello World page in PHP.</p>";
    echo "</body>";
    echo "</html>";
?>
