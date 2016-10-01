<?php
   
    session_start();
    $key = $_POST["searchkey"];
    $_SESSION['key'] = $key;
    header('Location: ../search-results.php');
?>