<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <title>Placify | Destinations</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />  <!-- Hiking icon and food icon-->

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
            margin:5.5rem auto!important;
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
                font-size: 2rem;
                padding: 0.25rem 0.65rem!important;
            }
        }

        
        .btn{
            border-radius: 0.5rem;
            color: white;
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
            margin-top:0.49rem!important;
        }

        .box h5{
            font-size: 1.4rem;
            text-transform: uppercase;
            color: orange;
        }
    </style>
</head>
<body>
    <?php
        include 'partials/_dbconnect.php'
    ?>
    <?php
        include 'partials/_header.php'
    ?>
    
    <section class="container category" id="fav-heading">
        <h1 class="heading-1">
            <span>D</span>
            <span>E</span>
            <span>S</span>
            <span>T</span>
            <span>I</span>
            <span>N</span>
            <span>A</span>
            <span>T</span>
            <span>I</span>
            <span>O</span>
            <span>N</span>
            <span>S</span>
        </h1>

        <div class="box-container">
            <?php
                $searchResult = ucwords($_GET['search']);
                // $json_data = file_get_contents("./Tourist-JSON/touristplace.json");
                $json_data = file_get_contents("touristplace.json");
                $json = json_decode($json_data, true);
                foreach($json["state"] as $state){
                    foreach($state["tourist"] as $tourist)
                    echo '<div class="box">
                            <img src="'.$tourist["images"].'" alt="'.$tourist["name"].'">
                            <div class="content">
                                <h3><i class="fa fa-map-marker" aria-hidden="true"></i> '.$tourist["name"].'</h3>
                                <h5>'.$tourist["state"].', India</h5>
                                <p>'.substr($tourist["info"],0,85).'..........</p>
                                <a href="search.php?search='.$tourist["name"].'&user_id='.$_SESSION["user_id"].'" class="btn">Read More</a>
                            </div>
                        </div>';
                }
                
            ?>
        </div>
    </section>
    <?php
        include 'partials/_footer.php'
    ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="./assets/js/script.js"></script>
<script src="./assets/js/suggestion.js"></script>
</html>