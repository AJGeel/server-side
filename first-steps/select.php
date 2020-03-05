<?php include 'creds.php' ?>

<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
$result = $conn->query($sql);

echo "<style>

body {
  font-family: monospace;
}

table {
  margin: 0 auto;
  text-align: center;

  margin-bottom: 100px;
}

tr:nth-child(even) {
  background-color: #fbeec9;
}

td {
  padding: .4em 1em;
}
</style>";

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>email</th><th>reg_date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["reg_date"]."</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

<?php include 'footer.php'; ?>
