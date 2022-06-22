<?php include 'elements/header.php' ?>

<?php require_once '../data/Data.php' ?>


<body>



    <header class="border border-dark tailleHeader d-table-cell align-middle">

        <h1 class="text-center">Site de rencontre</h1>
    </header>
    <?php include 'elements/navBar.php' ?>

    <div class="row justify-content-center">

        <?php foreach ($data as $key => $value) { ?>
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $value['name'] ?> </h5>
                    <div class="text-center">
                        <img class="image text-center" src="../public/img/<?= $value['picture'] ?>.jpg" alt="">
                    </div>
                    <p class="card-text text-center"> <?= $value['email'] ?></p>
                    <p class="card-text text-center"> <?= $value['country'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- list -->
    <div class="row justify-content-center">
        <div class="col-lg-8 border ">
            <table class="table text-center table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center"></th>
                        <th scope="col" class="text-center">Picture</th>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">Country</th>
                        <th scope="col" class="text-center">Button</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($data as $key => $value) { ?>

                        <tr class="text-center align-middle">
                            <td></td>
                            <td><img class="image text-center" src="../public/img/<?= $value['picture'] ?>.jpg" alt="">
                            <td class="border"><?= $value['name'] ?> </td>
                            <td class="border"><?= $value['country'] ?></td>
                            <td>
                                <a href="choice.php?id=<?= $key ?>" class="btn btn-secondary m-3">info</a>
                                <a class="btn btn-danger m-3" data-bs-toggle="modal" data-bs-target="#modal<?= $key ?>">effacer</a>


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
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>


            </table>
        </div>
    </div>
    </div>


    <footer class="border border-dark tailleFooter d-table-cell align-middle ">
        <h2 class="text-center">footer</h2>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


</html>