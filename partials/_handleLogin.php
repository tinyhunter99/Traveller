<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include '_dbconnect.php';
        $email=$_POST["email"];
        $username=$_POST["username"];
        $password=$_POST["password"];

        $sql="SELECT * FROM `users` WHERE username='$username'";

        $result=mysqli_query($conn,$sql);
        $numRows=mysqli_num_rows($result);

        if($numRows==1){
            $row=mysqli_fetch_assoc($result);
            if(password_verify($password,$row["password"])){
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['email']=$row["email"];
                $_SESSION['username']=$row["username"];
                $_SESSION['user_id']=$row["id"];
                echo("<script>location.href = 'http://localhost/placify/index.php?loginsuccess=true';</script>");
            }
            else{
                echo "<script>alert('Incorrect password. Please try again')</script>";
            }
        }
        else{
            echo "<script>alert('Invalid Username. Please try again');</script>";
        }
        echo("<script>location.href = 'http://localhost/placify/index.php';</script>");
    }
?>