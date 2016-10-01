<?php

    
    $id = $_GET['id'];
    $conn = mysqli_connect('localhost','root','Muru123','bookstore');
    $target_dir = "../pdf/";
    $query = "select * from book where title='$id'";
    $filename = $row['file']; 
?>