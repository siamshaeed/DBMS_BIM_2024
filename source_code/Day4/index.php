<!DOCTYPE html>
<head>
<title>BIM | Contact</title>
</head>
<body>
<h1>Contact Form</h1>
<!-- Form to collect user information -->
<form method="post" action="">
<label for="name">Name:</label><br>
<input type="text" id="name" name="name" required><br><br>
<label for="email">Email:</label><br>
<input type="email" id="email" name="email" required><br><br>
<label for="phone">Phone:</label><br>
<input type="tel" id="phone" name="phone" required><br><br>
<label for="designation">Designation:</label><br>
<input type="text" id="designation" name="designation" required><br><br>
<input type="submit" value="Submit">
</form>
</body>
</html

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Get the form data
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$designation = htmlspecialchars($_POST['designation']);

// Display the submitted data
echo "<h2>Submitted Information:</h2>";
echo "Name: $name<br>";
echo "Email: $email<br>";
echo "Phone: $phone<br>";
echo "Designation: $designation<br>";
}
?>