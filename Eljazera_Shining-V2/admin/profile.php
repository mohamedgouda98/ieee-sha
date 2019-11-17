<!doctype html>
<html lang="en">

<head>
<title>Admin | Profile</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="keywords" content="admin template, Oculux admin template, dashboard template, flat admin template, responsive admin template, web app, Light Dark version">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<!-- VENDOR CSS -->
<link href="https://fonts.googleapis.com/css?family=Almarai:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
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

                    <li><a href="logout.php" class="icon-menu"><i class="icon-power"></i></a></li>
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
                            <li><a href="index.php">اضافة محتوى</a></li>
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
                                        <h1>تعديل الملف الشخصى</h1>
                                    </div>
                                    <div class="body">

                                        <form id="advanced-form" method="post" action="" data-parsley-validate novalidate>
                                            <?php
                                            include '../back/dbcont.php';

                                                $select_admin_data = $cont->prepare("SELECT * FROM admin");
                                                $select_admin_data->execute();
                                                while($row_admin = $select_admin_data->fetch()){
                                                    ?>

                                            <div class="form-group">
                                                <label for="text-input1">تعديل الاسم</label>
                                                <input type="text" name="name" value="<?php echo $row_admin['name'] ?>" id="text-input1" class="form-control" required data-parsley-minlength="8">
                                            </div>
                                            <div class="form-group">
                                                <label for="text-input1">تعديل البريد الالكترونى</label>
                                                <input type="email" name="email" value="<?php echo $row_admin['email'] ?>" id="text-input1" class="form-control" required data-parsley-minlength="8">
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-12 col-md-4">
                                                    <div class="form-group">
                                                        <label for="text-input1">كلمة السر الجديدة</label>
                                                        <input type="password" name="newPass" id="text-input1" class="form-control"  data-parsley-minlength="8">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="form-group">
                                                        <label for="text-input1">تأكيد كلمة السر</label>
                                                        <input type="password" name="reNewPass" id="text-input1" class="form-control"  data-parsley-minlength="8">
                                                    </div>
                                                </div>
                                            </div>

                                            <input type="submit" name="submit" class="btn btn-primary" value="تعديل">
                                        

                                                    <?php
                                                }
                                            ?>

                                        </form>
                                                <?php
                                                
                                                if(isset($_POST['submit'])){
                                                    $name = $_POST['name'];
                                                    $email = $_POST['email'];
                                                    $old_password = $_POST['old_password'];
                                                    $newPass= $_POST['newPass'];
                                                    $reNewPass = $_POST['reNewPass'];
                                                
                                        
                                                    if(!empty($_POST['newPass']) && !empty($_POST['reNewPass'])){
                                                        if($newPass == $reNewPass){
                                                            $password = $_POST['newPass'];
                                                        }
                                                    }
                                                    
                                                    $update_admin_data = $cont->prepare("UPDATE admin SET name=? , email=? , password=?");
                                                    $update_admin_data->execute(array($name , $email , $password));
                                                    ?>
                                                    <script>
                                                        window.location="profile.php"; 
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
