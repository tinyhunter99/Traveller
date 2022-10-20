<!DOCTYPE html>
<?php
    include 'partials/_dbconnect.php'
?>
<?php
    include 'partials/_header.php';
?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">

    <title>Placify | <?php echo ucfirst($_GET['search']) ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />  <!-- Hiking icon and food icon-->
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" /> <!-- Swiper -->
    <style>
        *{
            text-transform: none;
            text-decoration: none!important;
        }
        header{
            line-height: 1.5rem;
        }
        .result-container{
            padding: 2rem;
            margin:6.1rem 9rem;
            color: rgb(51, 51, 51);
        }
        .result-container h1{
            text-transform: uppercase;
            font-size:4rem;
            /* margin-top: -1rem; */
            font-weight: bolder;
        }
        .result-container h2{
            font-size:3rem;
            margin-top:2.2rem;
            color: orange;
            font-weight: bolder;
            text-transform: uppercase;
        }
        .result-container p{
            font-size:1.9rem;
            text-align: justify;
            font-weight: 600;
        }
        .result-container img{
            display: block;
            width: 100%;
            box-shadow: 0 1rem 2rem rgba(0,0,0,0.5);
            border-radius: 1rem;
            margin-top:1.67rem;
            height:87vh;
            object-fit: cover;
            margin: auto;
        }
        .result-container .map-icon{
            color: orange;
            font-size: 1.75rem;
            text-transform: uppercase;
        }
        .result-container .swiper{
            border-radius: 1rem;
            margin-top:1.67rem;
            box-shadow: 0 1rem 2rem rgba(0,0,0,0.5);
        }

        .tourist-container{
            margin-top: 2rem;
            display: flex;
            flex-wrap: wrap;
            gap:2.4rem;
            justify-content: space-between;
        }
        .tourist-container .box{
            flex-basis: 33rem;
            border-radius: 0.1rem;
            overflow: hidden;
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
        }
        .tourist-container .box:hover{
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.25);
        }
        .tourist-container .box img{
            height: 25rem;
            width: 100%;
            object-fit: cover;
            box-shadow: none;
            border-radius: 0;
        }
        .tourist-container .box .content{
            padding:2rem;
        }
        .tourist-container .box .content h3{
            font-size:2rem;
            color: rgb(51,51,51);
        }
        .tourist-container .box .content h3 i{
            color: orange;
        }
        .btn{
            display: inline-block;
            margin-top: 1.5rem;
            background: orange;
            color: white;
            padding: 0.8rem 3rem;
            border: 0.2rem solid orange;
            cursor: pointer;
            font-size: 1.7rem;
            border-radius: 0.67rem;
        }
        .tourist-container .box .content button:hover{
            background-color: rgb(254, 183, 52);
        }
        .tourist-container .box .content button:active{
            background-color: rgb(185, 122, 4);
        }
        .image-container{
            margin-top: 2rem;
        }

        /* Responsive design */
        @media only screen and (max-width:1200px){
            html{
                font-size: 55%;
            }
        }

        @media only screen and (max-width:990px){
            header{
                padding: 2rem;
            }
            section{
                padding: 2rem;
            }
            .result-container{
                margin: 7.5rem 7rem;
            }
            .result-container img{
                height:60vh;
            }
        }

        @media only screen and (max-width:768px){
            .result-container{
                margin: 7.5rem 3.6rem;
            }
            .tourist-container{
                display: flex;
                flex-wrap: wrap;
                gap: 2.4rem;
                justify-content: space-around;
            }
            .result-container img{
                height:45vh;
            }
        }

        @media only screen and (max-width:450px) {
            html{
                font-size: 50%;
            }
            .result-container{
                margin: 7.5rem 2rem;
            }
            .tourist-container{
                display: block;
            }
            .tourist-container .box{
                box-shadow: 1rem 2rem 2rem rgba(0, 0, 0, 0.4);
                margin: 2.4rem 0;
            }
            .tourist-container .box:hover{
                box-shadow: 1rem 2rem 2rem rgba(0, 0, 0, 0.6);
            }
            .result-container img{
                height:30vh;
            }
            .result-container h1{
                font-size: 3rem;
                text-align: left;
            }
            .result-container .map-icon{
                color: orange;
                font-size: 1.6rem;
                text-transform: uppercase;
            }
            .result-container h2{
                font-size:2.35rem;
                margin-top:2.2rem;
                color: orange;
                font-weight: bolder;
                text-transform: uppercase;
            }
            .result-container p{
                font-size:1.7rem;
                text-align: justify;
                font-weight: 600;
            }
        }
        .heading{
            display: flex;
            padding: 0;
        }
        .heading form button i{
            font-size: 3rem;
            margin-top:1rem ;
            cursor: pointer;
        }
        .fa-heart{
            font-size: 3rem;
            color: red;
        }
        .heading div{
            margin-top: 1rem;
        }
        .heading div button i{
            cursor: pointer;
        }
        .icons p{
            margin-top:0.49rem!important;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php
            $showJumbotronWhenSearchFailed=false;
            $searchResult = ucwords($_GET['search']);
            // $json_data = file_get_contents("./Tourist-JSON/touristplace.json");
            $json_data = file_get_contents("touristplace.json");
            $json = json_decode($json_data, true);
            foreach($json["state"] as $state){
                if($searchResult==$state["name"]){
                    $showJumbotronWhenSearchFailed=true;
                    echo '
                        <div class="heading">
                            <h1>'.$state["name"].'</h1>';
                            $sql="SELECT * FROM `favs` WHERE name='$searchResult'";
                            $result=mysqli_query($conn,$sql);
                            $numRows=mysqli_num_rows($result);
                            $row=mysqli_fetch_assoc($result);
                            $user_id_in_URL=$_GET['user_id'];
                            // echo "<h1>".$row["id"]."</h1>";
                            error_reporting(E_ALL ^ E_WARNING); 
                            if($_SESSION['loggedin']==true && isset($_SESSION['loggedin'])){
                                $isStateExistSql="SELECT name FROM `favs` WHERE `name`='$searchResult' AND `user_id`=$user_id_in_URL";
                                $result2=mysqli_query($conn,$isStateExistSql);
                                $numRows2=mysqli_num_rows($result2);
                                if($numRows2==0){
                                    echo '<form style="margin-left:auto;" method="POST" action="'.$_SERVER["REQUEST_URI"].'">
                                        <button type="submit" style="background:none; outline:none;"><i class="fas fa fa-heart-o"></i></button>
                                    </form>';
                                }
                                else{
                                    echo '<div style="margin-left:auto;">
                                            <a href="delete1.php?deleteid='.$row["id"].'&user_id='.$user_id_in_URL.'"><button type="submit" style="background:none; outline:none;"><i class="fas fa fa-heart"></i></button></a>
                                        </div>';
                                }
                            }
                            else{
                                echo '
                                        <button style="outline:none; margin-left:auto; background:none; font-size:3rem; cursor:pointer" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-heart-o"></i></button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title" style="font-size:3rem; text-transform:captalize;" id="exampleModalCenterTitle">You are not Logged in</h1>
                                                    <button type="button" style="outline:none;" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div style="font-size:2rem" class="modal-body text-left">
                                                    Please Log in to add to favorites
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                            }
                        echo '</div>
                        <p class="map-icon"><i class="fa fa-map-marker"></i> India</p>
                        <div class="swiper mySwipper review-slider">
                            <div class="swiper-wrapper">';
                                foreach($state['img'] as $img){
                                    echo '<div class="swiper-slide">
                                        <div class="box">
                                            <img src="'.$img.'" alt="'.$state["name"].'">
                                        </div>
                                    </div>
                                    ';
                                }
                            echo '</div>
                            <div style="color:white;" class="swiper-button-next"></div>
                            <div style="color:white;" class="swiper-button-prev"></div>
                        </div>
                        <h2>About</h2>
                        <p>'.$state["about"].'</p>
                        <h2>Climate</h2>
                        <p>'.$state["climate"].'</p>
                        <h2>History</h2>
                        <p>'.$state["history"].'</p>
                        <h2>Best Time to visit</h2>
                        <p>'.$state["time"].'</p>
                        <h2>Food</h2>
                        <p>'.$state["food"].'</p>';

                        if($_SERVER["REQUEST_METHOD"]=="POST")
                        {
                            $place_name=$state["name"];
                            $place_about=$state["about"];
                            $place_image=$state["img"][0];
                            $place_name=$mysqli -> real_escape_string($place_name);
                            $place_about=$mysqli -> real_escape_string($place_about);
                            $place_image=$mysqli -> real_escape_string($place_image);
                            $user_id=$_SESSION["user_id"];
                            $sql="INSERT INTO `favs` (`name`, `about`, `image`,`user_id`) VALUES ('$place_name', '$place_about', '$place_image','$user_id')";
                            $result=mysqli_query($conn,$sql);
                            // echo("<script>location.href = 'http://localhost/placify/favorites.php';</script>");
                            $user_id_in_URL=$_GET["user_id"];
                            echo("<script>location.href = 'http://localhost/placify/search.php?search=$place_name&user_id=$user_id_in_URL';</script>");
                        }

                        echo '<h2>Top Places to visit in '.$state['name'].'</h2>
                        <div class="tourist-container">';
                            foreach($state['tourist'] as $tourist){
                                echo '<div class="box">
                                        <img src="'.$tourist["images"].'" alt="'.$tourist["name"].'">
                                        <div class="content">
                                            <h3><b style="text-transform:uppercase;"><i class="fa fa-map-marker" aria-hidden="true"></i> '.$tourist['name'].'</b></h3>
                                            <a href="search.php?search='.$tourist["name"].'&user_id='.$_GET["user_id"].'" class="btn">Explore</a>
                                        </div>
                                    </div>';
                            }
                    echo '</div>
                    ';
                }
            }

            foreach($json["state"] as $state){
                foreach($state["tourist"] as $tourist){
                    if($searchResult==$tourist["name"]){
                        $showJumbotronWhenSearchFailed=true;
                        echo '
                        <div class="heading">
                        <h1>'.$tourist["name"].'</h1>';
                        $sql="SELECT * FROM `favs` WHERE name='$searchResult'";
                        $result=mysqli_query($conn,$sql);
                        $numRows=mysqli_num_rows($result);
                        $row=mysqli_fetch_assoc($result);
                        $user_id_in_URL=$_GET['user_id'];
                        // echo "<h1>".$row["id"]."</h1>";
                        error_reporting(E_ALL ^ E_WARNING); 
                        if($_SESSION['loggedin']==true && isset($_SESSION['loggedin'])){
                            $isStateExistSql="SELECT name FROM `favs` WHERE `name`='$searchResult' AND `user_id`=$user_id_in_URL";
                            $result2=mysqli_query($conn,$isStateExistSql);
                            $numRows2=mysqli_num_rows($result2);
                            if($numRows2==0){
                                echo '<form style="margin-left:auto;" method="POST" action="'.$_SERVER["REQUEST_URI"].'">
                                    <button type="submit" style="background:none; outline:none;"><i class="fas fa fa-heart-o"></i></button>
                                </form>';
                            }
                            else{
                                echo '<div style="margin-left:auto;">
                                        <a href="delete1.php?deleteid='.$row["id"].'&user_id='.$user_id_in_URL.'"><button type="submit" style="background:none; outline:none;"><i class="fas fa fa-heart"></i></button></a>
                                    </div>';
                            }
                        }
                        else{
                            echo '
                                    <button style="outline:none; margin-left:auto; background:none; font-size:3rem; cursor:pointer" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-heart-o"></i></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title" style="font-size:3rem; text-transform:captalize;" id="exampleModalCenterTitle">You are not Logged in</h1>
                                                <button type="button" style="outline:none;" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div style="font-size:2rem" class="modal-body text-left">
                                                Please Log in to add to favorites
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                ';
                            }

                            
                            echo '</div>
                            <p class="map-icon"><i class="fa fa-map-marker"></i> '.$tourist["state"].', India</p>
                            <div class="image-container">
                                <img src="'.$tourist['images'].'" alt="'.$tourist['name'].'">
                            </div>
                            <h2>About</h2>
                            <p>'.$tourist["info"].'</p>';

                            if($_SERVER["REQUEST_METHOD"]=="POST")
                            {
                                $place_name=$tourist["name"];
                                $place_about=$tourist["info"];
                                $place_image=$tourist["images"];
                                $place_name=$mysqli -> real_escape_string($place_name);
                                $place_about=$mysqli -> real_escape_string($place_about);
                                $place_image=$mysqli -> real_escape_string($place_image);
                                $user_id=$_SESSION["user_id"];
                                $sql="INSERT INTO `favs` (`name`, `about`, `image`,`user_id`) VALUES ('$place_name', '$place_about', '$place_image','$user_id')";
                                $result=mysqli_query($conn,$sql);
                                $user_id_in_URL=$_GET["user_id"];
                                echo("<script>location.href = 'http://localhost/placify/search.php?search=$place_name&user_id=$user_id_in_URL';</script>");
                            }

                            echo '<a href="'.$tourist["location"].'" target="_blank" class="btn">Explore on Map</a>
                        ';
                    }
                }
            }
            if($showJumbotronWhenSearchFailed==false){
                echo '
                <div class="my-4 jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">No Results Found</h1>
                        <p class="lead">Make sure that all words are spelled correctly.</p>
                    </div>
                </div>
                ';
            }
        ?>
    </div>
    <?php
        include 'partials/_footer.php'
    ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
    let toggleBtn=document.querySelector('.fas');
    toggleBtn.addEventListener('click',()=>{
        toggleBtn.classList.toggle('fa-heart-o')
        toggleBtn.classList.toggle('fa-heart')
    })
</script>
<script src="./assets/js/script.js"></script>
<script src="./assets/js/suggestion.js"></script>
</html>