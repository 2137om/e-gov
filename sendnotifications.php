<?php


	include('way2sms-api.php');
	require 'phpmailer/PHPMailerAutoload.php';

	

	session_start();


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
	// Create connection
	$conn = new mysqli($servername, $username, $password,		$dbname);
	// Check connection
	
	//  Testing start
	
	//  Testing end

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$newid = 120;
	if(isset($_POST['btnUpload']))
	{
		// 11 Document is set to None in odocuments table in database
		$f_doc1id = 11;
		$f_con1 = "";
		$f_value1 = 0;

		$f_doc2id = 11;
		$f_con2 = "";
		$f_value2 = 0;

		$f_doc3id = 11;
		$f_con3 = "";
		$f_value3 = 0;

		$f_doc4id = 11;
		$f_con4 = "";
		$f_value4 = 0;

		$f_doc5id = 11;
		$f_con5 = "";
		$f_value5 = 0;

		$f_doc6id = 11;
		$f_con6 = "";
		$f_value6 = 0;

		$f_doc7id = 11;
		$f_con7 = "";
		$f_value7 = 0;

		$f_doc8id = 11;
		$f_con8 = "";
		$f_value8 = 0;

		$f_doc9id = 11;
		$f_con9= "";
		$f_value9 = 0;

		$f_doc10id = 11;
		$f_con10 = "";
		$f_value10 = 0;

		$filter = "  ";
		//echo "sdf : {$_POST['selectDocument1']}";
		//echo "sdf : {$_POST['selectCondition1']}";

		$filter = "SELECT d_candidateid FROM documents";
		
		if ($_POST['selectDocument10'] != "None")
		{
			$f_doc10id = $_POST['selectDocument10'];
			// Document1 in eligiblity criteria
			// Document selected, but now cheching condition mentioned or not	for that document
			if ($_POST['selectCondition10'] == "None")
			{
				// Document1 without condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument10']} AND d_candidateid IN ($filter))";
			}
			else
			{
				// Document1 with condition
				//$filter = "SELECT d_candidateid FROM documents WHERE 

				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument10']} AND d_field1 {$_POST['selectCondition10']} {$_POST['txtValue10']} AND d_candidateid IN ($filter))";
					$f_con5 = $_POST['selectCondition10'];
				$f_value5 = $_POST['txtValue10'];
			}
		}

		if ($_POST['selectDocument9'] != "None")
		{
			$f_doc9id = $_POST['selectDocument9'];
			// Document1 in eligiblity criteria
			// Document selected, but now cheching condition mentioned or not	for that document
			if ($_POST['selectCondition9'] == "None")
			{
				// Document1 without condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument9']} AND d_candidateid IN ($filter))";
			}
			else
			{
				// Document1 with condition
				//$filter = "SELECT d_candidateid FROM documents WHERE 

				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument9']} AND d_field1 {$_POST['selectCondition9']} {$_POST['txtValue9']} AND d_candidateid IN ($filter))";
					$f_con5 = $_POST['selectCondition9'];
				$f_value5 = $_POST['txtValue9'];
			}
		}

		if ($_POST['selectDocument8'] != "None")
		{
			$f_doc8id = $_POST['selectDocument8'];
			// Document1 in eligiblity criteria
			// Document selected, but now cheching condition mentioned or not	for that document
			if ($_POST['selectCondition8'] == "None")
			{
				// Document1 without condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument8']} AND d_candidateid IN ($filter))";
			}
			else
			{
				// Document1 with condition
				//$filter = "SELECT d_candidateid FROM documents WHERE 

				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument8']} AND d_field1 {$_POST['selectCondition8']} {$_POST['txtValue8']} AND d_candidateid IN ($filter))";
					$f_con5 = $_POST['selectCondition8'];
				$f_value5 = $_POST['txtValue8'];
			}
		}

		if ($_POST['selectDocument7'] != "None")
		{
			$f_doc7id = $_POST['selectDocument7'];
			// Document1 in eligiblity criteria
			// Document selected, but now cheching condition mentioned or not	for that document
			if ($_POST['selectCondition7'] == "None")
			{
				// Document1 without condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument7']} AND d_candidateid IN ($filter))";
			}
			else
			{
				// Document1 with condition
				//$filter = "SELECT d_candidateid FROM documents WHERE 

				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument7']} AND d_field1 {$_POST['selectCondition7']} {$_POST['txtValue7']} AND d_candidateid IN ($filter))";
					$f_con5 = $_POST['selectCondition7'];
				$f_value5 = $_POST['txtValue7'];
			}
		}

		if ($_POST['selectDocument6'] != "None")
		{
			$f_doc6id = $_POST['selectDocument6'];
			// Document1 in eligiblity criteria
			// Document selected, but now cheching condition mentioned or not	for that document
			if ($_POST['selectCondition6'] == "None")
			{
				// Document1 without condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument6']} AND d_candidateid IN ($filter))";
			}
			else
			{
				// Document1 with condition
				//$filter = "SELECT d_candidateid FROM documents WHERE 

				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument6']} AND d_field1 {$_POST['selectCondition6']} {$_POST['txtValue6']} AND d_candidateid IN ($filter))";
					$f_con5 = $_POST['selectCondition9'];
				$f_value5 = $_POST['txtValue6'];
			}
		}



		if ($_POST['selectDocument5'] != "None")
		{
			// Document1 in eligiblity criteria
			// Document selected, but now cheching condition mentioned or not	for that document
			$f_doc5id = $_POST['selectDocument5'];
			if ($_POST['selectCondition5'] == "None")
			{
				// Document1 without condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_verified=1 AND d_id={$_POST['selectDocument5']} AND d_candidateid IN ($filter))";
			}
			else
			{
				// Document1 with condition
				//$filter = "SELECT d_candidateid FROM documents WHERE 

				$filter = "SELECT d_candidateid FROM documents WHERE (d_verified=1 AND d_id={$_POST['selectDocument5']} AND d_field1 {$_POST['selectCondition5']} {$_POST['txtValue5']} AND d_candidateid IN ($filter))";

				$f_con5 = $_POST['selectCondition5'];
				$f_value5 = $_POST['txtValue5'];
			}
		}

		if ($_POST['selectDocument4'] != "None")
		{
			// Document1 in eligiblity criteria
			// Document selected, but now cheching condition mentioned or not	for that document
			$f_doc4id = $_POST['selectDocument4'];
			if ($_POST['selectCondition4'] == "None")
			{
				// Document1 without condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_verified=1 AND d_id={$_POST['selectDocument4']} AND d_candidateid IN ($filter))";
			}
			else
			{
				// Document1 with condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_verified=1 AND d_id={$_POST['selectDocument4']} AND d_field1 {$_POST['selectCondition4']} {$_POST['txtValue4']} AND d_candidateid IN ($filter))";

				$f_con4 = $_POST['selectCondition4'];
				$f_value4 = $_POST['txtValue4'];
			}
		}

		if ($_POST['selectDocument3'] != "None")
		{
			// Document1 in eligiblity criteria
			// Document selected, but now cheching condition mentioned or not	for that document
			$f_doc3id = $_POST['selectDocument3'];
			if ($_POST['selectCondition3'] == "None")
			{
				// Document1 without condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_verified=1 AND d_id={$_POST['selectDocument3']} AND d_candidateid IN ($filter))";
			}
			else
			{
				// Document1 with condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_verified=1 AND d_id={$_POST['selectDocument3']} AND d_field1 {$_POST['selectCondition3']} {$_POST['txtValue3']} AND d_candidateid IN ($filter))";
				$f_con3 = $_POST['selectCondition3'];
				$f_value3 = $_POST['txtValue3'];
			}
		}
		if ($_POST['selectDocument2'] != "None")
		{
			// Document1 in eligiblity criteria
			// Document selected, but now cheching condition mentioned or not	for that document
			$f_doc2id = $_POST['selectDocument2'];
			if ($_POST['selectCondition2'] == "None")
			{
				// Document1 without condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_verified=1 AND d_id={$_POST['selectDocument2']} AND d_candidateid IN ($filter))";
			}
			else
			{
				// Document1 with condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_verified=1 AND d_id={$_POST['selectDocument2']} AND d_field1 {$_POST['selectCondition2']} {$_POST['txtValue2']} AND d_candidateid IN ($filter))";
				$f_con2 = $_POST['selectCondition2'];
				$f_value2 = $_POST['txtValue2'];
			}
		}
		if ($_POST['selectDocument1'] != "None")
		{
			// Document1 in eligiblity criteria
			// Document selected, but now cheching condition mentioned or not	for that document
			$f_doc1id = $_POST['selectDocument1'];
			if ($_POST['selectCondition1'] == "None")
			{
				// Document1 without condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_verified=1 AND d_id={$_POST['selectDocument1']} AND d_candidateid IN ($filter))";
			}
			else
			{
				// Document1 with condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_verified=1 AND d_id={$_POST['selectDocument1']} AND d_field1 {$_POST['selectCondition1']} {$_POST['txtValue1']} AND d_candidateid IN ($filter))";
				$f_con1 = $_POST['selectCondition1'];
				$f_value1 = $_POST['txtValue1'];
			}
		}

		// Upload file to system
		$errors= array();
		$file_name = $_FILES['image']['name'];
		$file_size =$_FILES['image']['size'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];
		$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
		$expensions= array("pdf");
      
		if(in_array($file_ext,$expensions)=== false){
		  $errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}
      
		if($file_size > 2097152){
		     $errors[]='File size must be excately 2 MB';
		}
		$file_name = "{$_POST['newid']}.{$file_ext}";
		if(empty($errors)==true){
			move_uploaded_file($file_tmp,"pdf/".$file_name);
			 //echo "Success";
		}
		else{
			 print_r($errors);
		}
		
		$today = "";
		$day = date('d');
		$month = date('m');
		$year = date('y');
		$today = "{$year}-{$month}-{$day}";


		$sql= "INSERT INTO notifications(n_title,n_smstext, n_emailtext, n_pdflink, n_date) values ('{$_POST['txtNName']}','{$_POST['txtSMSText']}','{$_POST['txtEmailText']}','pdf/{$file_name}', '{$today}');";
		
		if($conn->query($sql)===FALSE)
		{			
			echo "<br><br><br>Error: ". $conn->error;
			
			// Getting notice id
		
//			header("location:adminhome.php?send=fail");
		}
		else
		{
			$sql= "INSERT INTO `filters1`(`f_nid`, `f_doc1id`, `f_con1`, `f_value1`, `f_doc2id`, `f_con2`, `f_value2`, `f_doc3id`, `f_con3`, `f_value3`, `f_doc4id`, `f_con4`, `f_value4`, `f_doc5id`, `f_con5`, `f_value5`, `f_doc6id`, `f_con6`, `f_value6`, `f_doc7id`, `f_con7`, `f_value7`, `f_doc8id`, `f_con8`, `f_value8`, `f_doc9id`, `f_con9`, `f_value9`, `f_doc10id`, `f_con10`, `f_value10`) VALUES ('{$_POST['newid']}', '{$f_doc1id}','{$f_con1}', '{$f_value1}','{$f_doc2id}','{$f_con2}', '{$f_value2}','{$f_doc3id}','{$f_con3}', '{$f_value3}','{$f_doc4id}','{$f_con4}', '{$f_value4}','{$f_doc5id}','{$f_con5}', '{$f_value5}','{$f_doc6id}','{$f_con6}', '{$f_value6}','{$f_doc7id}','{$f_con7}', '{$f_value7}','{$f_doc8id}','{$f_con8}', '{$f_value8}','{$f_doc9id}','{$f_con9}', '{$f_value9}','{$f_doc10id}','{$f_con10}', '{$f_value10}')";
		
			if($conn->query($sql)===FALSE)
			{			
				echo "<br><br><br>Error: ". $conn->error;
				// Getting notice id
				exit();
			}
			
				$sql = "SELECT c_fullname,c_mobile, c_email FROM candidates WHERE c_id IN ({$filter})";
				
								
		$result = $conn->query($sql);
		if($result->num_rows>0)
		{

					$email = "navinsoft9@gmail.com";                    
                    $password = "navin124navinsoft";
                    $message = $_POST['txtEmailText'];
                    $subject = $_POST['txtNName'];

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $email;

                    $mail->Password = $password;

                    $mail->setFrom('navinsoft9@gmail.com', 'Navin Balla');
				
                    $mail->addReplyTo('navinsoft9@gmail.com', 'Navin Balla');
					$mail->Subject = $subject;
					$mail->AddAttachment("pdf/{$file_name}"); 
                    $mail->msgHTML($message);

                    $mail->addAddress("navinballa@gmail.com");
			while($row=$result->fetch_assoc())
			{
				$mobile = "{$row['c_mobile']}";
				$sms = "{$_POST['txtSMSText']} Job No.:{$_POST['newid']} http://localhost/project/pdf/{$file_name}";
				if (substr($mobile, 6)=="999999")
				{
				}
				else
					send_sms( '9422419298' , 'Q2355F' ,$mobile , $sms);

				$to_id = "{$row['c_email']}";
				if ($to_id == "navin@gmail.com")
				{
				}
				else
					$mail->addAddress($to_id);
			}
			                   $mail->send();
					

		}
		
		  
			
		}	
	}
	//$conn->close();
	//$conn11 = new mysqli($servername, $username, $password,$dbname);
	
		// Generate new id
		$sql = "SELECT MAX(n_id) as newid FROM notifications";
		//echo "{$sql}";
		//	exit();
		$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				$newid = $row['newid'] + 1;
			}
		}
	//echo "{$newid}";
		//		exit();
		
	if(isset($_POST['btnUpload']))
	{
		
		$sql = "SELECT c_id, c_fullname,c_mobile, c_email FROM candidates WHERE c_id IN ({$filter})";
		
	//exit();
		$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			$conn1 = new mysqli($servername, $username, "",		$dbname);
			while($row=$result->fetch_assoc())
			{
				//echo "{$_POST['newid']}<br>";
				
				$sql1= "INSERT INTO notifications_al(n_id,n_candidateid) values ('{$_POST['newid']}','{$row['c_id']}');";
		
				if($conn1->query($sql1)===FALSE)
				{			
					echo "<br><br><br>Error: ". $conn1->error;
			
				}
			}
			$conn1->close();
			//exit();
//header("location:adminhome.php?send=success");	

		}
		$conn->close();
		
	
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Governance</title>

	

	<script>
		function validateForm() 
		{
			var x = document.forms["myForm"]["txtNName"].value;
			var flag = true;
			if (x == null || x == "") 
			{
				document.getElementById("txtNName").style= "border:2px solid; color:red;";
				flag = false;
		    }
			else
			{
				document.getElementById("txtNName").style= "";
			}

			 x = document.forms["myForm"]["txtSMSText"].value;
			
			if (x == null || x == "") 
			{
				document.getElementById("txtSMSText").style= "border:2px solid; color:red;";
				flag = false;
		    }
			else
			{
				document.getElementById("txtSMSText").style= "";
			}

			x = document.forms["myForm"]["txtEmailText"].value;
			
			if (x == null || x == "") 
			{
				document.getElementById("txtEmailText").style= "border:2px solid; color:red;";
				flag = false;
		    }
			else
			{
				document.getElementById("txtEmailText").style= "";
			}

			x = document.forms["myForm"]["image"].value;
			if (x == null || x == "") 
			{	
				flag = false;
		    }
			else
			{
				
			}
			
			
			x = document.forms["myForm"]["selectDocument1"].value;
			
			if (x == null || x == "None") 
			{
				
		    }
			else
			{
				var y = document.forms["myForm"]["selectCondition1"].value;
				if (y == null || y == "None") 
				{
					
				}
				else
				{
					var z = document.forms["myForm"]["txtValue1"].value;
					if (z == null || z == "") 
					{
						document.getElementById("txtValue1").style= "border:2px solid; color:red;";
						flag = false;
					}
				}
						
			}

			x = document.forms["myForm"]["selectDocument2"].value;
			
			if (x == null || x == "None") 
			{
				
		    }
			else
			{
				var y = document.forms["myForm"]["selectCondition2"].value;
				if (y == null || y == "None") 
				{
					
				}
				else
				{
					var z = document.forms["myForm"]["txtValue2"].value;
					if (z == null || z == "") 
					{
						document.getElementById("txtValue2").style= "border:2px solid; color:red;";
						flag = false;
					}
				}
						
			}

			x = document.forms["myForm"]["selectDocument3"].value;
			
			if (x == null || x == "None") 
			{
				
		    }
			else
			{
				var y = document.forms["myForm"]["selectCondition3"].value;
				if (y == null || y == "None") 
				{
					
				}
				else
				{
					var z = document.forms["myForm"]["txtValue3"].value;
					if (z == null || z == "") 
					{
						document.getElementById("txtValue3").style= "border:2px solid; color:red;";
						flag = false;
					}
				}
						
			}

			x = document.forms["myForm"]["selectDocument4"].value;
			
			if (x == null || x == "None") 
			{
				
		    }
			else
			{
				var y = document.forms["myForm"]["selectCondition4"].value;
				if (y == null || y == "None") 
				{
					
				}
				else
				{
					var z = document.forms["myForm"]["txtValue4"].value;
					if (z == null || z == "") 
					{
						document.getElementById("txtValue4").style= "border:2px solid; color:red;";
						flag = false;
					}
				}
						
			}
			
			x = document.forms["myForm"]["selectDocument5"].value;
			
			if (x == null || x == "None") 
			{
				
		    }
			else
			{
				var y = document.forms["myForm"]["selectCondition5"].value;
				if (y == null || y == "None") 
				{
					
				}
				else
				{
					var z = document.forms["myForm"]["txtValue5"].value;
					if (z == null || z == "") 
					{
						document.getElementById("txtValue5").style= "border:2px solid; color:red;";
						flag = false;
					}
				}
						
			}

				
x = document.forms["myForm"]["selectDocument6"].value;
			
			if (x == null || x == "None") 
			{
				
		    }
			else
			{
				var y = document.forms["myForm"]["selectCondition6"].value;
				if (y == null || y == "None") 
				{
					
				}
				else
				{
					var z = document.forms["myForm"]["txtValue6"].value;
					if (z == null || z == "") 
					{
						document.getElementById("txtValue6").style= "border:2px solid; color:red;";
						flag = false;
					}
				}
						
			}

			x = document.forms["myForm"]["selectDocument7"].value;
			
			if (x == null || x == "None") 
			{
				
		    }
			else
			{
				var y = document.forms["myForm"]["selectCondition7"].value;
				if (y == null || y == "None") 
				{
					
				}
				else
				{
					var z = document.forms["myForm"]["txtValue7"].value;
					if (z == null || z == "") 
					{
						document.getElementById("txtValue7").style= "border:2px solid; color:red;";
						flag = false;
					}
				}
						
			}

			x = document.forms["myForm"]["selectDocument8"].value;
			
			if (x == null || x == "None") 
			{
				
		    }
			else
			{
				var y = document.forms["myForm"]["selectCondition8"].value;
				if (y == null || y == "None") 
				{
					
				}
				else
				{
					var z = document.forms["myForm"]["txtValue8"].value;
					if (z == null || z == "") 
					{
						document.getElementById("txtValue8").style= "border:2px solid; color:red;";
						flag = false;
					}
				}
						
			}

			x = document.forms["myForm"]["selectDocument9"].value;
			
			if (x == null || x == "None") 
			{
				
		    }
			else
			{
				var y = document.forms["myForm"]["selectCondition9"].value;
				if (y == null || y == "None") 
				{
					
				}
				else
				{
					var z = document.forms["myForm"]["txtValue9"].value;
					if (z == null || z == "") 
					{
						document.getElementById("txtValue9").style= "border:2px solid; color:red;";
						flag = false;
					}
				}
						
			}

			x = document.forms["myForm"]["selectDocument10"].value;
			
			if (x == null || x == "None") 
			{
				
		    }
			else
			{
				var y = document.forms["myForm"]["selectCondition10"].value;
				if (y == null || y == "None") 
				{
					
				}
				else
				{
					var z = document.forms["myForm"]["txtValue10"].value;
					if (z == null || z == "") 
					{
						document.getElementById("txtValue10").style= "border:2px solid; color:red;";
						flag = false;
					}
				}
						
			}

			
			return flag;
		}
	</script>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/fileinput.js" type="text/javascript"></script>
        <script src="js/fileinput_locale_fr.js" type="text/javascript"></script>
        <script src="../js/fileinput_locale_es.js" type="text/javascript"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">E-Governance</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li class="page-scroll">
                        <a href="#about">Hi... Admin</a>
                    </li>
                    <li class="page-scroll">
                        <a href="adminlogin.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
				  <form name="myForm" action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
				   <div class="intro-text">
						<span class="skills"> Send Notification</span>
                        <hr class="star-light">
						<div class="form-group">
							 <div class="col-sm-5 col-sm-offset-4">
								<input type="text" name="txtNName" id="txtNName" class="form-control" placeholder="Notification Title"/>
							</div>
						 </div>
					     <div class="form-group">
							 <div class="col-sm-5 col-sm-offset-4">
								<textarea name="txtSMSText" id ="txtSMSText" class="form-control" placeholder="SMS"></textarea>
							</div>
						 </div>
						 <div class="form-group">
							 <div class="col-sm-5 col-sm-offset-4">
								<textarea name="txtEmailText" id="txtEmailText" class="form-control" placeholder="Email"></textarea>
							</div>
						 </div>
						 <div class="form-group">
							 <div class="col-sm-5 col-sm-offset-4">
								 <input id="file-0a" class="file" type="file" multiple data-min-file-count="1" name="image">
							</div>
						 </div>
						 <div class="form-group">
							 <div class="col-sm-5 col-sm-offset-4">
								<input type="text" name="newid" style="visibility:hidden;"  class="form-control" value="<?php echo "{$newid}" ?>"/>
							</div>
						 </div>
						 <div class="form-group">
							 <div class="col-sm-5 col-sm-offset-4">
								<br>
							</div>
						 </div>
						 <div class="form-group">
							 <div class="col-sm-5 col-sm-offset-4">
	<br>
										<br>
							</div>
						 </div>

						<div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
								
								<table width="100%">
									<tr>
										<td width="50%">
										<select id="selectDocument1" name="selectDocument1" class="form-control">
											<option value="None"></option>
									<?php
							// Create connection
							$conn = new mysqli($servername, $username,	$password,		$dbname);
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " .		$conn->connect_error);
							} 
					
							$sql = "SELECT * FROM odocuments";
				
							$result = $conn->query($sql);
							$conn->close();
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc(	))
								{
						?>
									<option value="<?php echo "{$row['od_id']}" ?>"><?php echo "{$row['od_name']}" ?></option>
						<?php
								}
							}
						?>
									</select>
										</td>
										<td width="23%">
											<select id="selectCondition1" name="selectCondition1" class="form-control">
												<option value="None"></option>
												<option value="<">Less than</option>
												<option value=">">Greater than</option>
												<option value="=">Equal</option>
											</select>
										</td>
										<td width="20%">
											<input type="text" name="txtValue1" id="txtValue1" class="form-control" placeholder="Value"/>
										</td>
									</tr>
								</table>
								
							    </div>
							</div>

	<div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
								
								<table width="100%">
									<tr>
										<td width="50%">
										<select id="selectDocument2" name="selectDocument2" class="form-control">
											<option value="None"></option>
									<?php
							// Create connection
							$conn = new mysqli($servername, $username,	$password,		$dbname);
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " .		$conn->connect_error);
							} 
					
							$sql = "SELECT * FROM odocuments";
				
							$result = $conn->query($sql);
							$conn->close();
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc(	))
								{
						?>
									<option value="<?php echo "{$row['od_id']}" ?>"><?php echo "{$row['od_name']}" ?></option>
						<?php
								}
							}
						?>
									</select>
										</td>
										<td width="23%">
											<select id="selectCondition2" name="selectCondition2" class="form-control">
												<option value="None"></option>
												<option value="<">Less than</option>
												<option value=">">Greater than</option>
												<option value="=">Equal</option>
											</select>
										</td>
										<td width="20%">
											<input type="text" name="txtValue2" id="txtValue2" class="form-control" placeholder="Value"/>
										</td>
									</tr>
								</table>
								
							    </div>
							</div>

	<div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
								
								<table width="100%">
									<tr>
										<td width="50%">
										<select id="selectDocument3" name="selectDocument3" class="form-control">
											<option value="None"></option>
									<?php
							// Create connection
							$conn = new mysqli($servername, $username,	$password,		$dbname);
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " .		$conn->connect_error);
							} 
					
							$sql = "SELECT * FROM odocuments";
				
							$result = $conn->query($sql);
							$conn->close();
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc(	))
								{
						?>
									<option value="<?php echo "{$row['od_id']}" ?>"><?php echo "{$row['od_name']}" ?></option>
						<?php
								}
							}
						?>
									</select>
										</td>
										<td width="23%">
											<select id="selectCondition3" name="selectCondition3" class="form-control">
												<option value="None"></option>
												<option value="<">Less than</option>
												<option value=">">Greater than</option>
												<option value="=">Equal</option>
											</select>
										</td>
										<td width="20%">
											<input type="text" name="txtValue3" id="txtValue3" class="form-control" placeholder="Value"/>
										</td>
									</tr>
								</table>
								
							    </div>
							</div>

	<div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
								
								<table width="100%">
									<tr>
										<td width="50%">
										<select id="selectDocument4" name="selectDocument4" class="form-control">
											<option value="None"></option>
									<?php
							// Create connection
							$conn = new mysqli($servername, $username,	$password,		$dbname);
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " .		$conn->connect_error);
							} 
					
							$sql = "SELECT * FROM odocuments";
				
							$result = $conn->query($sql);
							$conn->close();
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc(	))
								{
						?>
									<option value="<?php echo "{$row['od_id']}" ?>"><?php echo "{$row['od_name']}" ?></option>
						<?php
								}
							}
						?>
									</select>
										</td>
										<td width="23%">
											<select id="selectCondition4" name="selectCondition4" class="form-control">
												<option value="None"></option>
												<option value="<">Less than</option>
												<option value=">">Greater than</option>
												<option value="=">Equal</option>
											</select>
										</td>
										<td width="20%">
											<input type="text" name="txtValue4" id="txtValue4" class="form-control" placeholder="Value"/>
										</td>
									</tr>
								</table>
								
							    </div>
							</div>

	<div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
								
								<table width="100%">
									<tr>
										<td width="50%">
										<select id="selectDocument5" name="selectDocument5" class="form-control">
											<option value="None"></option>
									<?php
							// Create connection
							$conn = new mysqli($servername, $username,	$password,		$dbname);
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " .		$conn->connect_error);
							} 
					
							$sql = "SELECT * FROM odocuments";
				
							$result = $conn->query($sql);
							$conn->close();
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc(	))
								{
						?>
									<option value="<?php echo "{$row['od_id']}" ?>"><?php echo "{$row['od_name']}" ?></option>
						<?php
								}
							}
						?>
									</select>
										</td>
										<td width="23%">
											<select id="selectCondition5" name="selectCondition5" class="form-control">
												<option value="None"></option>
												<option value="<">Less than</option>
												<option value=">">Greater than</option>
												<option value="=">Equal</option>
											</select>
										</td>
										<td width="20%">
											<input type="text" name="txtValue5" id="txtValue5" class="form-control" placeholder="Value"/>
										</td>
									</tr>
								</table>
								
							    </div>
							</div>
	<div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
									
								<table width="100%">
									<tr>
										<td width="50%">
										<select id="selectDocument6" name="selectDocument6" class="form-control">
											<option value="None"></option>
									<?php
							// Create connection
							$conn = new mysqli($servername, $username,	$password,		$dbname);
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " .		$conn->connect_error);
							} 
					
							$sql = "SELECT * FROM odocuments";
				
							$result = $conn->query($sql);
							$conn->close();
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc(	))
								{
						?>
									<option value="<?php echo "{$row['od_id']}" ?>"><?php echo "{$row['od_name']}" ?></option>
						<?php
								}
							}
						?>
									</select>
										</td>
										<td width="23%">
											<select id="selectCondition6" name="selectCondition6" class="form-control">
												<option value="None"></option>
												<option value="<">Less than</option>
												<option value=">">Greater than</option>
												<option value="=">Equal</option>
											</select>
										</td>
										<td width="20%">
											<input type="text" name="txtValue6" id="txtValue6" class="form-control" placeholder="Value" onkeypress="javascript:return isNumberValue(event)"/>
										</td>
									</tr>
								</table>
								
							    </div>
							</div>

	<div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
								
								
								<table width="100%">
									<tr>
										<td width="50%">
										<select id="selectDocument7" name="selectDocument7" class="form-control">
											<option value="None"></option>
									<?php
							// Create connection
							$conn = new mysqli($servername, $username,	$password,		$dbname);
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " .		$conn->connect_error);
							} 
					
							$sql = "SELECT * FROM odocuments";
				
							$result = $conn->query($sql);
							$conn->close();
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc(	))
								{
						?>
									<option value="<?php echo "{$row['od_id']}" ?>"><?php echo "{$row['od_name']}" ?></option>
						<?php
								}
							}
						?>
									</select>
										</td>
										<td width="23%">
											<select id="selectCondition7" name="selectCondition7" class="form-control">
												<option value="None"></option>
												<option value="<">Less than</option>
												<option value=">">Greater than</option>
												<option value="=">Equal</option>
											</select>
										</td>
										<td width="20%">
											<input type="text" name="txtValue7" id="txtValue7" class="form-control" placeholder="Value" onkeypress="javascript:return isNumberValue(event)"/>
										</td>
									</tr>
								</table>
								
							    </div>
							</div>
	<div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
																<table width="100%">
									<tr>
										<td width="50%">
										<select id="selectDocument8" name="selectDocument8" class="form-control">
											<option value="None"></option>
									<?php
							// Create connection
							$conn = new mysqli($servername, $username,	$password,		$dbname);
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " .		$conn->connect_error);
							} 
					
							$sql = "SELECT * FROM odocuments";
				
							$result = $conn->query($sql);
							$conn->close();
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc(	))
								{
						?>
									<option value="<?php echo "{$row['od_id']}" ?>"><?php echo "{$row['od_name']}" ?></option>
						<?php
								}
							}
						?>
									</select>
										</td>
										<td width="23%">
											<select id="selectCondition8" name="selectCondition8" class="form-control">
												<option value="None"></option>
												<option value="<">Less than</option>
												<option value=">">Greater than</option>
												<option value="=">Equal</option>
											</select>
										</td>
										<td width="20%">
											<input type="text" name="txtValue8" id="txtValue8" class="form-control" placeholder="Value" onkeypress="javascript:return isNumberValue(event)"/>
										</td>
									</tr>
								</table>
								
							    </div>
							</div>
	<div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
																
								<table width="100%">
									<tr>
										<td width="50%">
										<select id="selectDocument9" name="selectDocument9" class="form-control">
											<option value="None"></option>
									<?php
							// Create connection
							$conn = new mysqli($servername, $username,	$password,		$dbname);
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " .		$conn->connect_error);
							} 
					
							$sql = "SELECT * FROM odocuments";
				
							$result = $conn->query($sql);
							$conn->close();
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc(	))
								{
						?>
									<option value="<?php echo "{$row['od_id']}" ?>"><?php echo "{$row['od_name']}" ?></option>
						<?php
								}
							}
						?>
									</select>
										</td>
										<td width="23%">
											<select id="selectCondition9" name="selectCondition9" class="form-control">
												<option value="None"></option>
												<option value="<">Less than</option>
												<option value=">">Greater than</option>
												<option value="=">Equal</option>
											</select>
										</td>
										<td width="20%">
											<input type="text" name="txtValue9" id="txtValue9" class="form-control" placeholder="Value" onkeypress="javascript:return isNumberValue(event)"/>
										</td>
									</tr>
								</table>
								
							    </div>
							</div>
	<div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
																
								<table width="100%">
									<tr>
										<td width="50%">
										<select id="selectDocument10" name="selectDocument10" class="form-control">
											<option value="None"></option>
									<?php
							// Create connection
							$conn = new mysqli($servername, $username,	$password,		$dbname);
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " .		$conn->connect_error);
							} 
					
							$sql = "SELECT * FROM odocuments";
				
							$result = $conn->query($sql);
							$conn->close();
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc(	))
								{
						?>
									<option value="<?php echo "{$row['od_id']}" ?>"><?php echo "{$row['od_name']}" ?></option>
						<?php
								}
							}
						?>
									</select>
										</td>
										<td width="23%">
											<select id="selectCondition10" name="selectCondition10" class="form-control">
												<option value="None"></option>
												<option value="<">Less than</option>
												<option value=">">Greater than</option>
												<option value="=">Equal</option>
											</select>
										</td>
										<td width="20%">
											<input type="text" name="txtValue10" id="txtValue10" class="form-control" placeholder="Value" onkeypress="javascript:return isNumberValue(event)"/>
										</td>
									</tr>
								</table>
								
							    </div>
							</div>

						 <div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
								<br>
								<table width=100%>
									<tr>

										<td style="padding:5px">
											
											<button type="submit" name="btnUpload" class="btn btn-primary btn-block">Send</button>
										</td>
										
									</tr>
								</table>
							</div>
							
						</div>
					</div>
				   </form>
                </div>
            </div>
        </div>
    </header>
   
   
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-6">
                        <h3>Location</h3>
                        <p>Sinhgad Academy of Engineering
                            <br>Kondhawa Road, Pune</p>
                    </div>
                    <div class="footer-col col-md-6">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                         
                        </ul>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; E-Governance 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

   

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
<?php

	function send_sms($userID,$userPWD,$recerverNO,$message) {
		if (!function_exists('curl_init')) {
			echo "Error : Curl library not installed";
			return FALSE;
		}
		if (strlen($message) > 140) {
			$message = substr($message, 0, 140);
		}

		$cookie_file_path = "./cookie.txt";
		$temp_file = "./temporary.txt";
		//unlink($temp_file);
		$user_agent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36";

		// LOGIN TO WAY2SMS

		$url =  "http://site24.way2sms.com/content/Login1.action";
		$parameters = array("username"=>"$userID","password"=>"$userPWD","button"=>"Login");

		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, count($parameters));
			curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
			curl_setopt($ch, CURLOPT_HEADER, TRUE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
			curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
			curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file_path);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
			curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
			curl_setopt($ch, CURLOPT_NOBODY, FALSE);
			$result = curl_exec ($ch);
		curl_close ($ch);

		// SAVE LOGOUT URL

		file_put_contents($temp_file,$result);
		$result = "";
		$logout_url = "";
		$file = fopen($temp_file,"r");
		$line = "";
		$cond = TRUE;
		while ($cond == TRUE) {
			$line = fgets($file);
			if ($line === FALSE) { // EOF
				$cond = FALSE;
			} else {
				$pos = strpos( $line, '            window.location = "');
				if ($pos === FALSE ) {
					$line = "";
				} else { // URL FOUND
					$cond = FALSE;
					$logout_url = substr($line,-25);
					$logout_url = substr($logout_url,0,21);
				}
			}
		}
		fclose($file);

		// SAVE SESSION ID

		$file = fopen($cookie_file_path,"r");
		$line = "";
		$cond = TRUE;
		while ($cond == TRUE) {
			$line = fgets($file);
			if ($line === FALSE) { // EOF
				$cond = FALSE;
			} else {
				$pos = strpos( $line, "JSESSIONID");
				if ($pos === FALSE ) {
					$line = "";
				} else { // SESSION ID FOUND
					$cond = FALSE;
					$id = substr($line,$pos+15);
				}
			}
		}
		fclose($file);

		if (!isset($id)) {
			echo "Session Failed";
			unlink($cookie_file_path);
			unlink($temp_file);
			return FALSE;
		}
		if ($logout_url == "") {
			echo "Login Failed";
			unlink($cookie_file_path);
			unlink($temp_file);
			return FALSE;
		}

		// SEND SMS

		$url = "http://site24.way2sms.com/smstoss.action?Token=" . $id; 
		$parameters = array("button"=>"Send SMS","mobile"=>"$recerverNO","message"=>"$message");

		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, count($parameters));
			curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
			curl_setopt($ch, CURLOPT_HEADER, TRUE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
			curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
			curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file_path);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
			curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
			curl_setopt($ch, CURLOPT_NOBODY, FALSE);
			$result = curl_exec ($ch);
		curl_close ($ch);

		file_put_contents($temp_file,$result);
		$result = "";
		$sms_status = "";
		$file = fopen($temp_file,"r");
		$line = "";
		$cond = TRUE;
		while ($cond == TRUE) {
			$line = fgets($file);
			if ($line === FALSE) { // EOF
				$cond = FALSE;
			} else {
				$pos = strpos( $line, '        <p class="mess"><i class="ssms consuki "><em class="ei"></em><strong><b>x</b></strong></i><span class="">');
				if ($pos === FALSE ) {
					$line = "";
				} else { // URL FOUND
					$cond = FALSE;
					$sms_status = substr($line,-53);
					$sms_status = substr($sms_status,0,40);
					if ($sms_status != "Message has been submitted successfully.") {
						echo "Failed to send SMS.";
						unlink($cookie_file_path);
						fclose($file);
						unlink($temp_file);
						return FALSE;
					}
				}
			}
		}
		fclose($file);

		$url = "site24.way2sms.com/" . $logout_url;

		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HEADER, TRUE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
			curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
			curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file_path);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
			curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
			curl_setopt($ch, CURLOPT_NOBODY, FALSE);
			$result = curl_exec ($ch);
		curl_close ($ch);

		file_put_contents($temp_file,$result);
		$result = "";
		$logout_status = FALSE;
		$file = fopen($temp_file,"r");
		$line = "";
		$cond = TRUE;
		while ($cond == TRUE) {
			$line = fgets($file);
			if ($line === FALSE) { // EOF
				$cond = FALSE;
			} else {
				$pos = strpos( $line, '<div class="trap mess">');
				if ($pos === FALSE ) {
					$line = "";
				} else {
					$line = fgets($file);
					if ($line === FALSE) { // EOF
						$cond = FALSE;
					} else {
						$line = fgets($file);
						if ($line === FALSE) { // EOF
							$cond = FALSE;
						} else {
							$cond = FALSE;
							$logout_status_string = substr($line,24,39);
							if ($logout_status_string == "You have successfully <b>logged out</b>") {
								$logout_status = TRUE;
							}
						}
					}
				}
			}
		}
		fclose($file);

		// DELETE TEMP FILES

		unlink($cookie_file_path);
		unlink($temp_file);

		if ($logout_status) {
			echo "Success";
			return TRUE;
		} else {
			echo "Failure";
			return FALSE;
		}
	}
	
?>