<?php
session_start();
include_once('config.php');

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	 // Get data
	 $category=$_POST['category'];
	$firstName = $_POST['firstName'];
 	$lastName = $_POST['lastName'];
  	$serviceArea = $_POST['serviceArea'];
	$desc=$_POST['desc'];
	
		$sqlinsert="INSERT INTO domHelp (category,firstName,lastName,serviceArea,description) VALUES ('$category','$firstName','$lastName','$serviceArea','$desc')";
		if(!mysqli_query($con,$sqlinsert))
		{
			die('error inserting new record'.mysqli_error($con)) ;
			exit();
	    }
	    else
	    	echo "<script>alert('Saved succesfully!');</script>";
	header("refresh:0;url=admin1.php");


	mysqli_close($con);
}


?>