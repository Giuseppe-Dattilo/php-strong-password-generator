<?php

include 'includes/function.php';

if (!empty($_SESSION['password']))
header('Location: result.php');

?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Giuseppe-Dattilo">
        <title>php-strong-password-generator</title>

        <!-- Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


        <!-- Font Awesome -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css' integrity='sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ==' crossorigin='anonymous'>


        <!-- Style -->
        <link rel="stylesheet" href="style.css"> 
        
    </head>
<body>
    <div class="container">
        <h1 class="mt-5 text-center fw-bold">Strong Password Generator</h1>
        <h3 class="mb-5 text-center fw-bold">Genera una password sicura</h3>
    </div>   
    <section id="password" class="container">
        <form action="#" method="GET" class="card d-flex card-container">
            <div class="row row-cols-2 align-items-center">
                <div class="col">
                    <label for="password_length fw-bold">Lunghezza Password:</label>
                </div>
                <div class="col"> 
                    <input class="form-control" type="number" placeholder="seleziona la lunghezza..."name="password_length" id="password_length" min="8" max="18" step="1">
                </div>
            </div>
            <div>
                <button class="btn btn-primary rounded-3 mt-3">Invia</button>
            </div>
        </form>
    </section> 
</body>
</html>