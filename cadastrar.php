<?php

    $idProduto = $_POST['txIdProduto'];
    $produto = $_POST['txProduto'];
    $quantidade = $_POST['txQnt'];
    $idCategoria = $_POST['txIdCategoria'];
    $valor = $_POST['txValor'];    

    include("conection.php");

    if($idProduto>0){
        $stmt = $pdo->prepare("update tbProduto set 
                            produto ='$produto'
                            ,quantidade = '$quantidade'
                            ,idCategoria = $idCategoria
                            ,valor='$valor'
                            where idProduto='$idProduto'");	
    }
    else{
        $stmt = $pdo->prepare("insert into tbProduto values(null,'$produto','$quantidade','$idCategoria','$valor');");
    }
    
	$stmt ->execute();
    header("location:exibicao.php");
    