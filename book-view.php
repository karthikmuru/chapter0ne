<?php    

    session_start();
    $id = $_GET['id'];
    $_SESSION['key-book'] = $id;
    $conn = mysqli_connect('localhost','root','Muru123','bookstore');
    $query = "select * from book where title='$id'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $target_dir = "images/";
    $target_file = $target_dir . $row['image'];
?>
<html>
    <head>
        <title>Test page</title>
        <link rel="stylesheet" href="scss/home.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="scss/bookview.css">
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
                <div class="book-view">
                <?php echo "<h1>";
                        echo $row['title'];
                        echo "</h1>";
                ?>
                <div class="book">
                    <div class="book-cover">
                        <img id="cover" src="<?php echo  $target_file ?>" alt="">
                    </div>
                    <div class="book-details">
                        <?php   
                        echo "</p>";
                        echo "<p>Author : ";
                        echo $row['author'];
                        echo "</p>";
                        echo "<p>Publisher : ";
                        echo $row['publisher'];
                        echo "</p>";
                        echo "<p>Price : ";
                        echo $row['price'];
                        echo "</p>";
                        ?>
                        <br>
                        <a href="pdf/<?php echo $row['file'] ?>">Download</a>
                    </div>
                </div>
            </div>                
            </div>
        </div>
    </body>
</html>