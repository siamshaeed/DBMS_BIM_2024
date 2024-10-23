<?php 
echo "<h2>#PHP Conditional Statements :</h2>";

echo "if Statement :</p>";

$age = 18;

if ($age >= 18) {
    echo "You are eligible to vote." . "<br>";
}

// ------------------

$number = 5;

if ($number > 0) {
    echo "The Number is Positive." . "<br>";
}

echo "switch Statement :</p>";

$fruit = "apple";

switch ($fruit) {
    case "apple":
        echo "You selected Apple.";
        break;
    case "banana":
        echo "You selected Banana.";
        break;
    case "orange":
        echo "You selected Orange.";
        break;
    default:
        echo "Unknown fruit selection.";
}

?>