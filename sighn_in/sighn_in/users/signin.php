<?php
include_once('../functions/conn.php') ;
include_once('../functions/userfunction.php');
$error = '';
if(isset($_POST['username'])){

$un = $_POST['username'] ;
$ps = $_POST['password'] ;

$unexist = is_user_exist($un)  ;
$tya = type($un) ;
if($unexist == 1 ){
  $upass =  compare_password($un);
    if (  password_verify($ps , $upass)){
      if( $tya == 1)
      header("Location:homepage.php");
      else {
        header("Location:homepage2.php");
      }
    }
    else {
      echo "invalide 11111111111111 data";
    }
}else {
  echo "invalide 00000000000000000 data";

}
}
?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">

     </style>
   </head>
   <body><form class="" action="signin.php" method="post">
     <h3>user name :  <input type="text" name="username"></h3>
     <h3>password : <input type="password" name="password" ></h3>
     <button type="submit" name="button">sign in </button>
   </form>



   </body>
 </html>
