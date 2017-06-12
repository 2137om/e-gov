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

    <title>Project Name</title>

	<script>
		function validateForm() 
		{
			var x = document.forms["myForm"]["txtAadhar"].value;
			var flag = true;
			if (x == null || x.length != 12) 
			{
				document.getElementById("txtAadhar").style= "border:2px solid; color:red;";
				flag = false;
		    }
			else
			{
				document.getElementById("txtAadhar").style= "";
			}

			
			return flag;
		}

		function isNumberAadhar(evt)
		{
			var iKeyCode = (evt.which) ? evt.which : evt.keycode;
			var x = document.forms["myForm"]["txtAadhar"].value;
			
			if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57 || x.length > 11))
				return false;
			return true;
		}
	</script>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
	#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)}
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
	</style>
    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <script src="js/jquery.imagebox.js"></script>
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
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom" style="background-color:#2C3E50;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"  style="color:white;">E-Governance</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li class="page-scroll">
                        <a href="#" style="color:white;">Hi... <?php echo "{$_SESSION['type']}" ?></a>
                    </li>
					
                    <li class="page-scroll" >
                        <a href="govtlogin.php"  style="color:white;">Logout</a>
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
					<div class="row">
            	
				 <form method="GET"  name="myForm" onsubmit="return validateForm()">
                    <div class="form-group">
						<div class="col-sm-5 col-sm-offset-4">
							<input type="text" name="txtAadhar" id="txtAadhar" class="form-control" placeholder="Unique Identification"  onkeypress="javascript:return isNumberAadhar(event)"/>
						</div>
						<div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
								<br>
								<table width=100%>
									<tr>
										<td style="padding:5px">
											<button type="submit" name="btnSearch" class="btn btn-primary btn-block">Search</button>
										</td>
										
									</tr>
								</table>
							</div>
							
						</div>
					</div>
					</form>
					</div>

					<div class="row">
						<br>
						<br>
						<br>
						<?php
							if (isset($_GET['txtAadhar']))
							{
								// Display Profile
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
				
								$sql = "SELECT c.c_id, c.c_fullname, c.c_profile, c.c_mobile, c.c_email, p.p_area, p.p_pincode, cc.c_category, c.c_dob, c.c_aadhar, c.c_gender, a.a_area FROM candidates as c, categories as cc, areas as a, pincodes as p
								WHERE c.c_categoryid=cc.c_id and c.c_areaid=a.a_id and c.c_pincode=p.p_pincode and c.c_aadhar='{$_GET['txtAadhar']}'";
			
								$result = $conn->query($sql);
								if($result->num_rows>0)
								{
									$row=$result->fetch_assoc();
						?>
									<table width="100%">
									<tr>
									<td width="80%" align="left">
									<h2>Candidate Profile</h2>
									</td>
									<td width="20%" align="right">
									<img src="<?php echo "{$row['c_profile']}" ?>" width=150px/>
									</td>
									</tr>
									</table>
									<span style="left">
									<table width="100%">
										<tr>
											<td width="30%" style="text-align:left;">
												<h4>Name</h4> 
												<hr>
											</td>
											<td width="80%" style="text-align:left;">
												<h4 >: <?php echo "{$row['c_fullname']}" ?></h4>
												<hr>
											</td>
										</tr>
										<tr>
											<td width="20%" style="text-align:left;">
												<h4>Aadhar No.</h4> 
												<hr>
											</td>
											<td width="80%" style="text-align:left;">
												<h4>: <?php echo "{$row['c_aadhar']}" ?></h4>
												<hr>
											</td>
										</tr>
										<tr>
											<td width="20%" style="text-align:left;">
												<h4>Gender</h4> 
												<hr>
											</td>
											<td width="80%" style="text-align:left;">
												<h4>: 
												<?php  
													if ($row['c_aadhar']="M")
														echo "Male";
													else
														echo "Female";
												?>
												</h4>
												<hr>
											</td>
										</tr>
										<tr>
											<td width="20%" style="text-align:left;">
												<h4>DOB</h4> 
												<hr>
											</td>
											<td width="80%" style="text-align:left;">
												<h4>: <?php echo "{$row['c_dob']}" ?></h4>
												<hr>
											</td>
										</tr>
										<tr>
											<td width="20%" style="text-align:left;">
												<h4>Mobile No</h4> 
												<hr>
											</td>
											<td width="80%" style="text-align:left;">
												<h4>: <?php echo "{$row['c_mobile']}" ?></h4>
												<hr>
											</td>
										</tr>
										<tr>
											<td width="20%" style="text-align:left;">
												<h4>Email Id</h4> 
												<hr>
											</td>
											<td width="80%" style="text-align:left;">
												<h4>: <?php echo "{$row['c_email']}" ?></h4>
												<hr>
											</td>
										</tr>
										<tr>
											<td width="20%">
												<h4>Area & Pincode</h4> 
												<hr>
											</td>
											<td width="80%" style="text-align:left;">
												<h4>: <?php echo "{$row['a_area']}, {$row['p_area']}-{$row['p_pincode']}" ?></h4>
												<hr>
											</td>
										</tr>
										<tr>
											<td width="20%" style="text-align:left;">
												<h4>Category</h4> 
												<hr>
											</td>
											<td width="80%" style="text-align:left;">
												<h4>: <?php echo "{$row['c_category']}" ?></h4>
												<hr>
											</td>
										</tr>
									</table>
									</span>
						<?php	
								}
							}
						?> 
					</div>
				</div>
				<div class="col-lg-6">
                   <?php
						if (isset($_GET['btnSearch']))
						{
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "project";
						$conn = new mysqli($servername, $username, $password,		$dbname);
								
						$sql = "SELECT d.d_did, d.d_id, od.od_name, d.d_field1, d.d_path FROM documents as d , odocuments as od , candidates as c
WHERE d.`d_id`=od.od_id and d.d_candidateid=c.c_id and d.d_verified=0 and  c.c_aadhar='{$_GET['txtAadhar']}'";
									
						$result = $conn->query($sql);
						if($result->num_rows>0)
						{
							while($row=$result->fetch_assoc())
							{
								?>
								<table width=100%>
									<tr>
										<td width="20%">
											<?php echo "{$row['od_name']}" ?>
											<br>
		

										</td>
										<td width="20%">
											<?php echo "{$row['d_field1']}" ?>
										</td>
										<td width="60%">
											<img src="<?php echo "{$row['d_path']}" ?>" width="100%"  class="img img-test" onclick="hello()" />
										</td>

									</tr>
								</table>		
								<?php
							}
						}
						$conn->close();
						}
					?>
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
