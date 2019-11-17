<!doctype html>
<html lang="en">


    <head>
        <title>Admin | Login</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
        <meta name="keywords" content="admin template, Oculux admin template, dashboard template, flat admin template, responsive admin template, web app, Light Dark version">
        <meta name="author" content="GetBootstrap, design by: puffintheme.com">
        
        <!-- VENDOR CSS -->
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

<div class="pattern">
    <span class="red"></span>
    <span class="indigo"></span>
    <span class="blue"></span>
    <span class="green"></span>
    <span class="orange"></span>
</div>

<div class="auth-main particles_js">
    <div class="auth_div vivify popIn">
        <div class="auth_brand">
            <a class="navbar-brand" href="javascript:void(0);">مصنع لمعة الجزيرة</a>
        </div>
        <div class="card">
            <div class="body">
                <p class="lead">تسجيل الدخول</p>

                <form class="form-auth-small m-t-20" method="post" action="">
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">البريد الالكترونى</label>
                        <input type="email" name="email" class="form-control round" id="signin-email" placeholder="بريدك الالكترونى">
                    </div>
                    <div class="form-group">
                        <label for="signin-password" class="control-label sr-only">الرقم السرى</label>
                        <input type="password" name="password" class="form-control round" id="signin-password" placeholder="كلمة السر">
                    </div>

                    <input type="submit" name="submit" value="تسجيل الدخول" class="btn btn-primary btn-round btn-block">
                </form>


                <?php
                    include '../back/dbcont.php';
                // Start Back End Code Here >>>

                if(isset($_POST['submit'])){

                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $select_count_admin = $cont->prepare("SELECT COUNT(email) FROM admin WHERE password=? LIMIT 1");
                    $select_count_admin->execute(array($password));
                    $total_count = $select_count_admin->fetchColumn();

                    if($total_count == 1){
                        session_start();

                        $_SESSION['email'] = $email;
                        
                        header('Location:index.php');
                    }

                    ?>
                    <script>
                        alert("<?php echo $total_count?>");
                    </script>
                    <?php

                }
                
                ?>













            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
<!-- END WRAPPER -->
    
<script src="assets/js/libscripts.bundle.js"></script>    
<script src="assets/js/vendorscripts.bundle.js"></script>
<script src="assets/js/mainscripts.bundle.js"></script>
</body>
</html>
