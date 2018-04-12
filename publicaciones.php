<?php 
session_start();
    if (isset($_GET['mensaje'])) {
    $mensaje = $_GET['mensaje'];

    switch ($mensaje) {
    case '1':
      echo "Ha creado una nueva publicación";
      break;
   
  }
}

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
     
    <br>
    <?php  
    $r= $stmt->fetchall(PDO::FETCH_ASSOC);
    foreach ($r as $row){ ?>
    <div text-align: center;>       
    <table border="1"  id = "form">

    <thead>
    <tr>
    <th>Titulo</th>
    <th>Categoria</th>
    <th>Contenido</th>
    
    </thead>
    <tbody>
        <tr>
            <td> <?php echo $row['titulo']; ?> </td>
            <td> <?php echo $row['categoria']; ?> </td> 
           <td> <?php echo $row['contenido']; ?> </td>
            <td> <a href="comentar.php">Detalles</a> </td>
        </tr>          
   </tbody>
</table>
  <br>  
<?php } ?>
</div> 
</body>
<h2><a href="perfil.php">Regresa</a></h2>
<h2><a href="login.php">Ingresa</a></h2>
 <!-- <h2><a href="publicaciones.php">Inicio</a></h2>-->
</html>