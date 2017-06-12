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

	$sql= "DELETE FROM notifications_al WHERE n_id={$_GET['n_id']}";

		if($conn->query($sql)===FALSE)
		{
			echo "<br><br><br>Error: ". $conn->error;
			echo "{$sql}";
		}
	$sql= "DELETE FROM filters1 WHERE f_nid={$_GET['n_id']}";

		if($conn->query($sql)===FALSE)
		{
			echo "<br><br><br>Error: ". $conn->error;
			echo "{$sql}";
		}
	
	$sql= "DELETE FROM notifications WHERE n_id={$_GET['n_id']}";

		if($conn->query($sql)===FALSE)
		{
			echo "<br><br><br>Error: ". $conn->error;
			echo "{$sql}";
			exit();
		}

	
			header("Location:adminhome.php");
?>