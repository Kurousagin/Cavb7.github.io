<?php

include("../bd/conection.php");
$usuario = $_POST['txlogin'];
$senha = $_POST['txsenha'];
$name =$_POST['txName'];
$email = $_POST['txEmail'];
$endereco = $_POST['txEndereco'];
$tel = $_POST['txTel'];





$stmt = $pdo->prepare("insert into usuario values(null,'$usuario','$senha','$name','$email','$endereco','$tel ');");
$stmt->execute();

unset($_SESSION["login"]);
session_destroy();


header("location: user.php");
