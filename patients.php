<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $age=$_POST['age'];
    $branch=$_POST['branch'];
    
    
    
    $con=mysqli_connect('127.0.0.1','root','','intern');
    if($con==false)
    {
        echo "Error in database connection!!";
    }
    else{
        $select="SELECT * FROM `patient` WHERE `email`='$emailid'";
        $result=mysqli_query($con,$select);
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            ?>
            <script> alert("Emailid already exists! Register with different email");
            window.open('Register.html','_self');</script>
            <?php
            
        }
        else{
            $insert="INSERT INTO `patient`(`name`, `email`,`contact`,`age`,`branch` ) VALUES ('$name','$email','$contact','$age','$branch')";
            $row=mysqli_query($con,$insert);
            if($row==true)
            {
            ?>
                <script> alert("Regitered Successfully");
                window.open('index.html','_self');</script>
            <?php
            }
            else{
                echo "error";
            }
        }
    }
        
}
?>
    }