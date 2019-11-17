<?php

include 'back/dbcont.php';
$slider = $cont->prepare("SELECT * FROM slider");
$slider->execute();
while($row_slider = $slider->fetch()){
echo $row_slider['title'];
}
?>