
<!DOCTYPE html>
<?php
    include 'partials/_dbconnect.php'
?>
<?php
    include 'partials/_header.php'
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <title>Placify | MyFavorites</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />  <!-- Hiking icon and food icon-->
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" /> <!-- Swiper -->

    <style>
        *{
            text-transform: none;
        }
        header a{
            text-transform: none;
            text-decoration: none!important;
        }
        header{
            line-height: 1.5rem;
        }
        #fav-heading{
            margin:7.5rem auto!important;
        }
        .heading-1{
            text-align: center!important;
            padding: 2rem 0!important;
        }
        .heading-1 span{
            font-size: 3.5rem;
            background: rgba(255,165,0,0.2);
            color: orange;
            border-radius: 0.5rem!important;
            padding: 0.25rem 1rem!important;
            font-weight: 900!important;
        }
        @media only screen and (max-width:450px){
            .heading-1 span{
                font-size: 2.5rem;
            }
        }

        .card{
            width: 35rem;
            box-shadow: 0 0.25rem 1.5rem rgba(0,0,0,0.2);
            margin-top: 1.75rem;
        }
        .card h2{
            text-transform: uppercase;
            font-weight: bolder;
        }
        .card p{
            font-size: 1.7rem;
        }
        .card img{
            height: 23.2rem;
        }
        @media only screen and (max-width:451px){
            .card{
                margin: 2rem auto;
                width: 40rem;
            }
        }
        .btn{
            border-radius: 0.5rem;
            color: white;
        }
        .card form{
            display: inline-block;
        }

        .container .jumbotron .container h1{
            font-size: 6rem;
        }
        .container .jumbotron .container P{
            font-size: 3rem;
        }
        @media (max-width:480px){
            .container .jumbotron .container h1{
                font-size: 4rem;
            }
            .container .jumbotron .container P{
                font-size: 2rem;
            }
        }
        .icons p{
            margin-top:0.5rem!important;
        }
    </style>
</head>
<body>
    
    <div class="container" id="fav-heading">
        <h1 class="heading-1">
            <span>F</span>
            <span>A</span>
            <span>V</span>
            <span>O</span>
            <span>R</span>
            <span>I</span>
            <span>T</span>
            <span>E</span>
            <span>S</span>
        </h1>

        <div class="row">
            <?php
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                    $user_id=$_SESSION['user_id'];
                    $sql="SELECT * FROM `favs` WHERE `user_id`='$user_id'";
                    $result=mysqli_query($conn,$sql);
                    $numRows=mysqli_num_rows($result);
                    if($numRows==0){
                        echo '<div class="container">
                                <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                        <strong><h1 class="display-4 text-center" style="text-transform:uppercase;">Empty</h1></strong>
                                        <p class="lead text-center">No favorites added as of now</p>
                                    </div>
                                </div>
                            </div>;';
                    }
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $place_name=$row["name"];
                        $place_about=$row["about"];
                        $place_about=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $row["about"]);
                        $place_image=$row["image"];
                        
                        echo '
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="'.$place_image.'" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h2 class="card-title">'.$place_name.'</h2>
                                        <p class="card-text">'.substr($place_about,0,100).'......</p>
                                        <a href="search.php?search='.$place_name.'&user_id='.$user_id.'"><button type="button" class="btn btn-warning">Explore</button></a>
                                        <a href="delete.php?deleteid='.$row["id"].'"><button type="button" id="removeBtn" class="btn btn-danger" style="background-color:red;">Remove</button></a>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                }
                else
                {
                    echo '
                    
                    <div class="container">
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <strong><h1 class="display-4 text-center" style="text-transform:uppercase;">Missing favorite places?</h1></strong>
                                <p class="lead text-center">Please Login to see places you added previously</p>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>

    
    <?php
        include 'partials/_footer.php'
    ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="./assets/js/script.js"></script>
<script src="./assets/js/suggestion.js"></script>
</html>