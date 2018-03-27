<?php   

    include("admin/settings/settings.inc.php");
    $regis = $pdo->prepare('INSERT INTO publicaciones (id_usuarios, titulo,categoria, fecha_de_publicacion, fecha_de_edicion, contenido, id_cat) VALUES ( :idu, :title, :cat, :fechp, :feche, :cont, :idc)');


     $regis->bindparam(':idu', $idu);
     $regis->bindparam(':title', $title);
     $regis->bindparam(':cat', $cat);
     $regis->bindparam(':fechp', $fechp);
     $regis->bindparam(':feche', $feche);
     $regis->bindparam(':cont', $cont);
     $regis->bindparam(':idc', $idc);



      if(isset($_POST['id_usuario'])){

        $idu =$_POST['id_usuario'];
        $title =$_POST['titulo'];
        $cat=$_POST['categoria'];
        $fechp =$_POST['fecha_de_publicación'];
        $feche =$_POST['fecha_de_edicion'];
        $cont =$_POST['contenido'];
        $idc =$_POST['id_categoria'];


         $regis ->execute();


   
       }

 ?>


<html>
<head>
  <meta charset= "UTF-8">
  <title>crear publicación</title>
   <link rel="stylesheet" type="text/css" href="registro.css"> 
  <style type="text/css"> </style> 
</head>
<body>
<center>
  <form action="publicar.php" method="POST" >
   <table border="1" id="registrar">
   </center>
     <tr>
        <th><p>ID DE USUARIO:</p></th>
        <th><input type="text" placeholder="Id usuario" name="id_usuario" required/></th>
       
     </tr>  
     <tr>
         <th><p>TITULO:</p></th>
         <th><input type="text" placeholder="Titulo" name="titulo" required/></th>
     </tr>
      <tr>
        <th><p>CATEGORIA:</p></th>
        <th><input type="text" placeholder="Categoria" name="categoria" required/></th>
      </tr>  
      <tr>
         <th><p>FECHA DE PUBLICACION:</p></th>
         <th><input type="date" placeholder="Fecha de publicación" name="fecha_de_publicación" required/></th>        
      </tr>
      <tr>
        <th><p>FECHA DE EDICION:</p></th>
        <th><input type="date" placeholder="Fecha de edicion" name="fecha de edicion" required/></th>       
     </tr>  
     <tr>
         <th><p>CONTENIDO:</p></th>
         <th><textarea type="text" placeholder="Contenido" name="contenido" required/></textarea></th>
         
     </tr>    
     <tr>
         <th><p>ID CATEGORIA:</p></th>
         <th><input type="text" placeholder="Id categoria" name="id_categoria" required/></th>
         
     </tr>    
   </table>
   <br>
   <input type="submit" value="Enviar" /> 
   <a href="publicaciones.php">Regresar</a>
  </form>

</body>
</html>