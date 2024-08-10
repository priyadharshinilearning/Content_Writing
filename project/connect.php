<?php
    $name=$_POST['fname'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $phone=$_POST['ph'];
    $password=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $category1=$_POST['category1'];
    $category2=$_POST['category2'];

    $con=new mysqli('localhost','root','','userinfo');
    if($con->connect_error)
    {
        die($con->connect_error);
    }
    $sql="INSERT INTO register(Fullname,Username,Email,Phone,Password,Confirmpassword,category1,category2) VALUES('$name','$uname','$email','$phone','$password','$cpass','$category1','$category2')";
    if($con->query($sql)===TRUE)
    {
        echo "Register Success";
    }
    else
    {
        echo $con->error;
    }
?>