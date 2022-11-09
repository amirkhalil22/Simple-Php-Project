<?php
session_start();
include 'config.php';
$update=false;
    $id="";
    $name="";
    $image="";
    $processeur="";
    $price="";
    $RAM="";
    
    $carteGraphique="";
    $login="";
    $pass="";
    $name="";
    
    // ---- Ajouter ordinateur ----
if(isset($_POST['add'])){
    $name=$_POST['name'];
    $image=$_POST['image'];
    $processeur=$_POST['processeur'];
    $price=$_POST['price'];
    $RAM=$_POST['RAM'];
    
    $carteGraphique=$_POST['carteGraphique'];
    $query="INSERT INTO `ordinateur` (`name`,`image`, `processeur`,`price`, `RAM`, `carteGraphique`) VALUES (?,?,?,?,?,?)";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("ssssis",$name,$image,$processeur,$price,$RAM,$carteGraphique) ;
    $stmt->execute();

    header('location:index.php');
    $_SESSION['response']="Successfully insterted to the database!";
    $_SESSION['res_type']="success";
}

 // ---- Supprimer ordinateur ----
if(isset($_GET['delete'])){  
    $id=$_GET['delete'];

    $query="DELETE FROM `ordinateur` WHERE `ordinateur`.`id` = ? ";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("i",$id) ;
    $stmt->execute();

    header('location:index.php');
    $_SESSION['response']="Successfully Deleted from the database!";
    $_SESSION['res_type']="danger";
}

 // ---- afficher les données des ordinateur du base dans la formulare ----
if (isset($_GET['edit'])){
    $id=$_GET['edit'];
    $query="SELECT * FROM `ordinateur` WHERE `ordinateur`.`id` = ?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("i",$id) ;
    $stmt->execute();
    $result=$stmt->get_result();
    $row=$result->fetch_assoc();

    $id=$row['id'];
    $name=$row['name'];
    $processeur=$row['processeur'];
    $price=$row['price'];
    $RAM=$row['RAM'];
    
    $carteGraphique=$row['carteGraphique'];

    $update=true;
}

 // ---- editer etudiant ----
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $processeur=$_POST['processeur'];
    $price=$_POST['price'];
    $RAM=$_POST['RAM'];
    
    $carteGraphique=$_POST['carteGraphique'];

    $query="UPDATE `ordinateur` SET `ordinateur`.`name` = ? , `ordinateur`.`processeur` = ? ,`ordinateur`.`price` = ?, `ordinateur`.`RAM` = ? ,  `ordinateur`.`carteGraphique` = ? WHERE `ordinateur`.`id` = ?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("sssisi",$name,$processeur,$price,$RAM,$carteGraphique,$id) ;
    $stmt->execute();

    $_SESSION['response']="Updated Successfully !";
    $_SESSION['res_type']="primary";
    header('location:index.php');

}

 // ---- afficher détails d'un ordinateur ----
if (isset($_GET['details'])){
    $id=$_GET['details'];
    $query="SELECT * FROM `ordinateur` WHERE `ordinateur`.`id` = ?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $result=$stmt->get_result();
    $row=$result->fetch_assoc();

    $vid=$row['id'];
    $vname=$row['name'];
    $vprocesseur=$row['processeur'];
    $vprice=$row['price'];
    $vRAM=$row['RAM'];
    
    $vcarteGraphique=$row['carteGraphique'];
}


if(isset($_POST['conn'])){
    $login=$_POST['login'];
    $pass=$_POST['pass'];
 

    $query="SELECT * FROM `admin` WHERE `admin`.`login` = '".$login."' and `admin`.`pass` = '".$pass."'";
    $stmt=$conn->prepare($query);
    $stmt->execute();
    $result=$stmt->get_result();
    if (mysqli_num_rows($result)==1) {
        header('location:index.php');
        }
    else {
        header('location:login.php');
        $_SESSION['response']="login or password invalid! ";
        $_SESSION['res_type']="danger";
    }

    
    
}





if(isset($_POST['log'])){
    $login=$_POST['login'];
    $pass=$_POST['pass'];
 

    $query="SELECT * FROM `user` WHERE `user`.`login` = '".$login."' and `user`.`pass` = '".$pass."'";
    $stmt=$conn->prepare($query);
    $stmt->execute();
    $result=$stmt->get_result();
    if (mysqli_num_rows($result)==1) {
        header('location:panier.php');
        }
    else {
        header('location:login2.php');
        $_SESSION['response']="login or password invalid! you must register ";
        $_SESSION['res_type']="danger";
    }

    
    
}

if(isset($_POST['regist'])){
    $name=$_POST['name'];
    $login=$_POST['login'];
    $pass=$_POST['pass'];
  

    $query="INSERT INTO `user` (`name`, `login`, `pass`) VALUES (?,?,?)";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("sss",$name,$login,$pass) ;
    $stmt->execute();

    header('location:register.php');
    $_SESSION['response']="Successfully You are Registered!";
    $_SESSION['res_type']="success";
}

if(isset($_POST['reg'])){

    header('location:register.php');

}


if(isset($_POST['logi'])){

    header('location:login2.php');

}
?>