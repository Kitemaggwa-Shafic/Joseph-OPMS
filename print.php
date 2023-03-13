<?php
include_once('db.php');
?>
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
          <h2><span>PRISONER REGISTRATION</span> DETAILS</h2>
          <div class="clr"></div>
 		   <p style="margin-left:90px;">You will use this form to print all your prisoner registration Details</p>
		    <p align="center" > <a href=""><img src="images/print_button.jpg" input name="print" type="button" value="Print" id="printButton" onClick="printpage()"></a> </p>

		  </div>
          <form action="print.php" method="post" enctype="multipart/form-data" id="sendemail" style="margin-left:90px;">
            <ol>
   
   <div id="tab4" class="tabcontent">
         <div class="form">
            
<hr/>	
    <div class="tabbed_area">  
          
       <table id="rounded-corner" style="margin-left:-420px;">
     
    	<tr bgcolor="#0009966" style="color:#FFFFFF">
   
   <thead align="center">	
				<th>Convict Number</th>
                <th>First Name</th>
				<th>Second Name</th>  
				<th>Son Of</th>
				<th>Gender</th>
                <th>Date Of Birth</th>
				<th>Offence</th>
                <th>Type Of Prisoner</th> 
				<th>Court</th>				
                <th>Marital Status</th>
				<th>Admission Date</th>
				<th>Conviction Date</th>
				<th>Earliest Date Of Discharge</th>
				<th>Latest Date Of Discharge</th>
				<th>Description</th>
				<th>Next Of kin</th>
				<th>Telephone</th>
				<th>District</th>
				<th>Sentence</th>
				<th>Photo</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
		</tr>
	</thead>
   
 <tbody>
 
	
	 <?php
                  
                $con=mysql_connect("localhost","root","");
                
                if(!$con){
                    
                    echo "failed to connect".mysql_error();
                    
                }
                
                $selectdb=mysql_select_db("prison",$con);
                
                if(!$selectdb){
                    
                    echo "failed to select database".mysql_error();
                    
                }
                
                $select="select * from convict ";
                
                $sql=mysql_query($select,$con); 
                  if(!$sql){
                    
                    echo "failed to retrive data".mysql_error();
                    
                }
                
                while($row=mysql_fetch_array($sql)){
                echo"<tr bgcolor='#330066' style='color:#FFFFFF' align='center'>";		   
                echo'<td>'.$row["ConvictNo"].'</td>';  
				echo'<td>'.$row["FirstName"].'</td>';                
                 echo'<td>'.$row["SecondName"].'</td>';
				 echo'<td>'.$row["SonOf"].'</td>';
                     echo'<td>'.$row["Gender"].'</td>';
                         echo'<td>'.$row["DOB"].'</td>';
                             echo'<td>'.$row["Offence"].'</td>';
							 echo'<td>'.$row["TypeOfPrisoner"].'</td>';
							 echo'<td>'.$row["Court"].'</td>';
                                 echo'<td>'.$row["MaritalStatus"].'</td>';
                                     echo'<td>'.$row["AdmissionDate"].'</td>';
                                      echo'<td>'.$row["ConvictionDate"].'</td>';
										echo'<td>'.$row["EarliestDate"].'</td>';
                                         echo'<td>'.$row["LatestDate"].'</td>';									  
										 echo'<td>'.$row["Description"].'</td>';
echo'<td>'.$row["NextOfKin"].'</td>';	
echo'<td>'.$row["Telephone"].'</td>';	
echo'<td>'.$row["District"].'</td>';	
echo'<td>'.$row["Sentence"].'</td>';
 ?>
 				<td><img  src="<?php echo $row['Photo']; ?>" height="70" width="70"></td>
       

  
    <td><a href="updateprisoner.php?id=<?php echo $row['Id']; ?>" ><img src="images/edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="deleteprisoner.php?id=<?php echo $row['Id']; ?>" ><img src="images/trash.gif" alt="" title="" border="0" /></a></td>
        
                                    
                <?php
                }
                ?>
 </tbody>
 
</table>
        </div>  
        <div id="content_2" class="content">  
		           
				 
           
            <script language="javascript">
function checkInput(ob) {
  var invalidChars = /[^a-zA-Z|^\s]/gi
 
  //var invalidChars2 = /[^A-Z]/gi
  if(invalidChars.test(ob.value)  ) {
         alert("Warning:You must type in letters only!!");
         ob.value = ob.value.replace(invalidChars,"");
      }
}
</script>
              
	 <script type="text/javascript">
function printpage() {
document.getElementById('printButton').style.visibility="hidden";
window.print();
document.getElementById('printButton').style.visibility="visible";  
}
</script>
 
        </div>  
    </div>  
</div>
</div>

</div>
      <div class="clr"></div>
<br />

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




</body>
</html>
