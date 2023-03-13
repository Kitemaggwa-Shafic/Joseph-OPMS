 
<?php
$id=$_GET["id"];
 
  $staff=$_POST["staff"];
		   $fname=$_POST["fname"];  
           $lname=$_POST["lname"];
		   $rank=$_POST["rank"];
		   $gender=$_POST["gender"];
		   $dob=$_POST["dob"];
		   $ms=$_POST["ms"];
		   $deployment=$_POST["deployment"];
		    $education=$_POST["education"];
			$tel=$_POST["tel"];
			$district=$_POST["district"];
			$edate=$_POST["edate"];	 
			$child=$_POST["child"];
			
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
$insert="update staff set StaffNo='$staff', FirstName='$fname',SecondName='$lname',RankName='$rank',Gender='$gender',DOB='$dob',MaritalStatus='$ms',Deployment='$deployment',EducationLevel='$education',Contacts='$tel',District='$district',DateOfEnlishment='$edate',NumberOfChildren='$child',Photo='$location'   where Id=$id";
                                      
                $sql=mysql_query($insert,$con); //this function excecutes our query
				header("Location:view_staff.php");
		
                 if(!$sql){
                    
                    echo "failed to update data".mysql_error();
              
                }
		 
       
        
        else{
            
          //  echo "none of the fields should be left blank";
        }
        
        ?>
    