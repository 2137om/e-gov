<?php
	session_start();
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

	if(isset($_POST['btnUpload']))
	{
		// Upload file to system
		$errors= array();
		$file_name = $_FILES['image']['name'];
		$file_size =$_FILES['image']['size'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];
		$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
		$expensions= array("jpeg","jpg","png");
      
		if(in_array($file_ext,$expensions)=== false){
		  $errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}
      
		if($file_size > 2097152){
		     $errors[]='File size must be excately 2 MB';
		}
		$file_name = "{$_SESSION['c_id']}_{$_POST['selectDocument']}.{$file_ext}";
		if(empty($errors)==true){
			move_uploaded_file($file_tmp,"images/".$file_name);
			 echo "Success";
		}
		else{
			 print_r($errors);
		}


		$sql= "INSERT INTO  documents(d_id, d_field1, d_candidateid, d_path) values ('{$_POST['selectDocument']}','{$_POST['txtField1']}','{$_SESSION['c_id']}','images/{$file_name}');";

		if($conn->query($sql)===FALSE)
		{			
			echo "<br><br><br>Error: ". $conn->error;
			echo "{$sql}";
			header("location:uploaddocuments.php?upload=fail");
		}
		else
			header("location:uploaddocuments.php?upload=success");
			exit();	
	}
	$conn->close();
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
                <a class="navbar-brand" href="#page-top">Project Name</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li class="page-scroll">
                        <a href="#">Hi... <?php echo "{$_SESSION['c_name']}" ?></a>
                    </li>
					<li class="page-scroll">
                        <a href="candidatehome.php">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Logout</a>
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
				  <form action="" method="POST" enctype="multipart/form-data">
                    <div class="intro-text">
						<span class="skills"> Upload Document</span>
                        <hr class="star-light">
						 <div class="form-group">
							 <div class="col-sm-5 col-sm-offset-4">
                        <select id="selectDocument" name="selectDocument" class="form-control">
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
						</div>
						 </div>
						 <div class="form-group">
							 <div class="col-sm-5 col-sm-offset-4">
								<input type="text" name="txtField1" id="txtField1" class="form-control" placeholder="Field1"/>
							</div>
						 </div>
					     <div class="form-group">
							 <div class="col-sm-5 col-sm-offset-4">
								 <input id="file-0a" class="file" type="file" multiple data-min-file-count="1" name="image">
							</div>
						 </div>
						 <div class="form-group">
							<div class="col-sm-5 col-sm-offset-4">
								<br>
								<table width=100%>
									<tr>
										<td style="padding:5px">
											<button type="submit" name="btnUpload" class="btn btn-primary btn-block">Upload</button>
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
                        <p>Sinhgad Innstitutes
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
