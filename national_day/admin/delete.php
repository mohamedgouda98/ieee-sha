<?php
include '../back/dbcont.php';


$id = $_GET['id'];

$delete_img = $cont->prepare("DELETE FROM orders WHERE id=?");
$delete_img->execute(array($id));

?>
<script>
     window.location="index.php"; 
</script>
