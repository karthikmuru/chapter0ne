<?php
    //connection string
     $conn = mysqli_connect('localhost','root','Muru123','bookstore');
?>  
<html>
    <head>
        <title>Test page</title>
        <link rel="stylesheet" href="scss/home.css">
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
                    <img src="images/mobile1.jpg" alt="">
                </div>
                </div>               
            </div>
        </div>
    </body>
</html>