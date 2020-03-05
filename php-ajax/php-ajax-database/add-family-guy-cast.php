<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "root", "myDB");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO FamilyGuyCast (FirstName, LastName, Age, Hometown, Job)
VALUES ('Peter', 'Griffin', '41', 'Quahog', 'Brewery');";
$sql .= "INSERT INTO FamilyGuyCast (FirstName, LastName, Age, Hometown, Job)
VALUES ('Lois', 'Griffin', '40', 'Newport', 'Piano Teacher');";
$sql .= "INSERT INTO FamilyGuyCast (FirstName, LastName, Age, Hometown, Job)
VALUES ('Joseph', 'Swanson', '39', 'Quahog', 'Police Officer');";
$sql .= "INSERT INTO FamilyGuyCast (FirstName, LastName, Age, Hometown, Job)
VALUES ('Glenn', 'Quagmire', '41', 'Quahog', 'Pilot');";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


<!-- Use this to restore the table in the SQL console (in case you messed it up bro) -->
<!-- CREATE TABLE FamilyGuyCast ( Personid int NOT NULL AUTO_INCREMENT, FirstName varchar(255) NOT NULL, LastName varchar(255), Age int, Hometown varchar(255), Job varchar(255), PRIMARY KEY (Personid) ) -->
