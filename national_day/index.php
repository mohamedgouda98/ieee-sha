<?php
  include 'back/dbcont.php';

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
    <!-- Carousel Css Include-->
    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="css/aos.css"/>
    <link rel="icon" href="/images/click-logo.png" type="image/x-icon">
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
              <div class="header-img-right "><img class="img-fluid" src="images/img-right.png" alt=""/></div>
              <div class="header-logo d-none d-md-block"><img src="images/logo.jpg" alt=""/></div>
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
    <!-- End Header Section-->
    <section class="slider">
      <div class="slider-content">
          <div class="slider-content-overlay">
          </div>
          <div class="text-contect text-center">
              <h1>دام عزك ياوطن</h1>
              <p>لان الوطن يستاهل عروض clicktopass تبدا من اليوم!</p>
              <div id="clockdiv">
                <div>
                  <span id="days" class="days"></span>
                  <div class="smalltext">يوم</div>
                </div>
                <div>
                  <span id="hours" class="hours"></span>
                  <div class="smalltext">ساعة</div>
                </div>
                <div>
                  <span id="minutes" class="minutes"></span>
                  <div class="smalltext">دقيقة</div>
                </div>
                <div>
                  <span id="seconds" class="seconds"></span>
                  <div class="smalltext">ثانية</div>
                </div>
              </div>
            </div>
          <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"> -->
              <source src="video/national_day.mp4" type="video/mp4">
          </video>
      </div>
    </section>
    <div class="ticket-text text-center">
      <h2>التذكر المتبقية</h2>
    </div>
    <div class="ticket text-center">
      <div>
          <?php
            $select_count = $cont->prepare("SELECT COUNT(id) FROM orders");
            $select_count->execute();
            $total = 30- $select_count->fetchcolumn();
            
          ?>
        <span><?php echo $total?></span>
      </div>
    </div>
    <div class="our-services">
      <div class="container">
          <div class="services-title">
            <h1 class="text-center">عروضنا</h1>
          </div>
          <div class="row service-slider-active">
              <div class="col-lg-4 col-md-6">
                  <!-- single-service Start -->
                  <div class="single-service mt--30 mb--30">
                      <div class="service-image">
                          <img src="images/ser3.jpeg" alt="">
                      </div>
                      <div class="service-content text-center">
                          <h3>الموقع التعريفى</h3> 
                          <ul class="list-unstyled text-right">
                            <li>- تصميم مناسب  </li>
                            <li>- متوافق مع الاجهزه الذكيه</li>
                            <li>- ربط السوشل ميديا</li>
                            <li>- الدومين  </li>
                            <li>- ٦ ايميلات  </li>
                            <li>- استضافة لمدة سنه مجانا</li>
                          </ul>
                          <a href="form.php?action=3">اطلب الان</a>
                      </div>
                  </div>
                  <!-- single-service End -->
              </div>
              <div class="col-lg-4  col-md-6">
                  <!-- single-service Start -->
                  <div class="single-service mt--30 mb--30">
                      <div class="service-image">
                          <img src="images/ser1.jpeg" alt="">
                      </div>
                      <div class="service-content text-center">
                          <h3>المتجر الالكترونى</h3>
                          <ul class="list-unstyled text-right">
                            <li>- متوافق مع جميع الاجهزه </li>
                            <li>- ضبط اقسام المتجر</li>
                            <li>- طريقة الدفع paypal</li>
                            <li>- تصميم احترافي و جذاب ومناسب </li>
                            <li>- سلة المشتريات </li>
                            <li>- اضافة ٥٠ منتج</li>
                            <li>- مساحه تخزين كبيره</li>
                            <li>- الدومين</li>
                            <li>- يدعم اللغه العربيه</li>
                          </ul>
                          <a href="form.php?action=1" class="border-radius">اطلب الان</a>
                      </div>
                  </div>
                  <!-- single-service End -->
              </div>
              <div class="col-lg-4  col-md-6">
                  <!-- single-service Start -->
                  <div class="single-service mt--30 mb--30">
                      <div class="service-image">
                          <img src="images/ser2.jpeg" alt="">
                      </div>
                      <div class="service-content text-center">
                         <h3>تطبيق المتجر الالكترونى</h3>
                          <ul class="list-unstyled text-right">
                            <li> - تصميم عصري وجديد</li>
                            <li>- شاشة لعرض ااشهر المنتجات </li>
                            <li>- شاشة تفاصيل لكل منتج </li>
                            <li> - تصنيف المنتجات على حسب النوع </li>
                            <li>- امكانية البحث فى المنتجات </li>
                            <li>- مساحة لرفع المنتجات اون لاين تصل الى 1 جيجا </li>
                            <li class="small">- لا يشمل رسوم متجر ابل وقوقل بلاى </li>
                          </ul>
                          <a href="form.php?action=2">اطلب الان</a>
                      </div>
                  </div>
                  <!-- single-service End -->
              </div>
          </div>
      </div>
    </div>

    
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
                                <li><a href="https://mobile.twitter.com/clicktopass/"><i class="fa fa-twitter"></i></a></li>
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
