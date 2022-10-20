<?php
    include 'partials/_dbconnect.php';
    if(isset($_GET['deleteid']))
    {   
        $user_id_in_URL=$_GET['user_id'];
        $id=$_GET['deleteid'];
        $sql2="SELECT * FROM `favs` WHERE `id`=$id";
        $result2=mysqli_query($conn,$sql2);
        $row=mysqli_fetch_assoc($result2);
        $name=$row["name"];
        
        $sql="DELETE FROM `favs` WHERE `id`=$id";
        $result=mysqli_query($conn,$sql);
        // echo $name;
        header("Location:search.php?search=$name&user_id=$user_id_in_URL");
    }       
?>