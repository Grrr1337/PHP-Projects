<?php
    // Variables
    $isMorning = true;
    $isWeekend = false;
    $isSunny = true;
    $dayOfWeek = "Monday";

    // Simple if statement
    if ($isMorning) {
        echo "Good Morning!";
    }

    // If-else statement
    echo "<br>";
    if ($isWeekend) {
        echo "It's the weekend!";
    } else {
        echo "It's not the weekend.";
    }

    // If-elseif-else statement
    echo "<br>";
    if ($dayOfWeek == "Saturday" || $dayOfWeek == "Sunday") {
        echo "It's the weekend!";
    } elseif ($dayOfWeek == "Friday") {
        echo "It's almost the weekend!";
    } else {
        echo "It's a weekday.";
    }

     // Using AND (&&) operator
     if ($isMorning && $isSunny) {
        echo "Good Morning, and it's sunny!";
    }

    // Using OR (||) operator
    echo "<br>";
    if ($isWeekend || $isSunny) {
        echo "It's either the weekend or it's sunny.";
    }

    // Using NOT (!) operator
    echo "<br>";
    if (!$isWeekend) {
        echo "It's not the weekend.";
    }

    // Combining AND, OR, and NOT
    echo "<br>";
    if (($isMorning && $isSunny) || (!$isWeekend)) {
        echo "It's a good day!";
    }

    // Ternary operator
    echo "<br>";
    $result = ($isMorning) ? "Good Morning!" : "Not morning anymore.";
    echo $result;

    // Switch statement
    echo "<br>";
    $grade = "B";
    switch ($grade) {
        case "A":
            echo "Excellent!";
            break;
        case "B":
            echo "Good job!";
            break;
        case "C":
            echo "Well done.";
            break;
        default:
            echo "Keep trying!";
    }
?>
