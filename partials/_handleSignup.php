<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include '_dbconnect.php';
        $name=$_POST["name"];
        $username=$_POST["username"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $cpassword=$_POST["cpassword"];

        $isEmailUsernameExistSql="SELECT * FROM `users` WHERE email='$email' OR username='$username'";

        $result=mysqli_query($conn,$isEmailUsernameExistSql);
        $numRows=mysqli_num_rows($result);

        if($numRows>0){
            echo "<script>alert('email/username already exists, Please Login')</script>";
            echo "<script>location.href = 'http://localhost/placify/index.php';</script>";
        }
        else{
            if($password==$cpassword){
                $hash=password_hash($password,PASSWORD_DEFAULT);
                $sql="INSERT INTO `users` (`name`, `username`, `email`, `password`,`timestamp`) VALUES ('$name', '$username', '$email', '$hash',current_timestamp())";
                $result=mysqli_query($conn,$sql);
                if($result){
                    echo "<script>alert('Sign up successfull. Please Login')</script>";
                    echo "<script>location.href = 'http://localhost/placify/index.php';</script>";
                }
                else{
                    echo "<script>alert('Failed in signing up the user. Please try again')</script>";
                    echo "<script>location.href = 'http://localhost/placify/register.php';</script>";
                }
            }
            else{
                echo "<script>alert('Passwords do not match')</script>";
                echo "<script>location.href = 'http://localhost/placify/register.php';</script>";
            }
        }
    }
?>