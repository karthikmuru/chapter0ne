<html>
<?php
    //connection string
     $conn = mysqli_connect('localhost','root','Muru123','bookstore');
?>       
<head>
        <title>Search results</title>
        <link rel="stylesheet" href="scss/home.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="scss/resultsview.css">
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
           <div class="logo"> 0
                 <a href="index.php">ChapterOne</a>
            </div>
            <div class="search">
                <form action="php/search.php" method="post">
                    <input type="text" name="searchkey" id="search-field">
                    <input type="submit" value="Search" name="search" id="search-button">
                </form>   
            </div> 
            <div class="search-count">
                <p>Search Results for '
                    <?php
                        session_start();
                        $key = $_SESSION['key'];
                        echo $key;
                        echo " ':";
                        $query = "SELECT * from book where title LIKE '%$key%'";
                        $result = mysqli_query($conn,$query);
                        echo mysqli_num_rows($result);
                    ?>
                </p>    
            </div>
            <div class="search-result-container">
                <?php
                    if($result)
                    {
                        if(mysqli_num_rows($result)>0)
                        {
                            while($row = mysqli_fetch_array($result))
                            {
                                $_SESSION['search-key'] = $row['title'];
                                $target_dir = "images/";
                                $target_file = $target_dir . $row['image'];
                ?>
                <div class="item">
                    <div class="cover-image">
                        <a href="book-view.php?id=<?php echo $row['title'] ?>"><img src="<?php echo  $target_file ?>" alt="cover" ></a>
                    </div>
                    <div class="book-details" >
                        <?php
                            echo "<p>Title : ";
                            echo $row['title'];
                            echo "</p>";
                            echo "<p>Author : ";
                            echo $row['author'];
                            echo "</p>";
                            echo "<p>Price : ";
                            echo $row['price'];
                            echo "</p>";
                            echo "<p>Publisher : ";
                            echo $row['publisher'];
                            echo "</p>";
                        ?>
                    </div>
                </div>
                <?php
                            }
                        }
                        else
                        {
                            echo"No Books found";
                        }
                    }
                ?>
        </div> 
    </div>               
</div>   
</body> 
</html>