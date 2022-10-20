<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <title>Placify</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />  <!-- Hiking icon and food icon-->
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" /> <!-- Swiper -->

    <style>
        .btn-google{
            display: inline-block;
            margin-top: 1.5rem;
            background: red;
            color: white;
            padding: 0.8rem 3rem;
            border: 0.2rem solid red;
            cursor: pointer;
            font-size: 1.7rem;
            border-radius: 0.5rem;
            display: block;
            width: 100%;
        }
        .btn-google:hover{
            background-color: #df0000;
        }
        .btn-google:active{
            background-color: #8b0000;
        }
        .btn-facebook{
            display: inline-block;
            margin-top: 1.1rem;
            background: blue;
            color: white;
            padding: 0.8rem 3rem;
            border: 0.2rem solid blue;
            cursor: pointer;
            font-size: 1.7rem;
            border-radius: 0.5rem;
            display: block;
            width: 100%;
            margin-bottom: 2rem;
        }
        .btn-facebook:hover{
            background-color: rgb(43, 43, 192);
        }
        .btn-facebook:active{
            background-color: #000070;
        }

        form #strike {
            display: flex;
            flex-direction: row;
            color: rgb(51,51,51);
            font-size: 1.6rem;
        }
        #strike:before, #strike:after{
            content: "";
            flex: 1 1;
            border-bottom: 1px solid rgb(51,51,51);
            margin: auto;
        }
        #strike:before {
            margin-right: 10px;
        }
        #strike:after {
            margin-left: 10px;
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
    
    <!-- Home Section starts -->
    <div class="container-home">
        <section class="home" id="home">
            <div class="content">
                <h3>Let's Explore Together</h3>
                <p>Discover and Explore new places with us, adventure awaits</p>
                <a href="#explore" class="btn">Explore More</a>
            </div>

            <div class="video-container">
                <video src="./images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
            </div>
        </section>
    </div>

    <section class="category" id="explore">
        <h1 class="heading" style="gap:1rem">
            <div>
                <span>p</span>
                <span>o</span>
                <span>p</span>
                <span>u</span>
                <span>l</span>
                <span>a</span>
                <span>r</span>
            </div>
            <span class="space"></span>
            <div>
                <span>c</span>
                <span>a</span>
                <span>t</span>
                <span>e</span>
                <span>g</span>
                <span>o</span>
                <span>r</span>
                <span>i</span>
                <span>e</span>
                <span>s</span>
            </div>
        </h1>
    
        <div class="box-container">
            <?php
                $searchResult = ucwords($_GET['search']);
                // $json_data = file_get_contents("./Tourist-JSON/touristplace.json");
                $json_data = file_get_contents("touristplace.json");
                $json = json_decode($json_data, true);
                foreach($json["state"] as $state){
                    echo '<div class="box">
                            <img src="'.$state["img"][0].'" alt="">
                            <div class="content">
                                <h3><i class="fa fa-map-marker" aria-hidden="true"></i> '.$state["name"].'</h3>
                                <p>'.substr($state["about"],0,85).'..........</p>
                                <a href="search.php?search='.$state["name"].'&user_id='.$_SESSION["user_id"].'" class="btn">Read More</a>
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