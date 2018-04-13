<?php
ob_start();
@session_start();
include 'db.php';
if ($_SESSION['SESS_MEMBER_ID']) {
	header("location: post.php");
}
if(isset($_POST['submit'])){
    $un=$_POST['email'];
    $pass=$_POST['pass'];
  $query = "SELECT * FROM `user` WHERE email='$un'";
$data=mysqli_query($con,$query);

$raww=mysqli_fetch_array($data);
$password=sha1($raww['password']);
if($password==$pass){
$_SESSION['SESS_MEMBER_ID'] = $raww['id'];
header("location: home.php");  
}
else
{
echo "Username or Password wrong!!";
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title>Foodadvisor</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- styles needed for carousel slider -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- bxSlider CSS file -->
    <link href="css/jquery.bxslider.css" rel="stylesheet"/>

    <script src="assets/js/pace.min.js"></script>



</head>
<body>
<div id="wrapper">

        <div class="header">
    	<nav class="navbar  fixed-top navbar-site navbar-light bg-light navbar-expand-md"
    		 role="navigation">
    		<div class="container">

            <div class="navbar-identity">


    			<a href="index.html" class="navbar-brand logo logo-title">
    			<span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo "></i>
    			</span>Food<span>advisor</span> </a>


    			<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggler pull-right"
    					type="button">

    				<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg>


    			</button>



    		

            </div>



    			<div class="navbar-collapse collapse">
    			
    				<ul class="nav navbar-nav ml-auto navbar-right">
    				
    					
    					<li class="postadd nav-item"><a class="btn btn-block   btn-border btn-post btn-danger nav-link" href="post.php">Post Free Add</a>
    					</li>
    					
    				</ul>
    			</div>
    			<!--/.nav-collapse -->
    		</div>
    		<!-- /.container-fluid -->
    	</nav>
    </div>
    <!-- /.header -->
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 login-box">
                    <div class="card card-default">
                        <div class="panel-intro text-center">
                            <h2 class="logo-title">
                                <!-- Original Logo will be placed here  -->
                                <span class="logo-icon"><i
                                        class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span>Foodadvisor</span>
                            </h2>
                        </div>
                        <div class="card-body">
                            <form role="form" action="" method="POST">
                                <div class="form-group">
                                    <label for="sender-email" class="control-label">Login email:</label>

                                    <div class="input-icon"><i class="icon-user fa"></i>
                                        <input name="email" id="sender-email" type="text" placeholder="Email"
                                               class="form-control email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user-pass" class="control-label">Password:</label>

                                    <div class="input-icon"><i class="icon-lock fa"></i>
                                        <input name="pass" type="password" class="form-control" placeholder="Password"
                                               id="user-pass">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="login" class="btn btn-primary  btn-block">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">

                            <div class="checkbox pull-left">
                                <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description"> Keep me logged in</span>
                                </label>
                            </div>


                            <p class="text-center pull-right"><a href="forgot-password.html"> Lost your password? </a>
                            </p>

                            <div style=" clear:both"></div>
                        </div>
                    </div>
                    <div class="login-box-btm text-center">
                        <p> Don't have an account? <br>
                            <a href="register.php"><strong>Sign Up !</strong> </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.main-container -->

    <footer class="main-footer">
    	<div class="footer-content">
    		<div class="container">
    			
    					

    						</div>
    					</div>
    				</div>
    				<div style="clear: both"></div>

    				

    					<div class="copy-info text-center">
    						&copy; 2018 Foodadvisor. All Rights Reserved.
    					</div>

    				</div>

    			</div>
    		</div>
    	</div>
    </footer>
    <!-- /.footer -->
</div>
<!-- /.wrapper -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/vendors.min.js"></script>

<!-- include custom script for site  -->
<script src="assets/js/script.js"></script>




</body>
</html>
