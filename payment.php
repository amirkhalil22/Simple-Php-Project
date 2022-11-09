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
    <title>Login</title>
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

    <div class="container-fluid">
       <div class="row justify-content-center">
         <div class="col-md-10">
           <h3 class="text-center text-dark mt-2 display-4">Configurez votre carte bancaire.</h3>
         </div>
       </div>
<hr><br>

       <
       <div class="row justify-content-center">
         <div class="col-md-4">
           <div class="text-center text-dark mt-4 ">
           <form action="action.php" method="post" enctype="multipart/form-data">
           <div class="form-group">
           <img src="visa.png" alt="Logo" style="width:60px;">
                 <input type="radio" name="visa"  > 
                 <img src="master card.png" alt="Logo" style="width:60px;">
                 <input type="radio" name="visa" > 
                 <img src="paypal.png" alt="Logo" style="width:80px;">
                 <input type="radio" name="visa"  > 
               </div>
               <div class="form-group">
               <div class="form-group">
                 <input type="text" name="login" class="form-control" placeholder="Numero de carte" required>
               </div>
               <div class="form-group">
               
                 <input type="text" name="pass"  class="form-control" placeholder="Date d'expiration (MM/AA)" required>
               </div>
               <div class="form-group">
               
              
               <div class="form-group">
               <button type="button" class="btn btn-success btn-block"  >Acheter</button>
               </div>
               <div class="form-group">
               <a href="http://localhost/phpproject/panier.php"><button type="button" class="btn btn-info btn-block"  >Retour au Panier</button></a>
                
               </div>
               </div>
            
         </div>
       </div>




    </div>

</body>
</html>