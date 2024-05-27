<?php session_start(); // Start the session ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="assets/css/leadmark.css">
    
</head>
<!-----
<style> 
.username {
    color: orange;
}
</style>
---->
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/logo.png" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <?php
                    if (isset($_SESSION['username'])) { // Check if user is logged in
                        echo "<li class='nav-item'>
                              <a href='http://localhost/final%20project/htmlandcss/pubg-csgo.html' class='ml-4 nav-link btn btn-primary btn-sm rounded'>Register Now</a>
                          </li>";
                    }
                    ?>

                    <li class="nav-item">
                        <a class="nav-link" href="#service">Analysis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['username'])) { // Check if user is logged in
                            echo "<span class='nav-link'>Welcome " . $_SESSION['username'] . "</span> | 
                            <form action='http://localhost/final%20project/htmlandcss/database%20connection/logout.php' method='post' style='display:inline;'>
                                <button type='submit' class='ml-4 nav-link btn btn-primary btn-sm rounded'>Log Out</button>
                            </form>";
                        } else {
                            echo '<a href="http://localhost/final%20project/htmlandcss/signin-signup.html" class="ml-4 nav-link btn btn-primary btn-sm rounded">SignIn/SignUp</a>';
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>


   
    <header class="header">
        <div class="overlay">
            <h1 class="subtitle">961</h1>
            <h1 class="title">Gaming</h1>  
        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <section id="service" class="section pt-0">
        <div class="container">
          <h6 class="section-title text-center">About Games</h6>
          <h6 class="section-subtitle text-center mb-5 pb-3">CSGO - PUBG</h6>
      
          <div class="row justify-content-center">  <div class="col-md-4">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <small class="text-primary font-weight-bold">01</small>
                  <h5 class="card-title mt-3">CSGO</h5>
                  <p class="mb-0">
                    Counter-Strike: Global Offensive (CS:GO) is a 2012 multiplayer tactical first-person shooter developed by Valve and Hidden Path Entertainment.
                    It is the fourth game in the Counter-Strike series. Developed for over two years, Global Offensive was released for OS X, PlayStation 3, Windows, and Xbox 360 in August 2012, and for Linux in 2014.
                    Valve still regularly updates the game, both with smaller balancing patches and larger content additions.
                    <br>
                    <a href="https://www.counter-strike.net/news">click here</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <small class="text-primary font-weight-bold">02</small>
                  <h5 class="card-title mt-3">PUBG</h5>
                  <p class="mb-0">
                    PUBG: Battlegrounds (previously known as PlayerUnknown's Battlegrounds) is a battle royale game developed by PUBG Studios and published by Krafton.
                    The game, which was inspired by the Japanese film Battle Royale (2000), is based on previous mods created by Brendan "PlayerUnknown" Greene for other games,
                    and expanded into a standalone game under Greene's creative direction. It is the first game in the PUBG Universe series.
                    <br>
                    <a href="https://pubg.com/en-na/main">click here</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    <h6 class="section-title mb-0">About website</h6>
                    <h6 class="section-subtitle mb-4">961 gaming website</h6>
                    <p >is a gaming website created to help every gamer especially from middleeast to support them in competitive modes to prove that everyone from anywhere can be a professional gamer</p>
                    <img src="assets/imgs/about.jpg" alt=""  class="w-100 mt-3 shadow-sm">
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row">
                        <div class="col-6">
                            <img src="assets/imgs/about-1.png" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-6">
                            <img src="assets/imgs/about-2.jpg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-12 mt-4">
                            <p>Welcome to our gaming website! We help gamers improve their skills in FIFA 23, CS:GO, and PUBG on Steam. Join our community to gain knowledge from expert guides, tutorials, and analysis. </p>
                            <p><b>Connect with like-minded players in our forums, where you can discuss tactics and form teams.</b><br>
                            </p>
                            <p> Participate in our tournaments and leagues to test your abilities against top competition. We also provide personalized coaching and support to help you reach your full potential.
                                 Level up your game with us today!</p>
                        </div>
                    </div>
                </div>
            </div>              
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Contact Section -->
    <section id="contact" class="section has-img-bg pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 my-3">
                    <h6 class="mb-0">Phone</h6>
                    <p class="mb-4">+961 81 727 707</p>

                    <h6 class="mb-0">Address</h6>
                    <p class="mb-4">Lebanon , Beirut</p>

                    <h6 class="mb-0">Email</h6>
                    <p class="mb-0">hussein-m2000@hotmail.com</p>
                    <p></p>
                </div>
                <div class="col-md-7">
                    <form>
                        <h4 class="mb-4">your feedback</h4>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" placeholder="Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="email" class="form-control text-white rounded-0 bg-transparent" name="Email" placeholder="Email">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="" cols="30" rows="4" class="form-control text-white rounded-0 bg-transparent" placeholder="Message"></textarea>

                            </div>
                            <div class="form-group col-12 mb-0">
                                <button type="submit" class="btn btn-primary rounded w-md mt-3">Send</button>
                            </div>                          
                        </div>                          
                    </form>
                </div>
            </div>
            <!-- Page Footer -->
            <footer class="mt-5 py-4 border-top border-secondary">
                <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>,  <a href="https://www.facebook.com/moussawi99/" target="_blank">Hussein Moussawi</a> , All rights reserved </p>     
            </footer>
            <!-- End of Page Footer -->  
        </div>
    </section>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
</body>
</html>
