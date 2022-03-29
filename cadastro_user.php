<?php

include("conection.php");
$usuario = $_POST['txlogin'];
$senha = $_POST['txsenha'];




$stmt = $pdo->prepare("insert into usuario values(null,'$usuario','$senha');");
$stmt->execute();

unset($_SESSION["login"]);
session_destroy();


header("location:user.php");
