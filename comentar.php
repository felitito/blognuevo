<?php 

  session_start();
  include("admin/settings/settings.inc.php");
    $stmt = $pdo->prepare('SELECT *  FROM publicaciones ');
    $stmt ->execute();


 ?>

<html>
<head>
  <meta charset= "UTF-8">
  <title>Registrar</title>
   <link rel="stylesheet" type="text/css" href="registro.css"> 
  <style type="text/css"> </style> 



</head>
<body>

   <?php  
    $r= $stmt->fetchall(PDO::FETCH_ASSOC);
    foreach ($r as $row){ ?>        


   <table border="1" id="detalles">
     <tr>
        <th><p>titulo:</p></th>
        <th><p><?php echo $row['titulo']; ?></p></th>     
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

      <?php } ?> 
   </table>
   <br>
   <input type="submit" value="Enviar" /> 
   <a href="login.php">Regresar</a>

</body>
</html>