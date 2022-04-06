<?php

    $idProduto = $_POST['txIdProduto'];   
    $produto = $_POST['txProduto'];
    $quantidade = $_POST['txQnt'];
    $idCategoria = $_POST['txIdCategoria'];
    $valor = $_POST['txValor'];    
    $cod = $_POST['txCodigo'];

    include("../bd/conection.php");

    if($idProduto>0){
        $stmt = $pdo->prepare("update tbproduto set 
                             cod_prod = ' $cod'
                            ,produto ='$produto'
                            ,quantidade = '$quantidade'
                            ,idCategoria = $idCategoria
                            ,valor='$valor'
                            where idProduto='$idProduto'");	
    }
    else{
        $stmt = $pdo->prepare("INSERT INTO `tbproduto`(`idProduto`, `cod_prod`, `produto`, `quantidade`, `idCategoria`, `valor`)
        VALUES ('null','$cod','$produto','$quantidade','$idCategoria','$valor');");
    }
    
    
	$stmt ->execute();
    header("location:exibicao.php");
    