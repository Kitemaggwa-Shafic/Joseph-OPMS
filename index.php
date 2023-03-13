<?php
ob_start();//this turns on output buffering to prevent warnings on header duplication
//include ('db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Prison Management System</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css3/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->

<!-- for sign in form -->
 <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/plugins/magic/magic.css" />

</head>
<body>
<div class="logintitle">
<center>NDORWA ONLINE PRISON MANAGEMENT SYSTEM</center>
</div>
<div id="loginpanelwrap">
  	
	<div class="loginheader">
    <div class="logintitle"><a href="#"> Sign in Panel</a></div>
    </div>

<div class="agileits-top">
	<form action="index.php" method="post" >
        
		<div class="styled-input">
         <input type="text" class="loginform_input" name="username" required  /><br></br>
			<label>User Name</label>
						<span></span>       
	   </div>
	   
		<div class="styled-input">
         <input type="password" class="loginform_input" name="password" maxlength='10' required />
        <label>Password</label>
		<span></span>
		</div><br></br>
					<div class="styled-input">
 	<select name="usertype" class="loginform_input" >
		<option>-----------select user type---------</option>
		<option> Admin</option>
		<option> Officer</option>
	</select>
         </div> 
		 <br /><br /><br /> 
		<div class="agileits-bottom">
        <input type="submit" class="loginform_submit" value="Signin" name="login" />
			 
		</div> 
        <div class="clear"></div>
	</form>
	<div class="text-center">
        <ul class="list-inline">
                        <li><a class="text-muted" href="register.php">Not Registered, Signup</a></li>
        </ul>
    </div>
</div>
 

</div>


<?php session_start(); /* Starts the session */
        
        /* Check Login form submitted */        
        if(isset($_POST['Submit'])){
                /* Define username and associated password array */
                $logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');
                
                /* Check and assign submitted Username and Password to new variable */
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                
                /* Check Username and Password existence in defined array */            
                if (isset($logins[$Username]) && $logins[$Username] == $Password){
                        /* Success: Set session variables and redirect to Protected page  */
                        $_SESSION['UserData']['Username']=$logins[$Username];
                        header("location:index.php");
                        exit;
                } else {
                        /*Unsuccessful attempt: Set error message */
                        $msg="<span style='color:red'>Invalid Login Details</span>";
                }
        }
?>

    	
</body>
</html>