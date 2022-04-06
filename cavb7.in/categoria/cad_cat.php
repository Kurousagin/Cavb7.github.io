<?php

    $categoria = $_POST['txCategoria'];
    $idCategoria = $_POST['txIdcategoria'];

    include("../bd/conection.php");
    $stmt = $pdo->prepare("insert into tbcategoria values(null,'$categoria')");

    
	$stmt ->execute();
    header("location:categoria.php");