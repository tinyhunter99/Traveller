<?php
    session_start();
    error_reporting(E_ALL ^ E_WARNING); 
    echo '<header><div id="menu-bar" class="fa fa-bars">

    </div>

    <a href="/placify" class="logo"><span>P</span>lacify</a>
    <nav class="navbar">';
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
            echo '<p id="usernameParaNav" style="font-size:3rem; color:orange; text-transform:none; text-align:center;">'.$_SESSION["username"].'</p>';
        }
        echo '<a href="/placify" class="close-menu">Home</a>
        <a href="destinations.php" class="close-menu">Destinations</a>
        <a href="services.php" class="close-menu">Services</a>
        <a href="contact.php" class="close-menu">Contact</a>
        <a href="favorites.php" class="close-menu">Favorites</a>
    </nav>

    <div style="display:flex;" class="icons">
        <i class="fa fa-search" id="search-btn"></i>';
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
            echo '
            <a href="partials/_logout.php"><button style="background:none; cursor:pointer; color:white;" id="logoutBtn"><i style="font-size:2.8rem" class="fa fa-sign-out"></i></button></a>
            <p id="usernamePara" style="text-transform:none; font-size:1.8rem; margin:0rem; color:white;"><em style="text-transform:none;">'.$_SESSION['username'].'</em></p>';
        }else{
            echo '<i class="fa fa-user" id="login-btn"></i>';
        }
    echo '</div>
    <form method="GET" action="search.php" class="search-bar-container" autocomplete="off">
        <div>
            <input type="search" name="search" id="search-bar" placeholder="search here...">
            <input type="hidden" name="user_id" value="'.$_SESSION['user_id'].'">
            <button style="background: none;" type="submit"><label for="search-bar" class="fa fa-search"></label></button>
        </div>
        <ul class="list"></ul>
    </form>
    
    <!-- Login form container -->
    <div class="login-form-container form-box">
        <i class="fa fa-times" id="form-close"></i>
        <form id="login-form" action="/placify/partials/_handleLogin.php" method="POST">
            <h3>Login</h3>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>
            <input type="password" class="showPassword" name="password" id="password" placeholder="Enter your password" required>
            <label style="color:rgb(51,51,51); font-size: 1.25rem;" for="checkbox">Show Password</label>
            <input style="width: 5%; position: relative; top: 0.3rem;" type="checkbox" name="checkbox" onclick="togglePassword()">
            <input type="submit" name="submit" value="Login now" class="btn">
            <!--<p>forget password? <a href="">click here</a></p>-->
            <p>don\'t have account? <a href="register.php">register now</a></p>

            <!--<p id="strike">or</p>
            <button type="submit" class="btn-google"><i class="fa fa-google"></i> Log in with Google</button>
            <button type="submit" class="btn-facebook"><i class="fa fa-facebook"></i> Log in with Facebook</button>-->

        </form>
    </div>
    
    </header>';


?>