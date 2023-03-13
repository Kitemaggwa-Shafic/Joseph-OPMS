 
<?php
$id=$_GET["id"];
 
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
			$edate=$_POST["edate"];
			$ldate=$_POST["ldate"];
			$description=$_POST["description"];
			$kin=$_POST["kin"];
			$tel=$_POST["tel"];
			$district=$_POST["district"];
			$sentence=$_POST["sentence"];

$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
   

                $con=mysql_connect("localhost","root","");
                
                if(!$con){
                    
                    echo "failed to connect to database".mysql_error();
                    
                }
                
                $selectdb=mysql_select_db("prison",$con);
                
                if(!$selectdb){
                    
                    echo "failed to select database".mysql_error();
                    
                }
$insert="update shorttermers set ConvictNo='$convict', FirstName='$fname',SecondName='$lname',SonOf='$son',Gender='$gender',DOB='$dob',Offence='$offence',TypeOfPrisoner='$prisoner',Court='$court',MaritalStatus='$ms',AdmissionDate='$adate',ConvictionDate='$cdate',EarliestDate='$edate',LatestDate='$ldate',Description='$description',NextOfKin='$kin',Telephone='$tel',District='$district',Sentence='$sentence',Photo='$location'   where Id=$id";
                                      
                $sql=mysql_query($insert,$con); //this function excecutes our query
				header("Location:view_shorttermers.php");
		
                 if(!$sql){
                    
                    echo "failed to update data".mysql_error();
              
                }
		 
       
        
        else{
            
          //  echo "none of the fields should be left blank";
        }
        
        ?>
    