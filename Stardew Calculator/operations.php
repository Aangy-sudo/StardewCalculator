<?php
if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = "";

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 == 0) {
                $result = "Cannot divide by zero!";
            } else {
                $result = $num1 / $num2;
            }
            break;
        case "modulo":
            if ($num2 == 0) {
                $result = "Cannot modulo by zero!";
            } else {
                $result = $num1 % $num2;
            }
            break;
        default:
            $result = "Invalid operation.";
    }

    echo "<h2>Result: $result</h2>";
    echo "<a href='index.html'>Go Back</a>";
} else {
    header("Location: index.html");
    exit();
}
