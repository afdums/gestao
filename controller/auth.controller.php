<?php
    if(!$_SESSION['loginEmail']){
        header('Location: ../index.php');
        exit;
    }
?>