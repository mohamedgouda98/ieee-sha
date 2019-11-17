
<?php

$dsn = "mysql:host=localhost;dbname=national_day";
$user = "root";
$password = "";

try{

  $cont = new PDO($dsn , $user , $password);
  $cont->exec("set names utf8");
}
catch(PDOException $e){
  echo "Error : " . $e->getMessage();
}

?>
