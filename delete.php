<?php
    include 'partials/_dbconnect.php';
    if(isset($_GET['deleteid']))
    {   
        $id=$_GET['deleteid'];
        $sql="DELETE FROM `favs` WHERE `id`=$id";
        $result=mysqli_query($conn,$sql);
        header("location:favorites.php");
    }       
?>