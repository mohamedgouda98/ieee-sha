<?php
include 'include/navbar.php';
?>

<div class="container-fluid">
<?php

  $order_number = $_GET['order_num'];
  $price = $_GET['price'];
?>
<div class="alert alert-success text-center" role="alert">
  <h2>تم ارسال الطلب بنجاح و سيتم الاتصال بك في خلال 24 ساعة</h2>  
  <h4 >رقم الطلب الخاص بك  : <?php echo $order_number?></h4>
  <h4><?php echo 'السعر شامل الشحن : ' . $price ?></h4>
  <h2> يمكنك متابعة حالة الطلب من خلال رقم الطلب بالضغط هنا <a href="search.php " class="btn btn-success">هنا</a></h2>
  <p class="text-muted" > وفي حالة نسيان رقم الطلب يمكنك استعادته عبر الميل</p>
</div>



</div>

<?php
include 'include/footer.php';
?>