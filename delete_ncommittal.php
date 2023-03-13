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
                
                $delete="delete from non_committal where Id=$id";
                
                $sql=mysql_query($delete,$con); //this function excecutes our query
                 if(!$sql){
                    
                    echo "failed to Delete Non-Committal Prisoner Data".mysql_error();
                    
                }
                
                header("Location:view_ncommittal.php");
           
?>