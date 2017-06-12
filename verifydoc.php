<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
	
	$conn = new mysqli($servername, $username, $password,		$dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql= "UPDATE documents SET d_verified=1 WHERE d_did={$_GET['d_did']}";

		if($conn->query($sql)===FALSE)
		{
			echo "<br><br><br>Error: ". $conn->error;
			echo "{$sql}";
		}
		$conn->close();

		header("Location:verifydocuments.php?txtAadhar={$_GET['aadhar']}&btnSearch=");
?>