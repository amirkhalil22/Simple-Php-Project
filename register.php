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
           <h3 class="text-center text-dark mt-2 display-4">REGISTER</h3>
         </div>
       </div>
<hr><br>
<?php if(isset($_SESSION['response'])) { ?>
       <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center font-weight-bold">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?= $_SESSION['response']; ?>
       </div>
       <?php } unset($_SESSION['response']);?>
       <div class="row justify-content-center">
         <div class="col-md-4">
           <div class="text-center text-dark mt-4 ">
           <form action="action.php" method="post" enctype="multipart/form-data">
               
               <div class="form-group">
               
               <input type="text" name="name" value="<?= $name ;?>" class="form-control" placeholder="Your Name" required>
             </div>
             <div class="form-group">
                 <input type="text" name="login" value="<?= $login ;?>" class="form-control" placeholder="Your Login" required>
               </div>
               <div class="form-group">
                <input type="password" name="pass" value="<?= $pass ;?>" class="form-control" placeholder="Your Password" required>
               </div>
               
                 
                 <input type="submit" name="regist" class="btn btn-success btn-block"
                 value="Register" >
               
               </div>
             </form>
             <form action="action.php" method="post" enctype="multipart/form-data">
             <input type="submit" name="logi" class="btn btn-info btn-block mt-2"
                 value="Login Page" ></div>
                 </form></div>
         </div>
       </div>




    </div>

</body>
</html>