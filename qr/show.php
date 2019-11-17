<?php
include 'include/navbar.php';
$action = isset($_GET['action']) ? $_GET['action']:'all';

$name= $_GET['name'];
$phone= $_GET['phone'];
$sub_phone= $_GET['subPhone'];
$addr= $_GET['addr'];

$total = $name . 
" \n رقمي : " . $phone . 
" \n رقم قريب : " . $sub_phone . 
" \n العنوان : " . $addr;

$order_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9));
?>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col-md-12 col-ms-12">
        <img src="generate.php?text=<?php echo  $total?>" alt="" class="img-fluid">

        </div>
    </div>
    <br>
    
    <p>برجاء تجربة الكود من خلال الهاتف بواسطة برنامج qr code reader</p>
    <a href="show.php?name=<?php echo $name?>&phone=<?php echo $phone?>&subPhone=<?php echo $sub_phone?>&addr=<?php echo $addr?>&action=submit" class="btn btn-success mx-4 mt-3 p-2">تأكيد</a>
    <a href="index.php" class="btn btn-secondary mx-4 mt-3 p-2">تعديل</a>
    <?php 
        if($action == "submit"){
            
            $insert_qr_data = $cont->prepare("INSERT INTO ordars(name , phone , subphone , addres , total , confirm , order_num , price , status) VALUES(?,?,?,?,?,?,?,?,?)");
            if($insert_qr_data->execute(array($name , $phone , $sub_phone , $addr , $total , 0 , $order_number , 40 , 1))){
                echo 'Done';
            }else{
                echo 'yet';
            }
    ?>
    
        
        <form method="post" action="" class="test col-md-12">
            <input type="text" name="name" placeholder=" ادخل الاسم" class="form-control" readdird>
            <input type="text" name="phone" placeholder=" ادخل الجوال" class="form-control" readdird>
            <input type="email" name="email" placeholder="  ادخل البريد الألكتروني" class="form-control" readdird>
            <input type="text" name="addr" placeholder="  ادخل عنوانك" class="form-control" readdird>
            
            <span>   القاهرة او الجيزة</span>
            <input type="radio" name="type" value="cairo" id="tofyR" readdird> 
            <br >
             
            <span>اخري</span>
            <input type="radio" name="type" value="none" id="selectCountry" readdird>
            <input type="text" name="where" id="tofy" class="smsm" placeholder="اسم المدينة" readdird>
            <input type="text" name="promocode" placeholder="لديك برمو كود ؟">
            <input type="submit" name="submit" class="form-control bg-primary text-white" value="إرسال">

        </form>


    <?php

        if(isset($_POST['submit'])){
            $name_user = $_POST['name'];
            $phone_user = $_POST['phone'];
            $email_user = $_POST['email'];
            $addr_user = $_POST['addr'];
            $promoCode = $_POST['promocode'];
            if($promoCode == ""){
                $promoCodeVal = 0;
            }else{
                $select_promo_code = $cont->prepare("SELECT * FROM promo_code WHERE name=?");
                $select_promo_code->execute(array($promoCode));
                // $promoCode = $select_promo_code->fetchColumn();
                while($row_promo = $select_promo_code->fetch()){
                    if($row_promo['count'] >= 0)
                    $promoCodeVal = $row_promo['value'];
                    $count_promo = $row_promo['count'] -1 ;
                    $update_promo_code = $cont->prepare("UPDATE promo_code SET count =? WHERE name=?");
                    $update_promo_code->execute(array($count_promo , $promoCode));
                }
            }
            
            $city = $_POST['type'];
            if($city == "none"){
                $city = $_POST['where'];
                $total_price = 40 + 15 - $promoCodeVal;
            }else{
                $total_price = 40 - $promoCodeVal;
            }

            if (getenv('HTTP_CLIENT_IP'))
                $mainIp = getenv('HTTP_CLIENT_IP');
            else if(getenv('HTTP_X_FORWARDED_FOR'))
                $mainIp = getenv('HTTP_X_FORWARDED_FOR');
            else if(getenv('HTTP_X_FORWARDED'))
                $mainIp = getenv('HTTP_X_FORWARDED');
            else if(getenv('HTTP_FORWARDED_FOR'))
                $mainIp = getenv('HTTP_FORWARDED_FOR');
            else if(getenv('HTTP_FORWARDED'))
                $mainIp = getenv('HTTP_FORWARDED');
            else if(getenv('REMOTE_ADDR'))
                $mainIp = getenv('REMOTE_ADDR');
            else
                $mainIp = 'UNKNOWN';

            $select_id_order = $cont->prepare("SELECT id FROM ordars WHERE order_num=? LIMIT 1");
            $select_id_order->execute(array($order_number));

            $order_id = $select_id_order->fetchColumn();
            

            $insert_contact_info = $cont->prepare("INSERT INTO contact_info(name , phone , email , addres , city , total_price , order_num , ip) VALUES(?,?,?,?,?,?,?,?)");
            if($insert_contact_info->execute(array($name_user , $phone_user , $email_user , $addr_user , $city , $total_price , $order_id , $mainIp))){
                ?>
                <script>
                    window.location="submit.php?order_num=<?php echo $order_number?>&price=<?php echo $total_price?>";
    
                </script>
                <?php
            }
        }

        } //End If action ...
    ?>
    

</div>


<?php
include 'include/footer.php';
?>