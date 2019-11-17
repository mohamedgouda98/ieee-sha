<?php
  $cat = $_GET['action'];
  if($cat == 1){
      $cat_data = "المتجر الالكتروني";
  }elseif($cat == 2){
      $cat_data = "تطبيق المتجر الالكتروني";
  }else{
      $cat_data="الموقع التعريفي";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>عروض اليوم الوطنى 89</title>
    <!-- Icon Css Incloude-->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/flaticon.css"/>
    <!-- Css Frameworks Include-->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="icon" href="/images/click-logo.png" type="image/x-icon"> 
    <!-- Carousel Css Include-->
    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="css/aos.css"/>
    <!-- Custom Css Include-->
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
  </head>
  <body>
    <!-- Start Header Section-->
    <header class="header">
      <div class="container-fluid">
        <div class="row px-0">
          <div class="col px-0">
            <div class="d-flex justify-content-between">
              <div class="header-img-right  d-none d-md-block"><img class="img-fluid" src="images/img-right.png" alt=""/></div>
              <div class="header-logo"><img src="images/logo.jpg" alt=""/></div>
              <div class="header-logo-click">
                 <a href="index.php">
                    <img class="img-fluid" src="images/click-logo.jpg" alt=""/>
                  </a>
                </div>
              <div class="header-img-left d-none d-md-block"><img src="images/img-left.png" alt=""/></div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Start contact Us Page-->
    <section class="contact-us">
        <div class="container">
              <div class="title-section">

                <h4 class="text-center">معلومات العميل</h4>
                <h5 class="text-center">نوع الخدمة : <span><?php echo $cat_data ?></span> </h5>
              </div>
          <div class="contact-form">
            <div class="row">
              <div class="col-12 col-md-12">
                <div class="form-container">
                  <form method="post" action="">
                    <div class="row">
                      <div class="col-md-6">
                        <label for="firstname">اسمك</label>
                        <input type="text" name="name" required/>
                      </div>
                      <div class="col-md-6">
                        <label for="lastname">الجوال</label>
                        <input type="text" name="phone" required/>
                      </div>
                      <div class="col-md-12">
                        <label for="subject">البريد الالكترونى</label>
                        <input type="text" name="email" required/>
                      </div>
                      <div class="col-md-12">
                        <label for="message">ملاحظة</label>
                        <textarea name="body" required></textarea>
                        
                        <label for="message">رفع الملف التعريفي للمنشاة</label>
                        <input class="text-right" type="file" name="file">
                        <input type="submit" name="submit" class="main-btn" value="ارسل ">
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <?php
        include 'back/dbcont.php';
        if(isset($_POST['submit'])){
          $name=$_POST['name'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $body = $_POST['body'];

          $insert_order = $cont->prepare("INSERT INTO orders(name, email, phone , body , cat_id , paid) VALUES(?,?,?,?,?,?)");
          if( $insert_order->execute(array($name , $email , $phone , $body , $cat,0))){
              ?>
                <div class="message" id="mesg">
                  <div class="alert-message">
                    <h4>تم تقديم الطلب</h4>
                    <p>ارجوا المبادره بدفع نصف المبلغ على رقم الحساب الراجحي </p>
                    <p>SA4580000503608010414086</p>
                    <a class="btn btn-outline-success" href="index.php">الرجوع الى الصفحة الرئيسية</a>
                  </div>
                </div>
              <?php
          }
          
            
        }

        ?>

    
      <!-- End contact Us Page-->
<!-- Footer Area Start -->
    <footer class="footer-area">
        <div class="footer-top pt--50 pb--100 text-center">
            <div class="container">
                <div class="">
                    <div class="">
                        <div class="footer-info  mt--60">
                            <ul class="footer-list list-unstyled">
                                <li class="list-inline-item"><a href="https://www.google.com/maps/place/click+to+pass+company+-+%D9%85%D8%A4%D8%B3%D8%B3%D8%A9+%D9%86%D9%82%D8%B1%D8%A9+%D8%A7%D9%84%D8%B9%D8%A8%D9%88%D8%B1+%D9%84%D8%AA%D9%82%D9%86%D9%8A%D8%A9+%D8%A7%D9%84%D9%85%D8%B9%D9%84%D9%88%D9%85%D8%A7%D8%AA%E2%80%AD/@26.3794138,50.1199081,17z/data=!3m1!4b1!4m5!3m4!1s0x3e49e500ac0e078f:0xddac216ba0e3e98e!8m2!3d26.3794138!4d50.1220968?hl=en-SA">
                                    <i class="fa fa-map-marker"></i>
                                    الفردوس، الدمام 
                                    34251
                                </a></li>
                                <li class="list-inline-item"><a href="mailto:info@clicktopass.com">
                                    <i class="fa fa-envelope"></i>
                                    info@clicktopass.com</a></li>
                                <li class="list-inline-item">
                                    <a href="#!">
                                        <i class="fa fa-phone"></i>
                                        0592888158
                                        </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <div class="footer-info mt--60">
                            <div class="logo">
                                <a href="#"><img src="" alt=""></a>
                            </div>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/ClickToPass/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/click2pass1"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/clicktopass/"><i class="fa fa-instagram"></i></a></li>
                                                                <li><a href="https://www.linkedin.com/company/click-to-pass/about/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-bottom-inner text-center">
                          <p>Copyright &copy; 2019 All Right Reserved <a href="https://clicktopass.com/">clicktopass</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/TimeCircles.js"></script>
    <script type="text/javascript" src="js/backstretch.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>