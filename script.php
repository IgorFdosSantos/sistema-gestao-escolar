<?php
    require "scripts/set-session-messages.php";
    require "scripts/check-login-data.php";
    header("location: index.php");


    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    $cpf = $_POST['cpf'];
    $matricula = $_POST['matricula'];

    checkLoginData($userEmail, $userPassword);