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
<div class="position-absolute top-0 start-100">
<a class="navbar-brand" href="http://localhost/phpproject/welcome.php">
    <img src="deconnect.jpg" alt="Logo" style="width:40px;">
  </a>
  </div>
    <div class="container-fluid">
       <div class="row justify-content-center">
         <div class="col-md-10">
           <h3 class="text-center text-info mt-2">Gestion Ordinateur</h3>
         </div>
       </div>
       <hr>
       <?php if(isset($_SESSION['response'])) { ?>
       <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center font-weight-bold">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?= $_SESSION['response']; ?>
       </div>
       <?php } unset($_SESSION['response']);?>
       <div class="row">
          <div class="col-md-4">
             <h3 class="text-center text-info">ADD Ordinateur</h3>
             <form action="action.php" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" value="<?= $id ; ?>">
               <div class="form-group">
                 <input type="text" name="name" value="<?= $name ;?>" class="form-control" placeholder="Entrer la Marque" required>
               </div>
               <div class="form-group">
               <input type="text" name="image" value="<?= $image ;?>" class="form-control" placeholder="Entrer Nom d'image" required>
               </div>
               <div class="form-group">
               
                 <input type="text" name="processeur" value="<?= $processeur ;?>" class="form-control" placeholder="Entrer le processeur" required>
               </div>
               <div class="form-group">
               
               
               <input type="text" name="price" value="<?= $price ;?>" class="form-control" placeholder="Entrer Price" required>
             </div>
               <div class="form-group">
                 <input type="text" name="RAM" value="<?= $RAM ;?>" class="form-control" placeholder="Entrer la memoire RAM" required>
               </div>
               
               <div class="form-group">
                 <input type="text" name="carteGraphique" value="<?= $carteGraphique ;?>" class="form-control" placeholder="Entrer la Carte Graphique" required>
               </div>
               <div class="form-group">
               <?php if($update==true){ ?>
                 <input type="submit" name="update" class="btn btn-success btn-block"
                 value="Update" >
               <?php } else { ?>
                 <input type="submit" name="add" class="btn btn-primary btn-block"
                 value="ADD" >
               <?php } ?>
               </div>
             </form>
          </div>
          <?php 
            $query="SELECT * FROM `ordinateur` ";
            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result=$stmt->get_result();
          ?>
          <div class="col-md-8">
             <h3 class="text-center text-info">Your Database</h3>
             <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Marque</th>
        <th>Processeur</th>
        <th>Price</th>
        <th>RAM</th>
        
        <th>CarteGraphique</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
    <?php while($row=$result->fetch_assoc()){  ?>
    <tr>
       <td><?= $row['id']; ?></td>
       <td><?= $row['name']; ?></td>
       <td><?= $row['processeur']; ?></td>
       <td><?= $row['price']; ?></td>
       <td><?= $row['RAM']; ?></td>
       
       <td><?= $row['carteGraphique']; ?></td>
       <td>
         <a href="details.php?details=<?= $row['id'];?>" class="badge badge-primary p-2">Details</a> |
         <a href="action.php?delete=<?= $row['id'];?>" class="badge badge-danger p-2" onclick="return confirm('Do you want to deleate this PC ?');">Delete</a> |
         <a href="index.php?edit=<?= $row['id'];?>" class="badge badge-success p-2">Edit</a>
       </td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
          </div>
      </div>
    </div>
</body>
</html>