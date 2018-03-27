<?php 
    include("admin/settings/settings.inc.php");
    $stmt = $pdo->prepare('SELECT *  FROM publicaciones ');
    $stmt ->execute();

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Publicaciones</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="registro.css"> 
    <style type="text/css"> </style> 

</head>
<body>
    
     <h1>Publicaciones </h1> 
    <a href="publicar.php">Nueva publicación</a>
    <?php  
    $r= $stmt->fetchall(PDO::FETCH_ASSOC);
    foreach ($r as $row){ ?>        
    <table border="1">

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
     
     <?php } ?>
   </tbody>
  

  
</body>
</html>