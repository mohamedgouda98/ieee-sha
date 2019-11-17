
<?php

$dsn = "mysql:host=localhost;dbname=qr_code";
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
