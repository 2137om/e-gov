<?php
	$login_status = "success";
	if(isset($_GET['btnLogin']))
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "project";
		
		// Create connection
		$conn = new mysqli($servername, $username,	$password,		$dbname);
		// Check connection
		if ($conn->connect_error) 
		{
			die("Connection failed: " .		$conn->connect_error);
		} 
				
		$sql = "SELECT * FROM govt1 where g_userid='{$_GET['txtId']}' and g_password='{$_GET['txtPassword']}' and g_type='{$_GET['selectType']}'";
		
			
		$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			$row=$result->fetch_assoc();
			session_start();

			if ($_GET['selectType'] == "Passport Officer")
			{
				$_SESSION["type"] = "Passport Officer";
				header("location:passporthome.php");
			}
			
			else if ($_GET['selectType'] == "Driving Officer")
			{
				$_SESSION["type"] = "Driving Officer";
				header("location:drivinghome.php");
			}
			else if ($_GET['selectType'] == "Local Officer")
			{
				$_SESSION["type"] = "Local Officer";
				header("location:localhome.php");
			}
			else if ($_GET['selectType'] == "Government Officer")
			{
				$_SESSION["type"] = "Government Officer";
				header("location:govthome.php");
			}
			else if ($_GET['selectType'] == "Administrator")
			{
				$_SESSION["type"] = "Administrator";
				header("location:adminhome.php");
			}
			

		}
		else
			$login_status = "fail";
		//echo "{$sql}";
		//exit();

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
			var x = document.forms["myForm"]["txtId"].value;
			var flag = true;
			if (x == null || x == "") 
			{
				document.getElementById("txtId").style= "border:2px solid; color:red;";
				flag = false;
		    }
			else
			{
				document.getElementById("txtId").style= "";
			}

			x = document.forms["myForm"]["txtPassword"].value;
			if (x == null || x == "") 
			{
				document.getElementById("txtPassword").style= "border:2px solid; color:red;";
				flag = false;
		    }
			else
			{
				document.getElementById("txtPassword").style= "";
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
                <a class="navbar-brand" href="index.php">E-Governance</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li class="page-scroll" style="background:#18BC9C;">
                        <a href="govtlogin.php">Govt. Login</a>
                    </li>
					<li class="page-scroll">
                        <a href="agentlogin.php">Agent Login</a>
                    </li>
					<li class="page-scroll">
                        <a href="candidatelogin.php">Candidate Login</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
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
                    <form name="myForm" method="GET" onsubmit="return validateForm()">
							<div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
								<select required id="selectType" name="selectType" class="form-control">
									<option value="Passport Officer">Passport Officer	</option>
									<option value="Driving Officer">Driving Officer</option>
									<option value="Local Officer">Local Officer	</option>
									<option value="Administrator">Administrator</option>
									<option value="Government Officer">Government Officer</option>
									
									</select>
							    </div>
							</div>

							
						 <div class="form-group">
							 <div class="col-sm-5 col-sm-offset-4">
								<input type="text" name="txtId" id="txtId" class="form-control" placeholder="User ID"/>		
							</div>
						 </div>
						 <div class="form-group">
							 <div class="col-sm-5 col-sm-offset-4">
								<input type="password" name="txtPassword" id="txtPassword" class="form-control" placeholder="Password"/>		
							</div>
						 </div>
  						 <div class="form-group">
							 <div class="col-sm-5 col-sm-offset-4">
								<?php
									if ($login_status == "fail")
										echo "<span style=\"color:red;\">Incorrect User ID or Password</span>";
								?>
							</div>
						</div>
						 <div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
								<br>
								<table width=100%>
									<tr>
										<td style="padding:5px">
											<button type="submit" name="btnLogin" class="btn btn-primary btn-block">Login</button>
										</td>
										
									</tr>
								</table>
							</div>
							
						</div>
						<div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
								<br>
								<br>
							</div>
							
						</div>
					</form>
                </div>
            </div>
        </div>
    </header>


    

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>We gather the various Government, Non-Government and orgnizations schemes for people, filter peoples according to their criteria to take the advantage of scheme and notify those people using SMS and Email very soon with details of applying to that scheme. So that the maximum number of people can take the advantage og scheme.</p>
                </div>
                <div class="col-lg-4">
                    <p>You must registered with our system in order to take the advantage of notifications of various schemes. By filling a form,  uploading your all documents and get verified by the registered Agent in you area. Now our system can notify you if you are eligible for any scheme.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="steps.php" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Steps
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
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
