<?php
include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="Sahil Kumar">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,
     initial-scale=1,shrink-to-fit=no">
    <title>Gestion Ordinateur</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 mt-3 bg-info p-2 rounded">
<h2 class="bg-light p-2 rounded text-center text-dark">ID : <?= $vid ; ?></h2>

<h4 calss="text-light">Marque : <?= $vname ; ?></h4> 
<h4 calss="text-light">Processeur : <?= $vprocesseur ; ?></h4>
<h4 calss="text-light">Price : <?= $vprice ; ?></h4>
<h4 calss="text-light">RAM : <?= $vRAM ; ?></h4>

<h4 calss="text-light">carteGraphique : <?= $vcarteGraphique ; ?></h4>
</div>
</div>
</div>
</body>
</html>
