<?php
    $conn = mysqli_connect('localhost','root','Muru123','bookstore');
    $submit = isset($_POST['pub']);
    if($submit)
    {
        //header('Location: ../search-results.php');
         $username=$_POST['username'];
         $email=$_POST['email'];
         $password=$_POST['password'];
                            
        $sql = "INSERT INTO account_user VALUES ('$email','$username','$password')";
        $result=mysqli_query($conn,$sql);
        if (!$result)
        { // Error handling
            echo "Something went wrong! :("; 
        }
        else
        {
            header('Location: index.php');
        }
        echo "end";
    }
?>
<html>
    <head>
        <title>Test page</title>
        <link rel="stylesheet" href="scss/home.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header id="main-navigation">
                <div class="nav-bar">
                    <a href="user.php">Login</a>
                    <a href="#">SignUp</a>
                    <a href="publish.php">Publish</a>          
                </div>
            </header>
            <div class="inner-container">
               <div class="logo">
                    <a href="index.php">ChapterOne</a>
                </div>
                <h2>Signup</h2>
                <form method="post">
                    <p>Email Id:</p>
                    <input type="text" name="email">
                    <p>Username:</p>
                    <input type="text" name="username">
                    <p>Password:</p>
                    <input type="password" name="password">
                    <br><br>
                    <input type="submit" name="pub" value="Signup">
                </form>      
            </div>
        </div>
    </body>
</html>