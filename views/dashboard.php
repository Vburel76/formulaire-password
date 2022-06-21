<?php  

session_start();

require_once('../controllers/dashboard-controller.php')

?>

<?php include 'elements/header.php' ?>



<body class="text-center">
    <h1>This is dashboard</h1>
    <p>Bonjour <?= $_SESSION['user']['lastname'] ?> <?= $_SESSION['user']['firstname'] ?> </p>
    <a href="logout.php"  type="button" class="btn btn-primary">déconnection</a>


    
</body>
</html>