<?php
	//error_reporting(0);
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
	if($_POST["dhtype"] == "All")
		$sql = "SELECT * from domHelp";
	else
		$sql = "SELECT * from domHelp where category='". $_POST["dhtype"] ."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	      echo "
	        	<div class='card ctiles col-md-3'>
		            <h3 class='card-title ctshort'> $row[firstName] $row[lastName] </h3>
		            <h6 class='card-subtitle mb-2 text-muted'> $row[category] </h6>
		            <p></p>
		            <p> $row[serviceArea]</p>
		            </br>
		            <div class='text-center'>
		              <button type='button' class='btn btn-success moreinf' id=$row[dhID]>More</button>
		            </div>
				</div>
			";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
?>