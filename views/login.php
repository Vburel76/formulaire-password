<?php
session_start();

require_once '../controllers/login-controller.php';
?>



<?php include 'elements/header.php' ?>

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