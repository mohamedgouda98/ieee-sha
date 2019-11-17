<?php
  include 'back/functions.php';
?>
<!DOCTYPE html>
<html lang="en" class="wide wow-animation" dir="rtl">
  <head>
    <title>مصنع لمعة الجزيرة | الرئيسية</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body >
  <div class="page">
    <header class="page-head">
      <div class="rd-navbar-wrap">
        <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="53px" data-lg-stick-up-offset="53px" data-md-stick="true" data-lg-stick-up="true" class="rd-navbar rd-navbar-corporate-light">
          <div class="rd-navbar-inner">
            <div class="rd-navbar-aside-wrap">
              <div class="rd-navbar-aside">
                <div data-rd-navbar-toggle=".rd-navbar-aside" class="rd-navbar-aside-toggle"><span></span></div>
                <div class="rd-navbar-aside-content">
                  <ul class="rd-navbar-aside-group list-units">
                    <li>
                      <div class="unit unit-horizontal unit-spacing-xs unit-middle">

                      <?php 
              $contact=$cont->prepare("SELECT * FROM contact_us");
              $contact->execute();
              $row=  $contact->fetch();

               ?>
                        <div class="unit-left"><span class="icon icon-xxs icon-primary material-icons-phone"></span></div>
                        <div class="unit-body"><a href="callto:#" class="link-secondary"><?php echo $row['phone']?> </a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                        <div class="unit-left"><span class="icon icon-xxs icon-primary fa-envelope-o"></span></div>
                        <div class="unit-body"><a href="/cdn-cgi/l/email-protection#ab88" class="link-secondary"><span class="__cf_email__" data-cfemail="81e8efe7eec1e5e4eceeede8efeaafeef3e6"><?php echo $row['email']?></span></a></div>
                      </div>
                    </li>
                  </ul>
                  <div class="rd-navbar-aside-group">
                    <ul class="list-inline list-inline-reset">
                      <li><a href="<?php echo $row['instagram']?>" class="icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-instagram"></a></li>
                      <li><a href="<?php echo $row['twiter']?>" class="icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-twitter"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-group">
              <div class="rd-navbar-panel">
                <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <a href="index.html" class="rd-navbar-brand brand"><img src="images/logo-black.png" width="200" height="22" alt="logo"/></a> </div>
              <div class="rd-navbar-nav-wrap">
                <div class="rd-navbar-nav-inner">
                  <ul class="rd-navbar-nav">
                    <li class="active"><a href="index.html">الرئيسية</a> </li>
                    <li><a href="#!" data-value="about">من نحن</a></li>
                    <li><a href="#!" data-value="services">خدماتنا</a></li>
                    <li><a href="#!" data-value="projcts">مشاريعنا</a></li>
                    <li><a href="#!" data-value="contact">تواصل معنا</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>