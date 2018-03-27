<?php
    $host='localhost';
    $dbname='blog';
    $user = 'root';
    $pass ='';

    try{
      // mysql con PDO
      $pdo =new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$pass);
      $pdo -> setAttribute (PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    }catch(PDOException $e){
    	echo $e->getMessage();
    }
?>