<?php
echo "<h2>#PHP Conditional Statements :</h2>";

echo "<h2>" . "If Statement :" . "</h2>";
$age = 18;

if ($age >= 18) {
    echo "You are eligible to vote." . "<br>";
}
// ------------------------

$number = 5;

if ($number > 0) {
    echo "The Number is Positive." . "<br>";
}
// -------------------------

echo "<h2>" . "If else Statement :" . "</h2>";
$age = 18;

if ($age >= 18) {
    echo "You are eligible to vote." . "<br>";
} else {
    echo "You are not eligible to vote." . "<br>";
}
// ------------------------

$usename_input = "rased";
$password_input = "password123";

$stored_username = "rased";
$stored_password = "password123";

if ($usename_input == $stored_username && $password_input == $stored_password) {
    echo "Welcome $usename_input you are login successfully";
} else {
    echo "You are login filed, Please try again !";
}
// -------------------------

echo "<h2>" . "If elseif else Statement :" . "</h2>";
$score = 90;

if ($score >= 90) {
    echo "Your Grade : A+";
} elseif ($score >= 80) {
    echo "Your Grade : A";
} elseif ($score >= 70) {
    echo "Your Grade : B";
} elseif ($score >= 60) {
    echo "Your Grade : C";
} elseif ($score >= 50) {
    echo "Your Grade : D";
} else {
    echo "You Fail";
}
// -------------------------


// -------------------------

echo "<h2>" . "Switch Statement :" . "</h2>";

$fruit = "apple";

switch ($fruit) {
    case "apple":
        echo "Apples are red";
        break;
    case "banana":
        echo "Bananas are Yellow";
        break;
    case "orange":
        echo "Oranges are orange";
        break;
    default:
        echo "Unknown fruit.";
}
