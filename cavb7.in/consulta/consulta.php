<?php

include("../bd/conection.php");

$cod = $_POST['pesquisa'];





$stmt = $pdo->prepare("select cod_prod from 
tbprodutos where cod_prod = '$cod ';");
$stmt->execute();

unset($_SESSION["login"]);
session_destroy();


header("location:../produto/exibicao.php");
