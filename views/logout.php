<?php
session_start();
require_once('../controllers/logout-controller.php');
?>
<?php
include "elements/header.php";
?>

<body class="text-center">
<p>bien déconnecté</p>
<a href="login.php" class="btn btn-danger">Retour</a>
</body>

</html>