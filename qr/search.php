<?php
include 'include/navbar.php';
?>

<div class="container-fluid">

<form>
    <input type="text" name="order_num" placeholder="ادخل كود الطلب">
    <input type="submit" name="submit" value="بحث">
</form>


<?php

    if(isset($_POST['submit'])){
        $order_number = $_POST['order_num'];
        
        $select_order_status = $cont->prepare("SELECT status FROM ordars WHERE order_num=?");
        $select_order_status->execute(array($order_number));
        while($row = $select_order_status->fetch()){
            ?>
                <div class="alert alert-success" role="alert">
                تم تسجيل طلبك وسوف يتم الاتصال بك في خلال ٢٤ ساعة
                </div>
            <?php
        }
    }

?>


</div>

<?php
include 'include/footer.php';
?>