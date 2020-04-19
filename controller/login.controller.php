<?php

    session_start();

    if(empty($_POST['loginEmail']) || empty($_POST['loginPassword'])) {
        $_SESSION['no_auth'] = true;
        header('Location: ../index.php');
        exit;
    }

    include("connection.controller.php");

    $loginEmail = mysqli_real_escape_string($connection, $_POST['loginEmail']);
    $loginPassword = mysqli_real_escape_string($connection, $_POST['loginPassword']);

    $query = "SELECT id FROM user WHERE user.email = '{$loginEmail}' AND user.password = md5('{$loginPassword}')";

    $result = mysqli_query($connection, $query);

    $row = mysqli_num_rows($result);

    $connection->close();

    if($row == 1) {
        $_SESSION['loginEmail'] = $loginEmail;
        header('Location: ../view/dashboard.view.php');
        exit;
    } else {
        $_SESSION['no_auth'] = true;
        header('Location: ../index.php');
        exit;
    }


?>