
<?php 
   session_start();



   $name=$_SESSION['nombre'];
   $id=$_SESSION['id'];
   $tipo=$_SESSION['tipo'];

 
    include("admin/settings/settings.inc.php");
    $stmt = $pdo->prepare('SELECT *  FROM publicaciones where id_usuarios = :i');
    
   //bind 
    $stmt->bindparam(':i', $id);

   //execute 
    $id=$_SESSION['id'];
    $stmt->execute();


 ?>


 <!DOCTYPE html>
<html>
<head>
	<title>PERFIL</title>
	<meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="registro.css"> 
    <style type="text/css"> </style> 

</head>
<body>
    <center>
     <h1>Mi Blog  <?php echo $name;?></h1>
     </center>

    <br>
    <?php  
    $r= $stmt->fetchall(PDO::FETCH_ASSOC);
    foreach ($r as $row){ ?>        
    <table border="3">

    <thead>
    <tr>
    <th>Id usuario</th>   
    <th>Titulo</th>
    <th>Categoria</th>
    <th>Fecha de Publicacion</th>
    <th>Fecha de Edición</th>
    <th>Contenido</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td> <?php echo $row['id_usuarios']; ?> </td>
            <td> <?php echo $row['titulo']; ?> </td>
            <td> <?php echo $row['categoria']; ?> </td>
            <td> <?php echo $row['fecha_de_publicacion']; ?> </td>
            <td> <?php echo $row['fecha_de_edicion']; ?> </td>
            <td> <?php echo $row['contenido']; ?> </td>

        </tr>
        <br>
     <?php } ?>
   </tbody>
    <br>
</table>
  <br>
  <h2><a href="publicar.php">Crear nueva Publicación</a></h2>
  <!--<h2><a href="login.php">Ingresa</a></h2>-->
  <h2><a href="publicaciones.php">Inicio</a></h2>
  

  
</body>
