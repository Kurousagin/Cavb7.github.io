<?php
session_start();
include('conection.php');

if (empty($_POST['login']) || empty($_POST['senha'])) {
    header('location: index.php');
    exit();
}

$usuario = $_POST['login'];
$senha =  $_POST['senha'];

//echo "$usuario $senha";

$bancologin = "";
$bancosenha = "";

try {
    $stmt = $pdo->prepare("select login_user, senha 
    from usuario where login_user= '$usuario' 
    and senha ='$senha'");
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
        $bancologin = $row["login_user"];
        $bancosenha = $row["senha"];
    }
} catch (PDOException $e) {
    echo "ERRo" . $e->getMessage();
}


if ($usuario == $bancologin && $senha == $bancosenha) {
    $_SESSION['Login'] = $usuario;
    header('location: user.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;   
    unset($_SESSION['Login']);
    session_destroy();
    header('location:index.php');
    exit();
}

