<?php
include '../back/dbcont.php';


$id = $_GET['id'];

$status = $_GET['st'];

$status_update ;
if($status == 0){
    $status_update = 1;
}else{
    $status_update = 0;
}

$update_order = $cont->prepare("UPDATE orders SET paid=? WHERE id=?");
$update_order->execute(array($status_update ,$id));

?>
<script>
     window.location="index.php"; 
</script>
