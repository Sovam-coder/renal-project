<?php
if(isset($_POST['submit']))
{
    $branch=$_POST['branch'];
    $discount=$_POST['discount'];
    
    
    
    $con=mysqli_connect('127.0.0.1','root','','intern');
    if($con==false)
    {
        echo "Error in database connection!!";
    }
    else{
       
        
            $insert="INSERT INTO `branchtable`(`branch`,`discount` ) VALUES ('$branch','$discount')";
            $row=mysqli_query($con,$insert);
            if($row==true)
            {
            ?>
                <script> alert("Branch Creted Succesfully");
                window.open('index.html','_self');</script>
            <?php
            }
            else{
                echo "error";
            }
        }
    }
        

?>
   