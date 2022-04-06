<?php

include("../bd/conection.php");

$name =$_POST['txName'];
$email = $_POST['txEmail'];
$endereco = $_POST['txEndereco'];
$tel = $_POST['txTel'];





$stmt = $pdo->prepare("update usuario set values('$name','$email','$endereco','$tel');");
$stmt->execute();

unset($_SESSION["login"]);
session_destroy();


header("location:info_user.php");
