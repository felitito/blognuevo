<?php   
   session_start();

    include("admin/settings/settings.inc.php");
    $regis = $pdo->prepare('INSERT INTO usuarios (nombre, correo, password, usuario, telefono, direccion) VALUES ( :nom, :cor, :pass, :usu, :tel, :dire)');


     $regis->bindparam(':nom', $nom);
     $regis->bindparam(':cor', $cor);
     $regis->bindparam(':pass', $pass);
     $regis->bindparam(':usu', $usu);
     $regis->bindparam(':tel', $tel);
     $regis->bindparam(':dire', $dire);


      if(isset($_POST['nombre'])){

        $nom =$_POST['nombre'];
        $cor =$_POST['correo'];
        $pass=$_POST['contraseña'];
        $usu =$_POST['usuario'];
        $tel =$_POST['telefono'];
        $dire =$_POST['direccion'];
         $regis ->execute();


        header("location:login.php?error=3");
       }
 ?>

<html>
<head>
  <meta charset= "UTF-8">
  <title>Registrar</title>
   <link rel="stylesheet" type="text/css" href="registro.css"> 
  <style type="text/css"> </style> 



</head>
<body>
  <form action="registrar.php" method="POST" >
   <table border="1" id="registrar">
     <tr>
        <th><p>Nombre:</p></th>
        <th><input type="text" placeholder="Nombre completo" name="nombre" required/></th>
       
     </tr>  
     <tr>
         <th><p>Correo:</p></th>
         <th><input type="text" placeholder="Correo Electronico" name="correo" required/></th>
     </tr>
      <tr>
        <th><p>Contraseña:</p></th>
        <th><input type="password" placeholder="Contraseña" name="contraseña" required/></th>
      </tr>  

      <tr>
         <th><p>Nombre de Usuario:</p></th>
         <th><input type="text" placeholder="Nombre de Usuario" name="usuario" required/></th>
         
      </tr>

      <tr>
        <th><p>Telefono:</p></th>
        <th><input type="text" placeholder="Telefono" name="telefono" required/></th>
        
     </tr>  
     <tr>
         <th><p>Dirección:</p></th>
         <th><input type="text" placeholder="Dirección" name="direccion" required/></th>
         
     </tr>    
   </table>
   <br>
   <input type="submit" value="Enviar" /> 
   <a href="login.php">Regresar</a>
  </form>

</body>
</html>