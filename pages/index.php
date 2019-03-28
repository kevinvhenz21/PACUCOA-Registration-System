<?php

session_start();

    if(!isset($_SESSION['p_user']) AND ($_SESSION['p_user_id'])){
        header("location:../login.php");
    }

    else{
        header('location: main.php');
    }

?>