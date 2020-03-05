<?php include 'creds.php' ?>

<?php

// Notice the WHERE clause in the UPDATE syntax: The WHERE clause specifies which
// record or records that should be updated. If you omit the WHERE clause, all records will be updated!

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

<?php include 'footer.php'; ?>
