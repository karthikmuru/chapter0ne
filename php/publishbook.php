<?php
    session_start();
    $pusername = $_SESSION['puser'];
    $conn = mysqli_connect('localhost','root','Muru123','bookstore');
    $submit = isset($_POST['pub']);
    if($submit)
    {
         $author=$_POST['author'];
         $title=$_POST['title'];
         $price=$_POST['price'];                  
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
        $image_name = addslashes($_FILES['image']['name']);
        $sql = "INSERT INTO book VALUES ('$image','$image_name','$author','$title',$price,'$pusername')";
        $result=mysqli_query($conn,$sql);
        if (!$result)
        { // Error handling
            echo "Something went wrong! :("; 
        }
        else
        {
            header('Location: ../search-results.php');
        }
        echo "end";
    }
?>