<?php

    $idProduto = $_POST['txIdProduto'];
    $produto = $_POST['txProduto'];
    $idCategoria = $_POST['txIdCategoria'];
    $valor = $_POST['txValor'];    

    //echo "$idProduto $produto $idCategoria $valor";

    include("conection.php");

    //$stmt = $pdo->prepare("insert into tbProduto values(null,'$produto','$idCategoria','$valor');");	

    
    $stmt = $pdo->prepare("UPDATE `tbproduto` SET `idProduto`='$idProduto',`produto`='$produto',`idCategoria`='$idCategoria',`valor`='$valor' WHERE 1");	

	$stmt ->execute();
    

    header("location:exibicao.php");

?>
