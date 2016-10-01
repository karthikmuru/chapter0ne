<?php
    session_start();
    $pusername = $_SESSION['puser'];
?>

<html>
    <head>
        <title>Test page</title>
        <link rel="stylesheet" href="scss/home.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header id="main-navigation">
                <div class="nav-bar">
                    <?php
                        /*session_start();
                        $pusername = $_SESSION['puser'];*/
                        echo "<p>Welcome     <strong>";
                        echo $pusername;
                        echo "</strong></p>";
                    ?>
                    <a href="#"><?php  ?></a>            
                </div>
            </header>
            <div class="inner-container">
               <div class="logo">
                    <a href="index.php">ChapterOne</a>
                </div>
                <h2>Publish Book</h2>
                <form method="post" action="php/upload.php" enctype="multipart/form-data">
                    <p>Select Cover Picture:</p>
                    <input type="file" name="image" required>
                    <p>Select Author:</p>
                    <input type="text" name="author" required>
                    <p>Select Title:</p>
                    <input type="text" name="title" required>
                    <p>Select Price:</p>
                    <input type="number" name="price" required>
                    <p>Select E-Book:</p>
                    <input type="file" name="pdf" required>
                    <br><br>
                    <input type="submit" name="pub">
                </form> 
                <footer>
            <br>
            <p>&copy; ChapterOne LLC.</p>
            <br>
        </footer>     
            </div>
        </div>
        
    </body>
</html>