<?php
    require_once '../controllers/login-controller.php';
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/style.css">
    <title>Document</title>
</head>

<body>



        <h1 class="m-5 text-center">Formulaire de connection</h1>

        <form action="" method="POST">

            <div class="row justify-content-center">
                <div class="col-3 border border-secondary rounded shadow p-4">

                    <div class="my-2">
                        <label for="login">login</label><span class="ms-2 text-danger"><?= isset($error['login']) ? $error['login'] : '' ?></span>
                        <br>
                        <input type="text" id="login" name="login" placeholder="" value="<?= isset($_POST['login']) ? $_POST['login'] : '' ?>">
                    </div>

                    <div class="my-2">
                        <label for="password">Mot de passe</label><span class="ms-2 text-danger"><?= isset($error['password']) ? $error['password'] : '' ?></span>
                        <br>
                        <input type="password" id="password" name="password">
                    </div>

                

                    <button class="btn btn-dark my-3">Valider</button>

                </div>
            </div>

        </form>


    





</body>

</html>