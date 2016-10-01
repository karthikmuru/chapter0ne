<?php
    session_start();
    $pusername = $_SESSION['puser'];
    $conn = mysqli_connect('localhost','root','Muru123','bookstore');
    $submit = isset($_POST['pub']);
    if($submit)
    {
        
        //header('Location: ../search-results.php');
         $author=$_POST['author'];
         $title=$_POST['title'];
         $price=$_POST['price'];
        
        $temp = explode(".", $_FILES["image"]["name"]);
        $new = round(microtime(true)) . '.' . end($temp);
        $temp = explode(".", $_FILES["pdf"]["name"]);
        $new1 = round(microtime(true)) . '.' . end($temp);       
        $target_dir = "../images/";
        $target_dir1 = "../pdf/";
        $target_file = $target_dir . $new;
        $target_file1 = $target_dir1 . $new1;
        $uploadOk = 1;
        $uploadOk1 = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $fileType = pathinfo($target_file1,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
       
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file1) )
        {
            $sql = "INSERT INTO book VALUES ('$new','$new1','$author','$title',$price,'$pusername')";
            $result=mysqli_query($conn,$sql);
            if (!$result)
            { // Error handling
                echo "Something went wrong! :("; 
            }
            else
            {
            //header('Location: ../publisher-home.php');
            }
            header('Location: ../publisher-home.php');
        }
        else 
        {
            echo "Sorry, there was an error uploading your file.";
        }
        
        
    }
?>