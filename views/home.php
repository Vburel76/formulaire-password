<?php include 'elements/header.php' ?>

<?php require_once '../data/Data.php' ?>


<body class="bg-secondary">



    <header class="border border-dark tailleHeader d-table-cell align-middle bg-light">
        <h1 class="text-center ">Site de rencontre</h1>
    </header>
    <?php include 'elements/navBar.php' ?>

    <div class="row m-0 p-0 justify-content-center">

        <?php foreach ($data as $key => $value) { ?>
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-title text-center fs-5"><?= $value['name'] ?> </p>
                    <div class="text-center">
                        <img class="image text-center" src="../public/img/<?= $value['picture'] ?>.jpg" alt="">
                    </div>
                    <p class="card-text text-center mt-1"><b>Recherche :</b> <?= $value['search'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- list -->
    <div class="row m-0 p-0 justify-content-center">

        <div class="col-11  table-responsive ">
            <table class="table text-center table-dark table-striped">
                <thead>
                    <tr>

                        <th scope="col" class="text-center">Photo</th>
                        <th scope="col" class="text-center">Pseudo</th>
                        <th scope="col" class="text-center">Recherche</th>
                        <th scope="col" class="text-center">Favoris</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($data as $key => $value) { ?>

                        <tr class="text-center align-middle">

                            <td><img class="image text-center" src="../public/img/<?= $value['picture'] ?>.jpg" alt="">
                            <td><?= $value['name'] ?> </td>
                            <td><?= $value['search'] ?></td>
                            <td>
                               <button class="btn btn-outline-light"><i class="bi bi-heart"></i></button>
                            </td>
                        </tr>

                        <div class="modal fade" id="modal<?= $key ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Voulez vous supprimer <?= $value['name'] ?> ?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                                        <button type="button" class="btn btn-primary">Oui</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </tbody>


            </table>
        </div>
    </div>

    <?php include 'elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


</html>