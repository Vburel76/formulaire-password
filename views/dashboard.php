<?php  

session_start();

require_once('../controllers/dashboard-controller.php')

?>

<?php include 'elements/header.php' ?>

<body>
    <h1>This is dashboard</h1>
    <p>Bonjour <?= $_SESSION['user']['lastname'] ?> <?= $_SESSION['user']['firstname'] ?> </p>
    
</body>
</html>