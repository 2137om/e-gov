<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
	
	$conn = new mysqli($servername, $username, $password,		$dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql= "DELETE FROM documents WHERE d_did={$_GET['d_did']}";

		if($conn->query($sql)===FALSE)
		{
			echo "<br><br><br>Error: ". $conn->error;
			echo "{$sql}";
		}
		$conn->close();

		/*header("Location:verifydocuments.php?txtAadhar={$_GET['aadhar']}&btnSearch=");*/

		if($_SESSION["c_type"]=='Agent')
			header("Location:verifydocuments.php?txtAadhar={$_GET['aadhar']}&btnSearch=");
		else
			header("Location:managedocuments.php");
			
?>