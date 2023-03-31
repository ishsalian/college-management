<?php
    require_once('connection.php');
    if(isset($_POST['btn-save']));
    {
        $username=mysqli_real_escape_string($conn,$_POST['username']);
        $Email=mysqli_real_escape_string($conn,$_POST['email']);
        $Password=mysqli_real_escape_string($conn,$_POST['password']);
        $Cpass=mysqli_real_escape_string($conn,$_POST['cpassword']);

        if(empty($username) || empty($Email) || empty($Password) || empty($Cpass))
        {
            echo 'fill the blank';
        }
        if($Password!=$Cpass)
        {
            echo 'password not matched';
        }
        else
        {
            $sql="insert into studenttb(uname,email,password)values ('$username','$Email','$Password')";
            $result=mysqli_query ($conn,$sql);
            if($result)
            {
                echo 'value entered';
            }
            else
            {
                echo 'check query';
            }
        }
    }
?>