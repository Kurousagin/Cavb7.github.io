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
    <link rel="stylesheet" href="../css/user.css">
    <title>usuario.cavb7</title>
</head>

<body>
    <h1 class="coll"> Bem vindo, <?php echo $_SESSION['Login']; ?></h1>

    <main>
        <div class="container-fluid text-center  ">

            <div class="container coll">
                <h1 class="marg">Mural</h1>

                <div class="row boj " >

                    <div class="col-lg-6">
                        <h1 class="">Informações importantes</h1>
                        <p>Sempre logue com sua conta, não use a de outro funcionário.</p>

                        <p>Caso não esteja cadastrado ainda, pedir para que um responsavel o cadastre no sistema.</p>


                    </div>

                    <div class="col-lg-6">
                        <h1 class="">Testes</h1>
                        <p>O programa está na versão beta ainda, por isso, caso haja alguma inconsistência, contate o suporte</br>
                    (11)947942365</p>

                    </div>



                </div>
            </div>

        </div>

    </main>




</body>
<?php

include('../foot.php');
?>

</html>