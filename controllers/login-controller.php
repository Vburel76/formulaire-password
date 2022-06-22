<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $error = [];
    $login = "valentin";
    $passwordHash = '$2y$10$81fgHSzi0uqN2yIFMcQV3.TEfO8bCm7fXW1RliFn8LA6cZCwCvI1O';


    if (isset($_POST['login'])) {

        if ($_POST['login'] == '') {
            $error['login'] = "Champ obligatoire";
        } else if ($_POST['login'] != $login) {
            $error['login'] = "login erroné";
        }
    }

    if (isset($_POST['password'])) {
        if ($_POST['password'] == '') {
            $error['password'] = "champ obligatoire";
        } else if ($_POST['login'] == '' &&  $_POST['password'] != '') {
            $error['password'] = " veuillez remplir le login";
        } else if (!password_verify($_POST['password'], $passwordHash)) {
            $error['password'] = "mot de passe incorect";
        }
    }

    if (count($error) == 0) {
        $_SESSION['user'] = [
            'lastname' => 'burel',
            'firstname' => 'valentin',
            'role' => 1
        ];
        header('Location: home.php');
    }
}
