<?php
$conn= new mysqli("localhost","root","","commandepc");

if($conn->connect_error){
    die("Could not connect to database!".$conn->connect_error);
}
?>