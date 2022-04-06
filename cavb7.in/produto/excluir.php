<?php
    $id = $_GET['id'];
    
    include("../bd/conection.php");

    $stmt = $pdo->prepare("delete from tbProduto where idProduto='$id'");	
	$stmt ->execute();

    header("location:exibicao.php");
?>