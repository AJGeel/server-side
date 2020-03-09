<?php
// Server / Database Creds
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM formData";
$result = $conn->query($sql);

echo "<h3 style='text-align: center; margin-top: 10em; color: teal;'>Database entries:</h3>";

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>User_ID</th><th>Prototype_ID</th><th>Form_Results</th></tr>";

  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["user_id"]."</td><td>".$row["prototype_id"]."</td><td>".$row["form_results"]."</td></tr>";
  }

  echo "</table>";
} else {
  echo "No database records found.";
}

$conn->close();
?>
