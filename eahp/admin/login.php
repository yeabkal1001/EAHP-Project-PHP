<?php
/**
 * Emergency Ambulance Hiring Portal - Admin Login
 * 
 * @author Yeabsira Kayel
 * @email yeabsira.kayel@bitscollege.edu.et
 * @github https://github.com/yeabkal1001/EAHP-Project-PHP
 * @version 2.0
 * @date June 2025
 */

session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['eahpaid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    echo "<script>alert('Invalid Details.');</script>";
    }
  }
  ?>
<!DOCTYPE html>
<head>
<title>EAHP| Login Page</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2 style="color:white">Admin | Sign In Now</h2>
		<form action="#" method="post" name="login">
			
			<input type="text" class="ggg" name="username" placeholder="User Name" required="true">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="true">
			
			<a href="forgot-password.php">Forgot Password?</a>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		<p class="mb-1">
   
     <i class="fa fa-home" aria-hidden="true" style="color:#000;"><a href="../index.php" style="color:#000;">Home Page</a></i>
      </p>
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
