<?php
session_start();
include('validar.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user.css">
    <title>usuario.cavb7</title>
</head>

<body>
    <p><a href="logout.php">sair</a></p>
    <h1 class="coll"> Olá, <?php echo $_SESSION['Login']; ?>.</br> Bem vindo, oque deseja fazer  ?</h1>
    <?php

    include('menu.php');
    ?>






</body>

</html>