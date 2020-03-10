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


$sql = "SELECT * FROM heuristic_evaluation_test_3";
$result = $conn->query($sql);

echo '<link rel="stylesheet" href="style.css">';

echo "<h3 style='text-align: center; margin-top: 10em; color: teal;'>Database entries:</h3>";

if ($result->num_rows > 0) {
  echo "
  <table><tr>
    <th>ID</th>
    <th>User_ID</th>
    <th>Prototype_ID</th>
    <th>H1</th>
    <th>H1_Issue</th>
    <th>H1_Recommendation</th>
    <th>H2</th>
    <th>H2_Issue</th>
    <th>H2_Recommendation</th>
    <th>Timestamp</th>
  </tr>";

  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["user_id"]."</td><td>".$row["prototype_id"]."</td><td>".$row["heu_1"]."</td><td>".$row["heu_1_issue"]."</td><td>".$row["heu_1_recommendation"]."</td><td>".$row["heu_2"]."</td><td>".$row["heu_2_issue"]."</td><td>".$row["heu_2_recommendation"]."</td><td>".$row["reg_date"]."</td></tr>";
  }

  echo "</table>";
} else {
  echo "<p style='text-align: center; margin-bottom: 10em;'>No database records found.</p>";
}

$conn->close();
?>
