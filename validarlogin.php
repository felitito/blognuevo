<?php 
session_start();

if (isset($_POST['user']) and isset($_POST['pass'])){
include("admin/settings/settings.inc.php");
$con = $pdo->prepare('SELECT * FROM usuarios WHERE usuario = :us and password = :pass');

//bind 
    $con->bindparam(':us', $us);
    $con->bindparam(':pass', $pass);
 
    //execute 
    $us= $_POST['user'];
    $pass= $_POST['pass'];
    $con->execute();

$reg  = $con->fetch();  

  if ($pass == $reg['password']) {
   $_SESSION['nombre'] = $reg['nombre'];
   $_SESSION['id'] = $reg['id'];
   $_SESSION['tipo'] = $reg['tipo'];
   header("location:perfil.php");

  } else {
     header("location:login.php?error=2");
  }
  } else {
   header("location:login.php?error=1");

}
 ?>