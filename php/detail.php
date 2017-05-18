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
else
  //echo "Connected successfully";

$sql = "SELECT * from domHelp where dhID = '" . $_POST["dhid"] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $i=0;
  while($row = $result->fetch_assoc()) {
    $output[$i]['dhID'] = $row['dhID'];
    $output[$i]['firstName'] = $row['firstName'];
    $output[$i]['lastName'] = $row['lastName'];
    $output[$i]['category'] = $row['category'];
    $output[$i]['serviceArea'] = $row['serviceArea'];
    $output[$i]['description'] = $row['description'];
    $i++;  
  }
  echo json_encode($output);
}else {
  echo "0 results";
}

$conn->close();
?>