<?php

var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $error = [];
   



    if (isset($_POST['login'])) {

        if ($_POST['login'] == '') {
            $error['login'] = "Champ obligatoire";
        } 
    }

    if (isset($_POST['password'])) {
        if ($_POST['password'] == '') {
            $error['password'] = "champ obligatoire";
        } else if ($_POST['login'] == '' &&  $_POST['password'] != '') {
            $error['password'] = " veuillez remplir le login";
        }
    }
    var_dump($error);
}
