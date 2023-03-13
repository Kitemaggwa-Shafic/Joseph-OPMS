<?php
include 'db.php';

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
	<title>Online Prison Management System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/plugins/magic/magic.css" />
    
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body style="background-color:#990000" >
   
   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
       <!-- <img src="assets/img/logo.png" id="logoimg" alt=" Logo" />-->
	   <h1 style="color:#ffff00;">NDORWA ONLINE PRISON MANAGEMENT SYSTEM</h2>

    </div>
    <div class="tab-content" >
                
        <div id="signup">
            <form action="register.php" method="post" class="form-signin">
            <?php   
			  if(isset($_POST['username'],$_POST['password'],$_POST['repeat'],$_POST['usertype'])){
                               
                                    $username=  mysql_real_escape_string(trim($_POST['username']));
                                    $password= mysql_real_escape_string(trim($_POST['password']));
									 $repeat= mysql_real_escape_string(trim($_POST['repeat']));
                                    $usertype=$_POST['usertype'];
									if($password!=$repeat){
									echo '<div class="alert alert-warning">Oops!!The passwords donot match</div>';
									}else{
                
	mysql_query("INSERT INTO login (username,password,usertype) VALUES('$username','$password','$usertype')") 
	or die(mysql_error());
	echo '<div class="alert alert-success">Details successfully added</div>';
	}}
									?>
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Fill Details To Register</p>
                <input type="text" placeholder="username" name="username" class="form-control" required="required" />
                
                <div class="form-group"><br />
                                <label style="color:white;">UserType</label>
                                            <div class="radio">
                                        <label> 
                                    <input type="radio" name="usertype" id="optionsRadios1" value="Admin" checked="checked" />Admin
                                                </label>
                                            </div>
                                            <div class="radio">
										<label>
                                        <input type="radio" name="usertype" id="optionsRadios2" value="Officer" />Officer
                                                </label>
                                            </div>
                                            
                                        </div>
                <input type="password" placeholder="password" name="password" class="form-control" required="required" />
                <input type="password" placeholder="Re type password" name="repeat" class="form-control" required="required" />
                <button class="btn text-muted text-center btn-success" type="submit">Register New User</button>
            </form>
        </div>
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="index.php">Already Registered, Login</a></li>
                        
        </ul>
    </div>


</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="assets/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
