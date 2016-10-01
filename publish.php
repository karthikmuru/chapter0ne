<?php
    $isset = false;
    $loginerror = false;
    session_start();
    $isLogin = isset($_POST["login"]);
    if($isLogin)
    {
        $isset = true;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['puser'] = $username;
        $_SESSION['ppassword'] = $password;
        $conn = mysqli_connect('localhost','root','Muru123','bookstore');
        if($conn)
        {
            $query = "SELECT * from account_publisher WHERE username ='$username' AND password='$password' ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)==1)
            {
                $loginerror = false;
                header('Location: publisher-home.php');   
            }
            else
            {
                $loginerror = true;
                //header['Location: ../publish.php'];
            }
        }            
    }
?>
<html>
    <head>
        <title>Test page</title>
        <link rel="stylesheet" href="scss/home.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
        <link rel="stylesheet" href="scss/publish-login.css">
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
                <div class="publisher-login">
                    <form class="login" method="post">
                       <h1>Publisher Login</h1>
                        <p>Username</p>
                        <input type="text" name="username" required>
                        <p>Password</p>
                        <input type="password" name="password" required><br><br>
                        <input type="submit" name="login" value="Login">
                        <?php
                            if(($loginerror) && $isLogin)
                            {
                        ?>
                            <p id="loginerror" style="color:red;">Invalid username or Password</p>
                        <?php
                            }
                        ?>
                     </form>                  
                </div>      
            </div>
        </div>
    </body>
</html>

