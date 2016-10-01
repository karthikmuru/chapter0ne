<?php
    //connection string
    $conn = mysqli_connect('localhost','root','Muru123','bookstore');
?>  
<html>
    <head>
        <title>Test page</title>
        <link rel="stylesheet" href="scss/home.css">
        <link rel="stylesheet" href="scss/index.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oranienbaum" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header id="main-navigation">
                <div class="nav-bar">
                    <a href="user.php">Login</a>
                    <a href="user-signup.php">SignUp</a>
                    <a href="publish.php">Publish</a>
                </div>
            </header>
            <div class="inner-container">
               <div class="logo">
                    <a href="index.php">ChapterOne</a>
                </div>
                <div class="intro">
                </div> 
                <div class="search">
                    <form action="php/search.php" method="post">
                        <input type="text" name="searchkey" id="search-field">
                        <input type="submit" value="Search" name="search" id="search-button">
                    </form>   
                </div> 
                <div class="banner">
                    <div class="poster">
                        <img src="images/poster.jpg" alt="" id="cover">
                    </div>
                    <div class="poster1">
                        <img src="images/poster11.jpg" alt="" id="cover11">
                        <img src="images/poster12.jpg" alt="" id="cover12">
                        <img src="images/poster13.jpg" alt="" id="cover12">
                    </div>
                    <div class="poster2">
                        <img src="images/poster21.png" alt="" id="cover21">
                        <img src="images/poster22.jpeg" alt="" id="cover22">
                        <img src="images/poster23.jpeg" alt="" id="cover23">
                        <img src="images/poster24.png" alt="" id="cover24">
                    </div>
                    <div class="poster3">
                       <img src="images/poster31.jpg" alt="" id="cover31">
                        <img src="images/poster32.png" alt="" id="cover32">   
                    </div>
                </div>
                <br><br>
                <footer>
                    <br>
                    <p>&copy; ChapterOne LLC.</p>
                    <br>
                </footer>
            </div>               
        </div>
    </body>
</html>