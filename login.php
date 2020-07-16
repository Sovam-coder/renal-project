<?php
session_start();
if(isset($_POST['login']))
{
    
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $con=mysqli_connect('127.0.0.1','root','','intern');
    if($con==false)
    {
        echo "Error in connection";
    }
    else
    {
        
        $select="SELECT * FROM `staff` WHERE `email`='$email'  AND `password`='$pass' ";
        $query=mysqli_query($con,$select);
        $row=mysqli_num_rows($query);
        if($row==1)
        {
            
            // $data=mysqli_fetch_assoc($query);
            // $_SESSION['name']=$data['name'];
            ?>
            <script>
                alert("You have successfully logged in");
                window.open('staff.html','_self');
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert("Wrong Emailid and Password!! Try Again");
                window.open('admin.html','_self');
            </script>
            <?php
        }
        
    }
}
?>
