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
    $id = $_POST['id'];

    $con=new mysqli('localhost','root','','userinfo');
    if($con->connect_error)
    {
        die($con->connect_error);
    }

    $sql = "UPDATE register SET Fullname='$name', Username='$uname', Email='$email', Phone = '$phone', Password='$password', dob='$dob', gender = '$gender', category1='$category1', category2='$category2' WHERE id=$id";

    if($con->query($sql)===TRUE)
    {
        echo "Updated Successfully";
        $location = "../home.php?id=".$id;
        header('Location: '.$location);
    }
    else
    {
        echo $con->error;
    }
?>