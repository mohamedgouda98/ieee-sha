<!doctype html>
<html lang="en">

<head>
<title>Oculux | Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="keywords" content="admin template, Oculux admin template, dashboard template, flat admin template, responsive admin template, web app, Light Dark version">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link href="https://fonts.googleapis.com/css?family=Almarai:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/vivify.min.css">

<link rel="stylesheet" href="assets/css/c3.min.css"/>

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body class="theme-cyan font-montserrat rtl">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
        <div class="bar5"></div>
    </div>
</div>

<!-- Theme Setting -->
<!-- <div class="themesetting">
    <a href="javascript:void(0);" class="theme_btn"><i class="icon-magic-wand"></i></a>
    <div class="card theme_color">
        <div class="header">
            <h2>Theme Color</h2>
        </div>
        <ul class="choose-skin list-unstyled mb-0">
            <li data-theme="green"><div class="green"></div></li>
            <li data-theme="orange"><div class="orange"></div></li>
            <li data-theme="blush"><div class="blush"></div></li>
            <li data-theme="cyan" class="active"><div class="cyan"></div></li>
            <li data-theme="indigo"><div class="indigo"></div></li>
            <li data-theme="red"><div class="red"></div></li>
        </ul>
    </div>
    <div class="card font_setting">
        <div class="header">
            <h2>Font Settings</h2>
        </div>
        <div>
            <div class="fancy-radio mb-2">
                <label><input name="font" value="font-krub" type="radio"><span><i></i>Krub Google font</span></label>
            </div>
            <div class="fancy-radio mb-2">
                <label><input name="font" value="font-montserrat" type="radio" checked><span><i></i>Montserrat Google font</span></label>
            </div>
            <div class="fancy-radio">
                <label><input name="font" value="font-roboto" type="radio"><span><i></i>Robot Google font</span></label>
            </div>
        </div>
    </div>
    <div class="card setting_switch">
        <div class="header">
            <h2>Settings</h2>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                Light Version
                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="lv-btn">
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
            <li class="list-group-item">
                RTL Version
                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="rtl-btn" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
            <li class="list-group-item">
                Horizontal Henu
                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="hmenu-btn" >
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
            <li class="list-group-item">
                Mini Sidebar
                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="mini-sidebar-btn">
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
        </ul>
    </div>
    <div class="card">
        <div class="form-group">
            <label class="d-block">Traffic this Month <span class="float-right">77%</span></label>
            <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="d-block">Server Load <span class="float-right">50%</span></label>
            <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
            </div>
        </div>
    </div>
</div> -->

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    <nav class="navbar top-navbar">
        <div class="container-fluid">

            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="index.html"><img src="assets/images/icon.svg" alt="Oculux Logo" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="login.html" class="icon-menu"><i class="icon-power"></i></a></li>
                </ul>
            </div>

        </div>
        <div class="progress-container"><div class="progress-bar" id="myBar"></div></div>
    </nav>


    <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="index.html"><img src="assets/images/icon.svg" alt="Oculux Logo" class="img-fluid logo"><span>لمعة الحزيرة</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="assets/images/icon.svg" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>مرحباً بك</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>أسم المستخدم</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                        <li><a href="profile.html"><i class="icon-user"></i>الملف الشخصى</a></li>
                        <li><a href="login.html"><i class="icon-power"></i>تسجيل الخروخ</a></li>
                    </ul>
                </div>                
            </div>  
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="active open">
                        <a href="#myPage" class="has-arrow"><i class="icon-home"></i><span>الرئيسية</span></a>
                        <ul>
                            <li><a href="index.html">اضافة محتوى</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </nav>     
        </div>
    </div>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            </ol>
                        </nav>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h1>تعديل المحتوى</h1>
                                    </div>
                                    <div class="body">


                                        <form id="advanced-form" method="post" enctype= multipart/form-data  action="" data-parsley-validate novalidate>
                                            <?php
                                            include '../back/functions.php';
                                            $id = $_GET['id'];
                                            $select_data = $cont->prepare("SELECT * FROM slider WHERE id=?");
                                            $select_data->execute(array($id));
                                            while($row_data = $select_data->fetch()){
                                            
                                            ?>
                                            <div class="form-group">
                                                <label for="text-input1">تعديل العنوان</label>
                                                <input type="text" name="title" id="text-input1" class="form-control" value="<?php echo $row_data['title']?>" required data-parsley-minlength="8">
                                            </div>
                                            <div class="form-group">
                                                <label for="text-input1">تعديل النص</label>
                                                <textarea class="form-control" name="body" rows="5" cols="30" value="<?php echo $row_data['body']?>" required> <?php echo $row_data['body']?></textarea>
                                                <h6 class="m-t-25">اضافة صورة</h6>
                                                <div class="custom-file">
                                                    <input type="hidden" name="old_img" value="<?php $row_data['img']?>">
                                                    <input type="file" name="file">
                                                </div>
                                            </div>
                                            <input type="submit" name="submit" class="btn btn-primary" value="تعديل">
                                        <?php
                                            }
                                        ?>
                                        </form>

                                        <?php
                                         if(isset($_POST['submit'])){
                                            $title = $_POST['title'];
                                            $body  = $_POST['body'];

                                            $avatarName = $_FILES['file']['name'];
                                            $avatarSize = $_FILES['file']['size'];
                                            $avatarTmp  = $_FILES['file']['tmp_name'];
                                            $avatarType = $_FILES['file']['type'];

                                            if(is_null($avatarName)){
                                                $avater = $_POST['old_img'];
                                            }else{
                                                $avatar = time() . '_' . $avatarName;
                                            }
                                            
                                            $ImageLink = dirname(__FILE__) . "/../upload//";
                                            move_uploaded_file($avatarTmp, $ImageLink . $avatar);

                                            $update_img = $cont->prepare("UPDATE slider SET title=? , body=? , img=? WHERE id=?");
                                            $update_img->execute(array($title , $body , $avatar , $id));
                                            ?>
                                                <script>
                                                    window.location="index.php"; 
                                                </script>
                                            <?php
                                            }
                                        ?>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="assets/js/libscripts.bundle.js"></script>
<script src="assets/js/vendorscripts.bundle.js"></script>

<script src="assets/js/c3.bundle.js"></script>

<script src="assets/js/mainscripts.bundle.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>
