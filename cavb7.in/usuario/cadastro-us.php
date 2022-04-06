<?php

include('../login/validar.php');
include('menu.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cad.css">
    <title>cadastro.cavb7</title>
</head>

<body>
<div class="box">


    <form class="alig" method="post" action="cadastro_user.php">
        <div>
            <input placeholder="crie seu login" name="txlogin" />
        </div>

        <div>
            <input type="password" placeholder="crie sua senha" name="txsenha" />
        </div>

        <form class="alig" method="post" action="cadastro_user.php">
            <div>
                <input placeholder="Nome completo" name="txName" />
            </div>

            <div>
                <input type="email" placeholder="E-mail" name="txEmail" />
            </div>
            <div>
                <input placeholder="Endereço" name="txEndereco" />
            </div>

            <div>
                <input placeholder="Telefone" name="txTel" />
            </div>





            <button type="submit">

                <span></span>
                <span></span>
                <span></span>
                <span></span>
                cadastrar


            </button>


        </form>

</div>
</body>
<?php

include('../foot.php');
?>
</html>




