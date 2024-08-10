<?php
    $name=$_POST['fname'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $phone=$_POST['ph'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $password=$_POST['pass'];
    $category1 = $_POST['category-1'];
    $category2 = $_POST['category-2'];

    $con=new mysqli('localhost','root','','userinfo');
    if($con->connect_error)
    {
        die($con->connect_error);
    }
    $sql="INSERT INTO register(Fullname,Username,Email,Phone,Password,dob,gender,category1,category2) VALUES('$name','$uname','$email','$phone','$password','$dob','$gender','$category1','$category2')";
    if($con->query($sql)===TRUE)
    {
        echo "Register Success";
        header('Location: ../index.php');
    }
    else
    {
        echo $con->error;
    }
?>