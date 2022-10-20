<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include '_dbconnect.php';
        $name=$_POST["name"];
        $email=$_POST["email"];
        $number=$_POST["number"];
        $concers=$_POST["concerns"];
        $message=$_POST["message"];
        $sql="INSERT INTO `contact` (`name`, `email`, `number`, `concers`, `message`, `timestamp`) VALUES ('$name', '$email', '$number', '$concers', '$message', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        
        echo "<script>alert('Your Details have been submitted successfully');</script>";
        echo "<script>location.href = 'http://localhost/placify/contact.php';</script>";
    }
?>