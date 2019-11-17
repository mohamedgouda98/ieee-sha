
<?php

$dsn = "mysql:host=localhost;dbname=alojeel_database";
$user = "alojeel_gouda";
$password = "mm98.godagoda";

try{

  $cont = new PDO($dsn , $user , $password);
  $cont->exec("set names utf8");
}
catch(PDOException $e){
  echo "Error : " . $e->getMessage();
}

?>
