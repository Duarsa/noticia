<?php

session_start();

if((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true)){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}else{
    $logado = $_SESSION['email'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f7f7f7;
}

.navbar {
    overflow: hidden;
    background-color: #333;
}

.navbar a {
    float: left;
    display: block;
    color: #fff;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}

.active {
    background-color: #ffa500;
    color: white;
}

.contant {
    padding: 20px;
    text-align: center;
}

.contant h2 {
    margin: 0;
    padding: 0;
    font-size: 24px;
}

    </style>

</head>
<body>
    <div class="navbar">
    <a class="active" href="home.php">Home</a>
    <a href="#">Minha Conta</a>
    <a href="#">Atendimento</a>
    <a style="float:right" href="sair.php">Sair</a>
    </div>

    <div style="padding: 20px"></div>

    <div class="contant">
    <?php
        echo "<h2>Seja bem vindo ao Sistema <br> $logado </h2>"
    ?>
    </div>

</body>
</html>