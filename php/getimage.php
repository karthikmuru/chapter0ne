<?php
    $title = $_SESSION['search-key'];
    $query = "SELECT image from book where title = '$title'";
    $conn = mysqli_connect('localhost','root','Muru123','bookstore');
    $result = mysqli_query($conn,$query);
    $row = mysql_fetch_assoc($result);
    header("Content-types: image/png");
    echo $row['image'];
?>