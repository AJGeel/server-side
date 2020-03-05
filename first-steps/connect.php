<?php include 'creds.php' ?>

<?php

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "<p style='font-family: monospace; text-align: center;'> Connected successfully</p>";
echo "Connected successfully";
?>

<?php include 'footer.php'; ?>
