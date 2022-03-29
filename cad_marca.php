<?php

    $marca = $_POST['txMarca'];
    $idmarca = $_POST['txIdmarca'];

    include("conection.php");



     $stmt = $pdo->prepare("insert into marca values(null,'$marca')");

    
	$stmt ->execute();
    header("location:marca.php");