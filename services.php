<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <title>Placify | Services</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />  <!-- Hiking icon and food icon-->
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" /> <!-- Swiper -->

    <style>
        #services{
            margin-top: 5rem;
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
    <!-- services section starts -->
    <section class="services" id="services">
        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">
            <div class="box">
                <i class="fa fa-hotel"></i>
                <h3>Affordable hotels</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis eveniet at earum officiis iste voluptas autem quos ea dolorum architecto.</p>
            </div>
            <div class="box">
                <span class="material-symbols-outlined" id="food-icon">
                    restaurant
                </span>
                <h3>Food and Drinks</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis eveniet at earum officiis iste voluptas autem quos ea dolorum architecto.</p>
            </div>
            <div class="box">
                <i class="fa fa-bullhorn"></i>
                <h3>Safety Guide</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis eveniet at earum officiis iste voluptas autem quos ea dolorum architecto.</p>
            </div>
            <div class="box">
                <i class="fa fa-globe"></i>
                <h3>Around the World</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis eveniet at earum officiis iste voluptas autem quos ea dolorum architecto.</p>
            </div>
            <div class="box">
                <i class="fa fa-plane"></i>
                <h3>Fastest Travel</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis eveniet at earum officiis iste voluptas autem quos ea dolorum architecto.</p>
            </div>
            <div class="box">
                <span class="material-symbols-outlined" id="hiking-icon">
                    hiking
                </span>
                <h3>Adventure</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis eveniet at earum officiis iste voluptas autem quos ea dolorum architecto.</p>
            </div>
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