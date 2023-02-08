<?php

session_start();

if (empty($_SESSION['password'])) header ('Location: index.php');
$password = $_SESSION ['password'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 text-center fw-bold">La tua password è: </h1>
       <div class="alert alert-success" role="alert">
            <div class="text-center"><?= $password?></div>
            <?php $_SESSION ['password'] = null?>
       </div>
    </div> 
        <div class="d-flex justify-content-center">
            <a href="http://localhost:8888/php-strong-password-generator" class="btn btn-secondary">Torna alla Home</a>
        </div>    
</body>
</html>