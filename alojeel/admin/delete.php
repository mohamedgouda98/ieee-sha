<?php
include '../back/dbcont.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'normal';

if($action == 'normal'){
$id = $_GET['id'];

$delete_img = $cont->prepare("DELETE FROM imgs WHERE id=?");
$delete_img->execute(array($id));

?>
<script>
     window.location="index.php"; 
</script>
<?php
}else{
     $id = $_GET['id'];
     $delete_service = $cont->prepare("DELETE FROM services WHERE id=?");
     $delete_service->execute(array($id));
     ?>
     <script>
          window.location="index.php"; 
     </script>
     <?php
}
?>