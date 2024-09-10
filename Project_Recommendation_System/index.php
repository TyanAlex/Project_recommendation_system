<!-- <!DOCTYPE html>
<html lan="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Web_Page</title>
    </head> -->

<?php
    include 'dbh.php'; 
?>

<?php
    include 'header.php';
?>
    <body class="indexBody">

        <?php
            include 'navbar.php';
        ?> 

        <!-- navbar -->
        <!-- <div class="navbarContainer">
            <div class="navbar">
                <span class="logo"><img class="logoImage" src="./images/logo.svg"></img></span>
                <ul class="navbarList">
                    <li>Home</li>
                    <li>About</li>
                    <li>Example</li>
                    <li>Contacts</li>
                </ul>
            </div>
        </div> -->


        <!-- intro(get started + fancy image) -->
        <main class="indexMain">
            <section class="intro">
                <!-- <div class="aboutWrap">
                    <img src="./images/network.png">
                </div> -->
                <div class="introContainer">
                    
                    
                    <!-- text -->
                    <div class="introText">
                        <!-- <img class="introDecor" src="./images/pngwing.com.png"/> -->
                        <!-- <div class="introTitle">
                            <span class="movingText firstIntroText">Project Ideas</span>
                            <span class="movingText secondIntroText">Generator</span>
                        </div> -->
                        <h1 class="introTitle">Project Ideas<br> 
                            <span class="">Generator</span>
                        </h1>
                        <p class="introParagraph">Find the most suitable projects for you with the help of artificial intelligence. <br>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                        <!-- button -->
                        <a href="sign.php" class="getStartedBtn">Get started</a>
                    </div>
                    <!-- image -->
                    <div class="aiImage">
                        <img class="ai"  alt="ai head" src="./images/artificial2.png"></img>
                    </div>        
                </div>
                
            </section>


            
            <!-- about (get started + image of how it works)-->
            <section class="about" id="about">
                <div class="aboutWrap">
                    <img src="./images/blueNodes.png">
                </div>
                <div class="aboutContent">
                    <h1 class="aboutUs">About Us</h1>
                    <p><span>projectLib</span> offers a diverse range of IT project recommendations, so you can progress, buld, and be clear with the 
                        most suitable projects for you to focus on right now</p>
                    <a href="sign.php" class="aboutBtn">Try Now</a>
                </div>
                <div class="aboutBranch">
                    <img src="./images/branch.svg">
                </div>
            </section>

            <!-- examples (diversity of projects + close look at A project) -->
            <!-- <section class="example">
                <div class="exampleText">
                    <h2>Check out our currently top 3 projects!</h2>
                </div>
                <div class="exampleContainer">
                    <div class="drop" style="--clr: #ff0f5b;">
                        <div class="exampleContent">
                            <h2>1</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                Alias temporibus recusandae nemo.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="drop" style="--clr: #0f63ff;">
                        <div class="exampleContent">
                            <h2>2</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                Alias temporibus recusandae nemo.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="drop" style="--clr: #25b700;">
                        <div class="exampleContent">
                            <h2>3</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                Alias temporibus recusandae nemo.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="cards" id="cards">
                <div class="cardsWrap">
                    <p class="cardsText">Check out the top 3 projects</p>
                    <div class="cardContainer">
                        <div class="card two">
                            <div class="content">
                                <h2>02</h2>
                                <h3>Stock Price Prediction</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Cumque debitis quidem omnis.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>

                        <div class="card one">
                            <div class="content">
                                <h2>01</h2>
                                <h3>Chatbot with python</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Cumque debitis quidem omnis.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>

                        <div class="card three">
                            <div class="content">
                                <h2>03</h2>
                                <h3>FPS game</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Cumque debitis quidem omnis.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="formSection" id="form">
                <div class="formContent">
                    <div class="content">
                        <h2>Sign In</h2>
                        <form action="" method="" class="form">
                                <div class="inputBox">
                                <input type="email" required placeholder="Email">
                                <!-- <i>Email</i> -->
                                </div>
                                <div class="inputBox">
                                    <input type="password" required placeholder="Password">
                                    <!-- <i>Password</i> -->
                                </div>

                                <div class="links">
                                    <a href="#">Forgot Password</a>
                                    <a href="#">SignUp</a>
                                </div>

                                <div class="inputBox">
                                    <input type="submit" value="Login">           
                                </div>
                        </form>
                    </div>
                </div>

                    <!-- <div class="signUpWrap">
                        <h1>New Here?</h1>
                        <p>Sign up and discover a great amount of new opportunities!</p>
                        <a href="#">Sign Up</a>
                    </div>  -->
            </section>
        </main>

        
        <script src="./javascript/navbar.js"></script>
        <script type="text/javascript" src="vanilla-tilt.js"></script>
        <script>
            VanillaTilt.init(document.querySelectorAll(".card"), {
                    max: 25,
                    speed: 400
                });
        </script>
    </body>
    <footer class="footer">
        <!-- contacts, socials, emails -->
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">our service</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">affiliate program</a></li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h4>get help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">shipping</a></li>
                            <li><a href="#">returns</a></li>
                            <li><a href="#">order status</a></li>
                            <li><a href="#">payment options</a></li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h4>online shop</h4>
                        <ul>
                            <li><a href="#">watch</a></li>
                            <li><a href="#">bag</a></li>
                            <li><a href="#">shoes</a></li>
                            <li><a href="#">hats</a></li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
</html>


<!-- add picture (coding space networks theme) -->
<!-- think of a logo -->
<!-- checkboxes -->
<!-- add animations -->