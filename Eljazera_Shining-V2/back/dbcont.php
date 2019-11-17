<?php
$host="localhost";
$user="root";
$pass="";
$db="eljazer_v2";


try{
    $cont=new pdo("mysql:host=$host;dbname=$db",$user,$pass , array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
    $cont->exec("SET CHARACTER SET UTF8");

}
catch (PDOexception $e){
    echo "not connected" ;

}


