<?php
$a = 10;
$b = 5;

echo "<p>#Arithmetic Operators :</p>";

echo "Addition " . $a + $b . "<br>";  // Addition: Output is 15
echo "Subtraction " . $a - $b . "<br>";  // Subtraction: Output is 5
echo "Multiplication " . $a * $b . "<br>"; // Multiplication: Output is 50
echo "Division " . $a / $b . "<br>"; // Division: Output is 2
echo "Modulus " . $a % $b . "<br>"; // Modulus (remainder of division): Output is 0



echo "<p>#Assignment Operators :</p>";

$x = 10;   // Assigns 10 to $x
$x += 5;   // Same as: $x = $x + 5 (adds 5 to $x)
echo $x;   // Output: 15

echo "<p>#Comparison Operators :</p>";
$x = 10;
$y = 5;

echo $x == $y;  // Equal: Output is false (since 10 is not equal to 5)
echo $x != $y;  // Not equal: Output is true (since 10 is not equal to 5)
echo $x > $y;   // Greater than: Output is true
echo $x < $y;   // Less than: Output is false

echo "<p>#Logical Operators :</p>";
$x = 10;
$y = 5;

echo ($x == 10 && $y == 5);  // AND: Output is true (both conditions are true)
echo ($x == 10 || $y == 4);  // OR: Output is true (one condition is true)
echo !($x == 10);            // NOT: Output is false (negates the condition)


echo "<p>#Increment/Decrement Operators :</p>";

// Pre-increment
$x = 5;
echo ++$x;  // Output: 6 (increments $x before returning it)

// Post-increment
$x = 5;
echo $x++;  // Output: 5 (returns $x first, then increments it)
echo $x;    // Output: 6 (now $x has been incremented)


// Pre-decrement:
$x = 5;
echo --$x;  // Output: 4 (decrements $x before returning it)

// Post-decrement:
$x = 5;
echo $x--;  // Output: 5 (returns $x first, then decrements it)
echo $x;    // Output: 4 (now $x has been decremented)


echo "<p>#String Operators :</p>";
// These operators are used to concatenate (join) strings.
$firstName = "John";
$lastName = "Doe";

$fullName = $firstName . " " . $lastName;  // Concatenation
echo $fullName;  // Output: John Doe
?>

