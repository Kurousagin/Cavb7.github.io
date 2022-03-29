<?php

    $icategoria = $_POST['txCategoria'];
      

    //echo "$idProduto $produto $idCategoria $valor";

    include("conection.php");

    //$stmt = $pdo->prepare("insert into tbProduto values(null,'$produto','$idCategoria','$valor');");	

    
    $stmt = $pdo->prepare("update tbcategoria set 
                            idCategoria = 'null'
                            categoria ='$categoria'                           
                            
                            where 1");	

	$stmt ->execute();
    

    header("location:categoria.php");

?>