<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">

    <title>Placify | Register</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />  <!-- Hiking icon and food icon-->
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" /> <!-- Swiper -->
    <style>
        .video-container video{
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            object-fit: cover;
            margin: 4.5rem 0;
            min-height: 100%;
        }
        .register-container{
            min-height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-container form{
            margin: 9.5rem 1.5rem 3rem;
            padding:1.5rem 2rem ;
            border-radius: 0.5rem;
            background-color: rgba(0, 0, 0, 0.5);
            width: 50rem;
        }
        .register-container form input{
            width: 100%;
            padding: 1rem;
            font-size: 1.7rem;
            color: rgb(51, 51, 51);
            margin: 0.6rem 0;
            border: 0.1rem solid rgba(0, 0, 0, 0.3);
            text-transform: none;
            border-radius: 0.5rem;
        }
        .register-container form label{
            color:white;
            font-size: 1.25rem;
        }
        .register-container form input[type="checkbox"]{
            width: 5%;
            position: relative;
            top: 0.3rem;
        }
        .register-container form input:focus{
            border: 0.15rem solid orange;
        }
        .btn{
            display: inline-block;
            margin-top: 1.2rem;
            background: orange;
            color: white;
            padding: 0.8rem 3rem;
            border: 0.2rem solid orange;
            cursor: pointer;
            font-size: 1.8rem;
            border-radius: 0.5rem;
        }
        .btn:hover{
            background-color: rgb(254, 183, 52);
            color: rgb(51, 51, 51);
        }
        .btn:active{
            background-color: rgb(185, 122, 4);
        }
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
            margin-top: 1.5rem;
            background: blue;
            color: white;
            padding: 0.8rem 3rem;
            border: 0.2rem solid blue;
            cursor: pointer;
            font-size: 1.7rem;
            border-radius: 0.5rem;
            display: block;
            width: 100%;
            margin-bottom: 3rem;
        }
        .btn-facebook:hover{
            background-color: rgb(43, 43, 192);
        }
        .btn-facebook:active{
            background-color: #000070;
        }

        .register-container form .btn{
            display: block;
            width: 100%;
            margin-bottom: 2rem;
        }
        form h1{
            text-align: center;
            font-size: 3.75rem;
            margin-bottom:1.5rem;
            color: white;
            font-weight: bolder;
        }

        form #strike {
            display: flex;
            flex-direction: row;
            color: white;
            font-size: 1.6rem;
        }
        #strike:before, #strike:after{
            content: "";
            flex: 1 1;
            border-bottom: 1px solid white;
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
    <div class="video-container">
        <video src="./images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

    <div class="register-container">
        <form id="register" method="POST" action="/placify/partials/_handleSignup.php">
            <h1>SIGN UP</h1>
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="text" name="username" placeholder="Enter your username" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <input type="password" class="showCPassword" name="cpassword" placeholder="Confirm password" required>
            <label for="checkbox">Show Password</label>
            <input type="checkbox" name="checkbox" onclick="toggleCPassword()">
            <button type="submit" name="submit" class="btn">Register</button>

            <!--<p id="strike">or</p>
            <button type="submit" class="btn-google"><i class="fa fa-google"></i> Sign up with Google</button>
            <button type="submit" class="btn-facebook"><i class="fa fa-facebook"></i> Sign up with Facebook</button>-->
        </form>
    </div>

    <?php
        include 'partials/_footer.php'
    ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="./assets/js/script.js"></script>
<script src="./assets/js/suggestion.js"></script>
</html>