<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="placify";

    $conn=mysqli_connect($servername,$username,$password,$database);
    $mysqli = new mysqli("localhost","root","","placify");
    // if(!$conn){
    //     echo "Sorry!!! We failed to connect ".mysqli_connect_error();
    // }
    // else{
    //     echo "Connection was Successful";
    // }
?>