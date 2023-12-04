<?php
    // Constants
    // Define constants for greeting and target
    define('GREETING', 'Hello');
    define('TARGET', 'Vladimir Balabanov'); // Updated TARGET to include the full name

    // Variables
    // Initialize variables for firstname and lastname
    $firstname = "Vladimir";
    $lastname = "Balabanov";

    // Create a message template with placeholders for firstname and lastname
    $messageTemplate = "%s %s %s!";

    // Concatenate variables using sprintf
    $message = sprintf($messageTemplate, GREETING, $firstname, $lastname);

    // Output
    echo $message;
    
    // Variable Variables
    // Create a dynamic variable with the name stored in $dynamicVariable
    $dynamicVariable = 'firstname';
    $$dynamicVariable = "Vlado";

    // Example output of using variable variable
    echo "<br>";
    echo "'Variable variable' output: {$$dynamicVariable}"; // outputs "Vlado"

    // Example of using constants
    echo "<br>";
    echo "Using constant GREETING: " . GREETING;
    echo "<br>";
    echo "Using constant TARGET: " . TARGET;

    // Magic Constants
    echo "<br>";
    echo "Line number: " . __LINE__; // Outputs the current line number
    echo "<br>";
    echo "File path: " . __FILE__; // Outputs the full path and filename of the file
?>
