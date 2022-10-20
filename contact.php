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
</head>
<body>
    <?php
        include 'partials/_header.php'
    ?>
    <!-- contact section starts --> 
    <div class="container-contact" style="margin: 6rem 0;">
        <section class="contact" id="contact">
            <h1 class="heading">
                <span>c</span>
                <span>o</span>
                <span>n</span>
                <span>t</span>
                <span>a</span>
                <span>c</span>
                <span>t</span>
            </h1>

            <div class="row">
                <div class="image">
                    <img src="./images/contact-img.svg" alt="">
                </div>

                <form action="/placify/partials/_contact.php" method="POST">
                    <div class="inputBox">
                        <input type="text" name="name" placeholder="Enter Your Name" required>
                        <input type="email" name="email" placeholder="Enter Your Email" required>
                    </div>
                    <div class="inputBox">
                        <input type="number" name="number" placeholder="Enter Your Mobile Number" required>
                        <input type="text" name="concerns" placeholder="Enter Your Concerns" required>
                    </div>
                    <textarea placeholder="Any Message to Us" name="message" cols="30" rows="10" required></textarea>
                    <input type="submit" class="btn" value="Submit">
                </form>
            </div>
        </section>
    </div>

    <?php
        include 'partials/_footer.php'
    ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="./assets/js/script.js"></script>
<script src="./assets/js/suggestion.js"></script>
</html>