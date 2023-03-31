<?php
    $conn=mysqli_connect('localhost','root','','student');
    if(!$conn)
    {
        echo "check your connection!!";
    }
    else
    {
        echo "connected!";
    }
?>