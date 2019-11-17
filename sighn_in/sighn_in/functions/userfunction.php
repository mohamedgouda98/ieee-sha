<?php
function is_user_exist($un){

global $conn ;
$q = "select * from users where username = '$un'" ;
$s = mysqli_query( $conn , $q );
 $uexist = mysqli_num_rows($s) ;
 return $uexist;
}

function compare_password($un){
  global $conn ;
  $q = "select password from users where username = '$un'" ;
  $s = mysqli_query( $conn , $q );
  $uexist = mysqli_fetch_assoc($s) ;
  $pass = $uexist["password"];
  return $pass ;
  }


  function type($un){
    global $conn ;
    $q = "select type from users where username = '$un'" ;
    $s = mysqli_query($conn , $q ) ;
    $usty = mysqli_fetch_assoc($s) ;
    $type = $usty["type"];
    return $type ;

  }


 ?>
