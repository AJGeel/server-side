<?php include 'creds.php' ?>

<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
// In our SQL, we insert a question mark (?) where we want to substitute in an integer, string, double or blob value.
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");

// This function binds the parameters to the SQL query and tells the database what the parameters are. The "sss" argument lists the types of data that the parameters are. The s character tells mysql that the parameter is a string.
// The argument may be one of four types:
// i - integer  /  d - double  /  s - string  /  b - BLOB
$stmt->bind_param("sss", $firstname, $lastname, $email);
// Note: If we want to insert any data from external sources (like user input), it is very important that the data is sanitized and validated.



// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>

<?php include 'footer.php'; ?>
