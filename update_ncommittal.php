<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head><title>Online Prison Management System</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
     <div class="menu_nav">
        <ul>
     <?php
	include('links.php');
	?>
     </ul>
      </div>
      <div class="logo">
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider">
		<a href="#"><img src="images/redcross.jpg" width="940" height="310" alt="" /> 
		</a> <a href="#"><img src="images/staff.jpg" width="940" height="310" alt="" /> </a> 
				<a href="#"><img src="images/mdd.jpg" width="940" height="310" alt="" /> </a> 
		<a href="#"><img src="images/parade.jpg" width="940" height="320" alt="" /> </a> </div>
		</div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
          <div class="article">
          <h2><span>Update</span> Non-Committal Prisoner Details</h2>
          <div class="clr"></div>
		   <p style="margin-left:90px;">You will use this form to Update all your registered details for Non-Committal Prisoners</p>
		  </div>
		  
		  <?php
       
               $id=$_GET["id"]; 
                $con=mysql_connect("localhost","root","");
                
                if(!$con){
                    
                    echo "failed to connect".mysql_error();
                    
                }
                
                $selectdb=mysql_select_db("prison",$con);
                
                if(!$selectdb){
                    
                    echo "failed to select database".mysql_error();
                    
                }
                
                $select="select * from non_committal where Id=$id";
                
                $sql=mysql_query($select,$con); //this function excecutes our query
                 if(!$sql){
                    
                    echo "failed to select data".mysql_error();
                    
                }
                
         $row=mysql_fetch_array($sql);
        
        ?>
		  
		  <form action="edit_ncommittal.php?id=<?php echo $row['Id']; ?>" enctype="multipart/form-data" method="post" style="margin-left:90px;">

            <ol>
   
   <div id="tab4" class="tabcontent">
      <!--  <h3>Booking Form for  my clients</h3>  -->
        <div class="form">
            
			<li>
            <label> Non-Committal Number :</label>
            <input type="text" class="form_input" style="width:450px;height:25px" class="textbox" placeholder="Enter Convict Number" name="convict" required onKeyUp="checkInput(this)" value="<?php echo $row['Non_CommittalNo']; ?>"   /> 
		</li>
            <li>
            <label> First Name :</label>
            <input type="text" class="form_input" style="width:450px;height:25px" class="textbox" placeholder="Enter First Name" name="fname" required onKeyUp="checkInput(this)" value="<?php echo $row['FirstName']; ?>"   /> 
		</li>

	    <li>
	    <label>Last Name :</label>
 	<input type="text" class="form_input" style="width:450px;height:25px" class="textbox" placeholder="Last Name"  name="lname" required   onKeyUp="checkInput(this)" value="<?php echo $row['SecondName']; ?>" />
	    </li>
		 
	    <li>
	    <label>Son Of :</label>
 	<input type="text" class="form_input" style="width:450px;height:25px" class="textbox" placeholder="Son Of Who"  name="son" required   onKeyUp="checkInput(this)" value="<?php echo $row['SonOf']; ?>" />
	    </li>
	 
	      <li>
        <label> Gender : </label>
	  <select name="gender" style="width:455px;height:33px" class="form_select">
                                    <option><?php echo $row['Gender']; ?></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>                                    
                                    </select>
	    </li>	
 	      <li>
	<label>Date Of Birth :  </label>
	<input type="text" class="form_input" style="width:450px;height:25px" class="textbox" placeholder="D O B " name="dob" id="datefield1"  required value="<?php echo $row['DOB']; ?>" />
	  </li>		
 		  <li>
            <label>Offence :</label>
             <input type="text" class="form_input" style="width:450px;height:25px" class="textbox" placeholder="Offence Committed" name="offence" required onKeyUp="checkInput1(this)" value="<?php echo $row['Offence']; ?>" />
                  
            </li>
			
	<li>
        <label> Type Of Prisoner : </label>
            <select name="prisoner" style="width:455px;height:35px" class="form_select" >
                                    <option><?php echo $row['TypeOfPrisoner']; ?></option>
                                    <option value="ordinary">Ordinary</option>
                                    <option value="star">Star</option>
                                                                
                                    </select>
            </li>
			
			<li>
            <label>Court :</label>
             <input type="text" class="form_input" style="width:450px;height:25px" class="textbox" placeholder="Enter Court" name="court" required onKeyUp="checkInput1(this)" value="<?php echo $row['Court']; ?>" />
                  
            </li>
 	    <li>
        <label> Marital Status : </label>
            <select name="ms" style="width:455px;height:33px" class="form_select" >
        <option><?php echo $row['MaritalStatus']; ?></option>
            <option value="married">Married</option>
            <option value="single">Single</option>
            <option value="divorced">Divorced</option>                            
            </select>
            </li>
			
 	      <li>
	<label>Admission Date :  </label>
	<input type="text" class="form_input" style="width:450px;height:25px" class="textbox" placeholder="Enter Admission date " name="adate" id="datefield2"  required value="<?php echo $row['AdmissionDate']; ?>" />
	  </li>

	  <li>
	<label>Conviction Date :  </label>
	<input type="text" class="form_input" style="width:450px;height:25px" class="textbox" placeholder="Enter Conviction Date " name="cdate" id="datefield3"  required value="<?php echo $row['ConvictionDate']; ?>" />
	  </li>

	  <li>
	<label>Description :  </label>
	<textarea type="text" class="form_input" style="width:450px;height:80px" class="textbox" placeholder="Enter Description" name="description" required><?php echo $row['Description']; ?></textarea>
	  </li>

	  <li>
	<label>Next Of Kin :  </label>
	<input type="text" class="form_input" style="width:450px;height:25px" class="textbox" placeholder="Enter Next Of kin" name="kin"   required value="<?php echo $row['NextOfKin']; ?>" />
	  </li>

	  <li>
	<label>Contacts :  </label>
	<input type="text" class="form_input" style="width:450px;height:25px" class="textbox" placeholder="Enter Contacts" name="tel"    required value="<?php echo $row['Telephone']; ?>"  />
	  </li>

	  <li>
            <label> District:</label> 
         <select name="district" class="form_select" style="width:455px;height:35px" class="form-control">

<option><?php echo $row['District'];?></option>
	      <option> ABIM </option>
              <option> ADJUMANI </option>
              <option> AGAGO </option>              
              <option> AMUDAT </option>
              <option> AMURIA </option>
              <option> AMURU </option>               
              <option> BUSIA </option>               
              <option> BUVUMA </option>
              <option> BUYENDE </option>
              <option> DOKOLO </option>
              <option> GOMBA </option>
              <option> GULU </option>              
              <option> IBANDA </option>
              <option> IGANGA </option>
              <option> ISINGIRO </option>
              <option> JINJA </option>             
              <option> KABALE </option>
              <option> KABAROLE </option>
              <option> KABERAMAIDO</option>
              <option>KALANGALA</option>
              <option>KALIRO</option>
              <option>KALUNGU</option>
              <option>KAMPALA</option>
              <option>KAMULI</option>
              <option>KAMWENGE</option>              
              <option>KASESE</option>
              <option>KATAKWI</option>
              <option>KAYUNGA</option>              
              <option>KIBUKU</option>
              <option>KIRUHURA </option>
              <option>KIRYANDONGO</option>
              <option>KISORO</option>
              <option>KITGUM</option>
              <option>KOBOKO</option> 
              <option>KYEGEGWA</option>
              <option>KYENJOJO</option>
              <option>LAMWO</option>
              <option>LIRA</option>              
              <option>LUWEERO</option>
              <option>LWENGO</option>
              <option>LYANTONDE</option>              
              <option>MASAKA</option>
              <option>MASINDI</option>
              <option>MAYUGE</option>
              <option>MBALE</option>
              <option>MBARARA</option>             
              <option> MITYANA</option>
              <option> MOROTO</option>             
              <option> MPIGI</option>
              <option> MUBENDE</option>
              <option> MUKONO</option>             
              <option> NAKASEKE</option>
              <option>NAKASONGOLA</option>
              <option> NAMAYINGO </option>           
              <option> NWOYA</option>
              <option> OTUKE</option>
              <option> OYAM</option>              
              <option> RAKAI</option>
              <option> RUBIRIZI</option>
              <option> RUKUNGIRI</option>
              <option> SERERE</option>              
              <option> TORORO</option>
              <option> WAKISO</option>
              <option> YUMBE</option>
              <option> ZOMBO</option>
			</select>
	 </li>

  <li>
		  <label>Photo :</label>
		    <input type="file" name="image" style="width:300px; height:30px;" required value= "<?php echo $row['Photo']; ?> " />  
  			</li>

            <li>
            
	    <input type="submit" class="form_submit" value="Update Convict Prisoner Prisoner" style="width:450px;height:30px; margin-right: 48px; margin-top:5px"  name="save" />
			 
            </li>
	    
	</div>           
	
	<div>  
   </div>  
</div>  
    </div>  

     </div>
     </div><!-- end of right content-->
	 </form>
	
	
             
        </div>
      </div>
        </div>
     
       </div>
      <div class="sidebar">
        
           <h2 style="margin-left:200px;">Registered Details </h2>
          <div class="clr"></div>
 <ul class="sb_menu_coms">
            <li><a href="#">Home</a></li><br />
			<li><a href="view_staff.php">Registered Staff</a></li><br />
            <li><a href="view_prisoner.php">Registered Prisoners</a></li><br />
            <li><a href="view_longtermers.php">Registered Long Termers</a></li><br />
            <li><a href="view_shorttermers.php">Registered Short Termers</a></li><br />
            <li><a href="petty.php">Registered Petty Offenders</a></li><br />
            <li><a href="view_committal.php">Registered Committal</a></li><br />
            <li><a href="view_ncommittal.php">Registered Non-Committal</a></li><br />
			            <li><a href="searchprisoner.php">Search Prisoner Details</a></li><br />

			</ul>         
      </div>
	  
	  <?php
        if(isset($_POST["save"]) && !empty($_POST["convict"]) && !empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["son"]) && !empty($_POST["gender"]) && !empty($_POST["dob"]) && !empty($_POST["offence"]) && !empty($_POST["prisoner"]) && !empty($_POST["court"]) && !empty($_POST["ms"]) && !empty($_POST["adate"]) && !empty($_POST["cdate"]) && !empty($_POST["edate"]) && !empty($_POST["ldate"]) && !empty($_POST["description"]) && !empty($_POST["kin"]) && !empty($_POST["tel"]) && !empty($_POST["district"]) && !empty($_POST["sentence"]) ) {
           $convict=$_POST["convict"];
		   $fname=$_POST["fname"];  
           $lname=$_POST["lname"];
		   $son=$_POST["son"];
		   $gender=$_POST["gender"];
		   $dob=$_POST["dob"];
		   $offence=$_POST["offence"];
		   $prisoner=$_POST["prisoner"];
		    $court=$_POST["court"];
			$ms=$_POST["ms"];
			$adate=$_POST["adate"];
			$cdate=$_POST["cdate"];
			$description=$_POST["description"];
			$kin=$_POST["kin"];
			$tel=$_POST["tel"];
			$district=$_POST["district"];
			
			$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
   
				
                $con=mysql_connect("localhost","root","");
                
                if(!$con){
                    
                    echo "failed to connect".mysql_error();
                    
                }
                
                $selectdb=mysql_select_db("prison",$con);
                
                if(!$selectdb){
                    
                    echo "failed to select database".mysql_error();
                    
                }
                
                $insert="insert into non_committal (Non_CommittalNo,FirstName,SecondName,SonOf,Gender,DOB,Offence,TypeOfPrisoner,Court,MaritalStatus,AdmissionDate,ConvictionDate,Description,NextOfKin,Telephone,District,Photo)values('$convict','$fname','$lname','$son','$gender','$dob','$offence','$prisoner','$court','$ms','$adate','$cdate','$description','$kin','$tel','$district','$location')";
                
                $sql=mysql_query($insert,$con); //this function excecutes our query
				header("Location:view_ncommittal.php");
		
                 if(!$sql){
                    
                    echo "failed to insert data".mysql_error();
              
                }
		 
        }
        
        else{
            
        // echo "none of the fields should be left blank";
        }
        
        ?>
    
	  
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <a href="#"><img src="images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
      <div class="col c2">
        <h2><span>Services</span> Our prisoners Engage in</h2>
        <p>when some one is brought to us at Kabaale prison, we don not treat them bad and accuse them, we just teach them to 
		kill the crime but spare the offender.</p>
        <ul class="fbg_ul">
          <li><a href="#">Educating the Prisoners.</a></li>
          <li><a href="#">Vocational Skills.</a></li>
          <li><a href="#">Prisons Clubs.</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p>We can be contacted on a number of contacts. 
		Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
        <p class="contact_info"> <span>Address:</span> 1077 Kabaale, UG<br />
          <span>Telephone:</span> +256 757 233 453<br />
          <span>FAX:</span> +256 757 233 453<br />
          <span>Others</span>Toll free:</span> +0800 334 688<br />
          <span>E-mail:</span> <a href="#">officer@kabaaleprison.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
 <div class="footer">
    <?php include('footer.php'); ?>
  </div>
  
  <link rel="stylesheet" href="css/template.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<script src="js2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery.date_input.js"></script>
<link rel="stylesheet" href="date_input.css" type="text/css">
  <script type="text/javascript">$(function() {
  
  
  $("#datefield3").date_input(); 
  $("#datefield4").date_input();
  $("#datefield2").date_input(); 
  $("#datefield1").date_input(); 
  $("#datefield5").date_input();
 
});</script>
  
</div>
 </html>
