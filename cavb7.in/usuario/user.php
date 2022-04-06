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

            <div class="container">
                <h1 class="coll boj">Mural</h1>

                <div class="row " >

                    <div class="col-lg-6">
                        <h1 class="coll">Informações importantes</h1>



                    </div>

                    <div class="col-lg-6">
                        <h1 class="coll">Testes</h1>

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