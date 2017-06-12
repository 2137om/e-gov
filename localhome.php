<?php
	include('way2sms-api.php');
	require 'phpmailer/PHPMailerAutoload.php';
		
		$arr_pincodes = array();
		$arr_count = array();
		$count = 0;

		$oldcen1 = 1;
		$oldcen2 = 1;
		$oldcen3 = 1;

		$cen1 = 1;
		$cen2 = 3;
		$cen3 = 5;

		$arr_c1_pincodes = array();
		$arr_c2_pincodes = array();
		$arr_c3_pincodes = array();

		$arr_c1_count = array();
		$arr_c2_count = array();
		$arr_c3_count = array();

		$count1 = 0;
		$count2 = 0;
		$count3 = 0;


	session_start();

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
	// Create connection
	$conn = new mysqli($servername, $username, $password,		$dbname);
	$conn1 = new mysqli($servername, $username, $password,		$dbname);
	
	// Check connection

	//  Testing start
	
	
	//  Testing end

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$newid = 120;
	if(isset($_POST['btnUpload']))
	{

	$filter = "  ";
		//echo "sdf : {$_POST['selectDocument1']}";
		//echo "sdf : {$_POST['selectCondition1']}";

		$filter = "SELECT d_candidateid FROM documents";
		
		if ($_POST['selectDocument10'] != "None")
		{
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
			}
		}

		if ($_POST['selectDocument9'] != "None")
		{
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
			}
		}

		if ($_POST['selectDocument8'] != "None")
		{
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
			}
		}

		if ($_POST['selectDocument7'] != "None")
		{
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
			}
		}

		if ($_POST['selectDocument6'] != "None")
		{
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
			}
		}


		if ($_POST['selectDocument5'] != "None")
		{
			// Document1 in eligiblity criteria
			// Document selected, but now cheching condition mentioned or not	for that document
			if ($_POST['selectCondition5'] == "None")
			{
				// Document1 without condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument5']} AND d_candidateid IN ($filter))";
			}
			else
			{
				// Document1 with condition
				//$filter = "SELECT d_candidateid FROM documents WHERE 

				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument5']} AND d_field1 {$_POST['selectCondition5']} {$_POST['txtValue5']} AND d_candidateid IN ($filter))";
			}
		}

		if ($_POST['selectDocument4'] != "None")
		{
			// Document1 in eligiblity criteria
			// Document selected, but now cheching condition mentioned or not	for that document
			if ($_POST['selectCondition4'] == "None")
			{
				// Document1 without condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument4']} AND d_candidateid IN ($filter))";
			}
			else
			{
				// Document1 with condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument4']} AND d_field1 {$_POST['selectCondition4']} {$_POST['txtValue4']} AND d_candidateid IN ($filter))";
			}
		}

		if ($_POST['selectDocument3'] != "None")
		{
			// Document1 in eligiblity criteria
			// Document selected, but now cheching condition mentioned or not	for that document
			if ($_POST['selectCondition3'] == "None")
			{
				// Document1 without condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument3']} AND d_candidateid IN ($filter))";
			}
			else
			{
				// Document1 with condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument3']} AND d_field1 {$_POST['selectCondition3']} {$_POST['txtValue3']} AND d_candidateid IN ($filter))";
			}
		}

		if ($_POST['selectDocument2'] != "None")
		{
			// Document1 in eligiblity criteria
			// Document selected, but now cheching condition mentioned or not	for that document
			if ($_POST['selectCondition2'] == "None")
			{
				// Document1 without condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument2']} AND d_candidateid IN ($filter))";
			}
			else
			{
				// Document1 with condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument2']} AND d_field1 {$_POST['selectCondition2']} {$_POST['txtValue2']} AND d_candidateid IN ($filter))";
			}
		}
		if ($_POST['selectDocument1'] != "None")
		{
			// Document1 in eligiblity criteria
			// Document selected, but now cheching condition mentioned or not	for that document
			if ($_POST['selectCondition1'] == "None")
			{
				// Document1 without condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument1']} AND d_candidateid IN ($filter))";
			}
			else
			{
				// Document1 with condition
				$filter = "SELECT d_candidateid FROM documents WHERE (d_id={$_POST['selectDocument1']} AND d_field1 {$_POST['selectCondition1']} {$_POST['txtValue1']} AND d_candidateid IN ($filter))";
			}
		}

		
		$sql = "SELECT a.a_area, count(c.c_id) as count1 FROM candidates as c , areas as a WHERE c.c_areaid=a.a_id and c.c_id IN ({$filter}) and  c_pincode={$_POST['txtPincode']} 
GROUP BY c_areaid";
				
		//echo "{$sql}";
		//exit();
		$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				$arr_pincodes[$count] = $row['a_area'];
				$arr_count[$count] = $row['count1'];
				//echo "<br> {$arr_pincodes[$count]} : $arr_count[$count]";
				$count = $count + 1;
			}
		}

//		exit();
		while(true)
		{
			$i = 0;
			$count1 = 0;
			$count2 = 0;
			$count3 = 0;

			$arr_c1_count = array();
			$arr_c2_count = array();
			$arr_c3_count = array();

			while($i<$count)
			{
				if (abs($cen1-$arr_count[$i])<abs($cen2-$arr_count[$i]))
				{
					if (abs($cen1-$arr_count[$i])<abs($cen3-$arr_count[$i]))
					{
						// cluster 1 is nearest
						$arr_c1_pincodes[$count1] = $arr_pincodes[$i];
						$arr_c1_count[$count1] = $arr_count[$i];
						$count1 = $count1 + 1;
					}
				}
				else
				{
					if (abs($cen2-$arr_count[$i])<abs($cen3-$arr_count[$i]))
					{
						// cluster 2 is nearest
						$arr_c2_pincodes[$count2] = $arr_pincodes[$i];
						$arr_c2_count[$count2] = $arr_count[$i];
						$count2 = $count2 + 1;
					}
					else
					{
						// cluster 3 is nearest
						$arr_c3_pincodes[$count3] = $arr_pincodes[$i];
						$arr_c3_count[$count3] = $arr_count[$i];
						$count3 = $count3 + 1;
					}
				}
				$i = $i + 1;
			}

			/*
			$i = 0;
			echo "<br>Cluster 1 : ";
			while($i<$count1)
			{
				echo "<br>{$arr_c1_pincodes[$i]} : {$arr_c1_count[$i]}";
				$i = $i + 1;
			}

			$i = 0;
			echo "<br>Cluster 2 : ";
			while($i<$count2)
			{
				echo "<br>{$arr_c2_pincodes[$i]} : {$arr_c2_count[$i]}";
				$i = $i + 1;
			}

			$i = 0;
			echo "<br>Cluster 3 : ";
			while($i<$count3)
			{
				echo "<br>{$arr_c3_pincodes[$i]} : {$arr_c3_count[$i]}";
				$i = $i + 1;
			}
			*/

			//backup old cen
			$oldcen1 = $cen1;
			$oldcen2 = $cen2;
			$oldcen3 = $cen3;

			// Cen recalculation
			if (count($arr_c1_pincodes)!=0)
				$cen1 = array_sum($arr_c1_count)/$count1;
			
			if (count($arr_c2_pincodes)!=0)
				$cen2 = array_sum($arr_c2_count)/$count2;
			
			if (count($arr_c3_pincodes)!=0)
				$cen3 = array_sum($arr_c3_count)/$count3;

		//	echo "Cen : {$cen1}, {$cen2}, {$cen3}";

			if (($oldcen1==$cen1) && ($oldcen2==$cen2) && ($oldcen3==$cen3))
				break;
		}
		
			
	}

	echo "<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['High Response Areas',     {$count3}],
          ['Medium Response Area',      {$count2}],
          ['Low Response Area',  {$count1}]
         
        ]);

        var options = {
          title: 'Area-wise responses',
		   backgroundColor: '#18BC9C',
		   width:600,
		   height:400
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>";
	
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
			var x = document.forms["myForm"]["txtPincode"].value;
			var flag = true;
			if (x == null || x.length != 6) 
			{
				document.getElementById("txtPincode").style= "border:2px solid; color:red;";
				flag = false;
		    }
			else
			{
				document.getElementById("txtPincode").style= "";
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

			x = document.forms["myForm"]["selectOutputForm"].value;
			if (x == null || x == "None") 
			{
				document.getElementById("selectOutputForm").style= "border:2px solid; color:red;";
				flag = false;
		    }
			else
			{
				document.getElementById("selectOutputForm").style= "";
			}

		
			return flag;
		}

		function isNumberPin(evt)
		{
			var iKeyCode = (evt.which) ? evt.which : evt.keycode;
			var x = document.forms["myForm"]["txtPincode"].value;
			
			if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57 || x.length > 5))
				return false;
			return true;
		}

		function isNumberValue(evt)
		{
			var iKeyCode = (evt.which) ? evt.which : evt.keycode;
			
			if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57 ))
				return false;
			return true;
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
                <a class="navbar-brand" href="#page-top">E-GOVERNANACE</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li class="page-scroll">
                        <a href="#about">Hi... Local Officer.</a>
                    </li>
                    <li class="page-scroll">
                        <a href="govtlogin.php">Logout</a>
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
                <div class="col-lg-6">
				  <form name="myForm" action="" method="POST" enctype="multipart/form-data"  onsubmit="return validateForm()">
				  
					
				   <div class="intro-text">
						<span class="skills">Analysis</span>
                        <hr class="star-light">
					    <div class="form-group">
							 <div class="col-sm-10">
								<br>
							</div>
						</div>
						  <div class="form-group">
						<div class="col-sm-3 col-sm-offset-4">
							<input type="text" name="txtPincode" id="txtPincode" class="form-control" placeholder="pincode" onkeypress="javascript:return isNumberPin(event)"
							<?php 
								if (isset($_POST['txtPincode']))
								{
									echo "value=\"{$_POST['txtPincode']}\"";
								}
							?>
									/>
							<br>
						</div>
						
					</div>
						<div class="form-group">
							 <div class="col-sm-10">
								
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
											<input type="text" name="txtValue1" id="txtValue1" class="form-control" placeholder="Value" onkeypress="javascript:return isNumberValue(event)"/>
										</td>
									</tr>
								</table>
								
							    </div>
							</div>

	<div class="form-group">
							 <div class="col-sm-10">
								
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
											<input type="text" name="txtValue2" id="txtValue2" class="form-control" placeholder="Value" onkeypress="javascript:return isNumberValue(event)"/>
										</td>
									</tr>
								</table>
								
							    </div>
							</div>

	<div class="form-group">
							 <div class="col-sm-10">
								
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
											<input type="text" name="txtValue3" id="txtValue3" class="form-control" placeholder="Value" onkeypress="javascript:return isNumberValue(event)"/>
										</td>
									</tr>
								</table>
								
							    </div>
							</div>

	<div class="form-group">
							 <div class="col-sm-10">
								
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
											<input type="text" name="txtValue4" id="txtValue4" class="form-control" placeholder="Value" onkeypress="javascript:return isNumberValue(event)"/>
										</td>
									</tr>
								</table>
								
							    </div>
							</div>

	<div class="form-group">
							 <div class="col-sm-10">
								
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
											<input type="text" name="txtValue5" id="txtValue5" class="form-control" placeholder="Value" onkeypress="javascript:return isNumberValue(event)"/>
										</td>
									</tr>
								</table>
								
							    </div>
							</div>
	<div class="form-group">

							<div class="col-sm-10">
								
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

							<div class="col-sm-10">
								
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

							<div class="col-sm-10">
								
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

							<div class="col-sm-10">
								
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

							<div class="col-sm-10">
								
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
							<div class="col-sm-10">
								<br>
								Output Format :-
								<select id="selectOutputForm" name="selectOutputForm" class="form-control">
									<option value="None"></option>
									<option value="Table">Table</option>
									<option value="Pie Chart">Pie Chart</option>
								</select>
						    </div>
						</div>
						 <div class="form-group">
							 <div class="col-sm-10">	
								<br>
								<table width=100%>
									<tr>

										<td style="padding:5px">
											
											<button type="submit" name="btnUpload" class="btn btn-primary btn-block">View</button>
										</td>
										
									</tr>
								</table>
							</div>
							
						</div>
					</div>
			
					
				    </form>
                </div>
				<div class="col-lg-6">
					<?php
						if (isset($_POST['selectOutputForm']))
						{
						if ($_POST['selectOutputForm'] == "Pie Chart")
						{
					?>
					<div class="row" align="center">
						<div id="piechart">
							<h4 style="color:red;">You must have an active Internet Connection in order to view the pie chart</h4>
						</div>
					</div>
					<?php
						}
						}
						if (isset($_POST['selectOutputForm']))
						{
						if ($_POST['selectOutputForm'] == "Table")
						{
					?>
					<div class="intro-text">
						<div id="analysis">
							<h2>High Response Areas</h2>
							<div class="CSSTableGenerator" >
							<table>
								<tr>
									<td width=60px>
										Sr
									</td>
									<td width=355px>
										Area
									</td>
									<td width=100px align="right">
										Responses
									</td>
								</tr>
								<?php
								$i=0;
								while($i<$count3)
								{
									$j = $i + 1;
									
									$sql = "SELECT p_area from pincodes WHERE p_pincode=\"{$arr_c3_pincodes[$i]}\";";
									$result = $conn1->query($sql);
									
									$row=$result->fetch_assoc();
							
									echo "
									<tr>
										<td style=\"text-align:center;\">{$j}</td>
										<td>{$arr_c3_pincodes[$i]}</td>
										<td style=\"text-align:center;\"><b>{$arr_c3_count[$i]}</b></td>
									</tr>
										";
									$i = $i + 1;
								}
								?>
							</table>
							<br>
							<br>
						</div>
						<div id="analysis">
							<h2>Medium Response Areas</h2>
							<div class="CSSTableGenerator" >
							<table>
								<tr>
									<td width=60px>
										Sr
									</td>
									<td width=355px>
										Area
									</td>
									<td width=100px align="right">
										Responses
									</td>
								<?php
								$i=0;
								while($i<$count2)
								{
									$j = $i + 1;
						
									$sql = "SELECT p_area from pincodes WHERE p_pincode=\"{$arr_c2_pincodes[$i]}\";";
									$result = $conn1->query($sql);
									
									$row=$result->fetch_assoc();
							
									echo "
									<tr>
										<td style=\"text-align:center;\">{$j}</td>
										<td>{$arr_c2_pincodes[$i]}</td>
										<td style=\"text-align:center;\"><b>{$arr_c2_count[$i]}</b></td>
									</tr>
										";
									$i = $i + 1;
								}
								?>
							</table>
							<br>
							<br>
						</div>
						<div id="analysis">
							<h2>Low Response Area</h2>
							<div class="CSSTableGenerator" >
							<table>
								<tr>
									<td width=60px>
										Sr
									</td>
									<td width=355px>
										Area
									</td>
									<td width=100px align="right">
										Responses
									</td>
								</tr>
								<?php
								$i=0;
								while($i<$count1)
								{
									$j = $i + 1;
						
									$sql = "SELECT p_area from pincodes WHERE p_pincode=\"{$arr_c1_pincodes[$i]}\";";
									$result = $conn1->query($sql);
									
									$row=$result->fetch_assoc();
							
									echo "
									<tr>
										<td style=\"text-align:center;\">{$j}</td>
										<td>{$arr_c1_pincodes[$i]}</td>
										<td style=\"text-align:center;\"><b>{$arr_c1_count[$i]}</b></td>
									</tr>
										";
									$i = $i + 1;
								}
								?>
							</table>
							<br>
							<br>
						</div>
					 </div>
					<?php
						}
						}
					?>
					</div>
					</div>
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