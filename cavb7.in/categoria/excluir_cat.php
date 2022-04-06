<?php
    $id = $_GET['id'];
    
    include("../bd/conection.php");

    $stmt = $pdo->prepare("delete from tbcategoria where idCategoria='$id'");	
	$stmt ->execute();

    header("location:categoria.php");
?>