<?php
include 'db.php';
$su=0;
if(isset($_POST['submit'])){
$password=$_POST['pass'];
$pass=sha1($password);
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phn=$_POST['phn'];
$gen=$_POST['gen'];
$ch = "SELECT * from user where phn='$phn'";
$an=mysqli_query($con,$ch);
$ro=mysqli_fetch_array($an);
$ck=$ro['phn'];
if($ck!=$phn){
$query8= "INSERT INTO user(`id`, `password`, `fname`, `lname`, `email`, `gender`, `phn`) VALUES('','$pass','$fname','$lname','$email','$gen','$phn')";
                        mysqli_query($con,$query8);
                        $su=1;
    
}
else{
    $su=2;
}
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title>Foodadvisor</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
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
    				
    					<li class="dropdown no-arrow nav-item"><a href="login.php" class="dropdown-toggle nav-link" data-toggle="dropdown">

    						<span>Login</span> <i class="icon-user fa"></i> <i class=" icon-down-open-big fa"></i></a>
    						
    					</li>
    					<li class="postadd nav-item"><a class="btn btn-block   btn-border btn-post btn-danger nav-link" href="post.php">Register</a>
    					</li>
    					
    				</ul>
    			</div>
    			<!--/.nav-collapse -->
    		</div>
    		<!-- /.container-fluid -->
    	</nav>
    </div>
    <!-- /.header -->
           <?php
        if($su==1){
        echo '<div class="alert alert-success">
  <strong>Success!</strong> Your account has been successfully created . Now you can log-in.
</div>';
            
        }
           if($su==2){
        echo '<div class="alert alert-warning">
  <strong>Warning!</strong> Email/Phone number already used.
</div>';
            
        }
        

?>
    
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-5">
                    <div class="inner-box category-content">
                        <h2 class="title-2"><i class="icon-user-add"></i> Create your account, Its free </h2>

                        <div class="row">
                            <div class="col-sm-12">
                                <form class="form-horizontal" action="" method="POST">
                                    <fieldset>
                                        

                                        <!-- Text input-->
                                        <div class="form-group  row required">
                                            <label class="col-md-4 control-label">First Name <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input name="fname" placeholder="First Name" class="form-control input-md"
                                                       required="" type="text">
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Last Name <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input name="lname" placeholder="Last Name"
                                                       class="form-control input-md" type="text">
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Phone Number <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input name="phn" placeholder="Phone Number"
                                                       class="form-control input-md" type="text">

                                                
                                            </div>
                                        </div>

                                        <!-- Multiple Radios -->
                                        <div class="form-group row">
                                            <label class="col-md-4 control-label">Gender</label>

                                            <div class="col-md-6">
                                                <div class="radio">
                                                    <label for="Gender-0">
                                                        <input name="gen" id="Gender-0" value="1" checked="checked"
                                                               type="radio">
                                                        Male </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="Gender-1">
                                                        <input name="gen" id="Gender-1" value="2" type="radio">
                                                        Female </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Textarea -->
                                        
                                        <div class="form-group  row required">
                                            <label for="inputEmail3" class="col-md-4 control-label">Email
                                                <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input name="email" type="email" class="form-control" id="inputEmail3"
                                                       placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group  row required">
                                            <label for="inputPassword3" class="col-md-4 control-label">Password </label>

                                            <div class="col-md-6">
                                                <input name="pass" type="password" class="form-control" id="inputPassword3"
                                                       placeholder="Password">

                                                <p class="help-block">At least 5 characters
                                                    <!--Example block-level help text here.--></p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 control-label"></label>

                                            <div class="col-md-8">
                                                <div class="termbox mb10">
                                                    <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description"> I have read and agree to the <a href="terms-conditions.html">Terms
                                                        & Conditions</a> </span>
                                                    </label>
                                                </div>
                                                <div style="clear:both"></div>
                                               <input type="submit" name="submit" value="Register" class="btn btn-primary"</div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.page-content -->

                
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-container -->

    <footer class="main-footer">
    	<div class="footer-content">
    		<div class="container">
    			
    					<div class="copy-info text-center">
    						&copy; 2018 Foodadvisor. All Rights Reserved.
    					</div>

    				</div>

    			</div>
    		</div>
    	</div>
    </footer>
    <!--/.footer-->

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
