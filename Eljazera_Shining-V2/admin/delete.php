<?php

include '../back/dbcont.php';

$tableName = $_GET['t'];
$id = $_GET['id'];
$delete_item = $cont->prepare("DELETE FROM $tableName WHERE id=?");
$delete_item->execute(array($id));
header('Location:index.php');

?>