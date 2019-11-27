<?php
    session_start();
    define('security',true);
    include_once('../config/connect.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
    if(isset($_SESSION['mail']) && isset($_SESSION['pass'])){
        $sql=mysqli_query($conn,"DELETE FROM user WHERE user_id=$id");
        header('location:index.php?page_layout=user');

    }else{
        header('location:index.php');
    }
?>