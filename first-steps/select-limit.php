<?php include 'creds.php' ?>

<?php

// MySQL provides a LIMIT clause that is used to specify the number of records to return.
//
// The LIMIT clause makes it easy to code multi page results or pagination with SQL, and is very useful on large tables. Returning a large number of records can impact on performance.

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests LIMIT 30";
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
