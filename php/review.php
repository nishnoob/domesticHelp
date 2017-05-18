<?php
$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "mine";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO domReview VALUES ( NULL , '". $_POST['rname'] ."', '". $_POST['rreview'] ."', ". $_POST['rrate'] .", ". $_POST['dhid'] .")";

if ($conn->query($sql) === TRUE) {
    echo "Your review is duely noted!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>