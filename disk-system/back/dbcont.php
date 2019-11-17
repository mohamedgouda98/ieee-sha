<?php

$dsn = "mysql:host=localhost;dbname=disk";
$user = "root";
$password = "";

try{

  $cont = new PDO($dsn , $user , $password);

}
catch(PDOException $e){
  echo "Error : " . $e->getMessage();
}




?>