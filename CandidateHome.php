<?php
	session_start();
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

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

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
                        <a href="#profile">Hi... <?php echo "{$_SESSION['c_fullname']}" ?></a>
                    </li>
					<li class="page-scroll">
                        <a href="managedocuments.php">Manage Documents</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php">Logout</a>
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
                    <div class="panel panel-default" style="height:350px;
  overflow-y:scroll;">
						<div class="panel-heading">
							<a href="#" class="pull-right">View all</a> <h4>Notifications</h4></div>
				   			<div class="panel-body" align="left">
							<table width="100%" >
							
							<?php
								
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "project";
	
								// Create connection
								$conn = new mysqli($servername, $username, $password,		$dbname);
								// Check connection
								if ($conn->connect_error) {
								    die("Connection failed: " . $conn->connect_error);
								} 
					
								//$sql = "SELECT * FROM notifications WHERE n_id IN (SELECT n_id FROM notifications_al WHERE n_candidateid='{$_SESSION['c_id']}')";
								$sql = "SELECT * FROM notifications";
								
								$result = $conn->query($sql);
								if($result->num_rows>0)
								{
									while($row=$result->fetch_assoc())
									{
										echo "
										<tr>
							<font style=\"color:black;\">
										<td width=\"90%\">
							
										<font style=\"color:#18BC9C\">{$row['n_date']}</font><br><font style=\"color:black\"><b>{$row['n_title']}</b><br>{$row['n_emailtext']}</font><br><a href=\"{$row['n_pdflink']}\">More Details</a><hr>
										</font>
										</td>
										<td width=\"5%\" align=\"center\">
											";
											$sql = "SELECT * FROM notifications_al WHERE n_id={$row['n_id']} and n_candidateid={$_SESSION['c_id']}";
								
											$result2 = $conn->query($sql);
											if($result2->num_rows>0)
											{
											?>
											<span style="background-color:green; border-radius: 25px;">&nbsp&nbsp&nbsp&nbsp</span>
											
											<?php
											}
												echo "
										</td>
										</tr>
										";
									}
								}
								$conn->close();
							?>
							
							
							
							</table>
							</div>
						</div>
                </div>
				
            </div>
        </div>
    </header>

	<section id="profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>My Profile</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <table width="100%">
						<tr>
							<td width="20%">
								<h4>My Profile</h4> 
								<hr>
							</td>
							<td width="80%">
								<h4>: <?php echo "{$_SESSION['c_fullname']}" ?></h4>
								<hr>
							</td>
						</tr>
						<tr>
							<td width="20%">
								<h4>AGE</h4> 
								<hr>
							</td>
							<td width="80%">
								<h4>: <?php echo "{$_SESSION['c_age']}" ?></h4>
								<hr>
							</td>
						</tr>
						<tr>
							<td width="20%">
								<h4>Aadhar No.</h4> 
								<hr>
							</td>
							<td width="80%">
								<h4>: <?php echo "{$_SESSION['c_aadhar']}" ?></h4>
								<hr>
							</td>
						</tr>
						<tr>
							<td width="20%">
								<h4>Gender</h4> 
								<hr>
							</td>
							<td width="80%">
								<h4>: 
								<?php  
									if ($_SESSION['c_gender']=="M")
										echo "Male";
									else
										echo "Female";
								?>
								</h4>
								<hr>
							</td>
						</tr>
						<tr>
							<td width="20%">
								<h4>DOB</h4> 
								<hr>
							</td>
							<td width="80%">
								<h4>: <?php echo "{$_SESSION['c_dob']}" ?></h4>
								<hr>
							</td>
						</tr>
						<tr>
							<td width="20%">
								<h4>Mobile No</h4> 
								<hr>
							</td>
							<td width="80%">
								<h4>: <?php echo "{$_SESSION['c_mobile']}" ?></h4>
								<hr>
							</td>
						</tr>
						<tr>
							<td width="20%">
								<h4>Email Id</h4> 
								<hr>
							</td>
							<td width="80%">
								<h4>: <?php echo "{$_SESSION['c_email']}" ?></h4>
								<hr>
							</td>
						</tr>
						<tr>
							<td width="20%">
								<h4>Area & Pincode</h4> 
								<hr>
							</td>
							<td width="80%">
								<h4>: <?php echo "{$_SESSION['a_area']}, {$_SESSION['p_area']}-{$_SESSION['p_pincode']}" ?></h4>
								<hr>
							</td>
						</tr>
						<tr>
							<td width="20%">
								<h4>Category</h4> 
								<hr>
							</td>
							<td width="80%">
								<h4>: <?php echo "{$_SESSION['c_category']}" ?></h4>
								<hr>
							</td>
						</tr>
						</table>
                </div>
            </div>
        </div>
    </section>

   
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
