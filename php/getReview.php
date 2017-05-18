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

$sql = "SELECT * from domReview where dhID = '" . $_POST["dhid"] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $i=0;
  while($row = $result->fetch_assoc()) {
    $output[$i]['rID'] = $row['rID'];
    $output[$i]['uName'] = $row['uName'];
    $output[$i]['review'] = $row['review'];
    $output[$i]['rating'] = $row['rating'];
    $i++;  
  }
  echo json_encode($output);
}else {
  echo "0 results";
}

$conn->close();
?>