<?php
    include 'include/navbar.php';

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

        $insert_ip = $cont->prepare("INSERT INTO ips(ip) VALUES(?)");
        $insert_ip->execute(array($mainIp));


?>

<div class="container-fluid">



    <div class="alert alert-primary text-center start" role="alert">

        <p><b>حفاظا علي سلامتك وسلامة أولادك</b> </p>
        <div class="row">

            <div class="data-info col-md-6 text-right ">

                <ul class="mr-2">

                    <li>قم بتفعيل الكود الخاص بك</li>
                    <li>اطبع الكود علي الميدالية</li>

                </ul>

            </div>
            <div class="data-info col-md-6 text-right">
                <ul class="mr-1"> 

                    <li>سوف نتصل بك في خلال24 ساعة </li>
                    <li>سوف يصل طلبك خلال من 5 الي 7 ايام</li>
                </ul>


            </div>


        </div>
    </div>

</div>
<div class="container-fluid my-5 ">
    <div class="row">

        <div class="col-md-6 text-right formSection">

            <form medthod="get" action="show.php" >
                <input type="text" name="name" placeholder=" ادخل اسمك" required class="form-control my-1"><br>
                <input type="text" name="phone" placeholder="ادخل الجوال" required class="form-control my-1"><br>
                <input type="text" name="subPhone" placeholder="اضف رقم أحد أقاربك - اختياري -" class="form-control my-1"><br>
                <input type="text" name="addr" placeholder=" ادخل العنوان" required class="form-control my-1" ><br>
                <input type="submit" name="submit" class="form-control btn btn-primary" value="تسجيل">
            </form>

        </div>
        <div class="col-md-6 text-center ">

            <h4>اكريليك</h4>
            <div class="imge">
                <img src="img/one.jpg">
            </div>
            <h3>٣٠ جنيه</h3>
            <p><small>+ مصاريف الشحن</small></p>

        </div>

    </div>

</div>

<?php
    include 'include/footer.php';
?>