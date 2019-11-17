<?php
session_start();
if(isset($_SESSION['email'])){
    include '../back/functions.php';
?>
<!doctype html>
<html lang="en">

<head>
<title>Admin | Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="keywords" content="admin template, Oculux admin template, dashboard template, flat admin template, responsive admin template, web app, Light Dark version">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

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
                    <?php
                        $select_admin_name = $cont->prepare("SELECT name FROM admin WHERE email=?");
                        $select_admin_name->execute(array($_SESSION['email']));
                        $admin_name =  $select_admin_name->fetchColumn();
                    ?>
                    <span>مرحباً بك</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?php echo $admin_name?></strong></a>
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
                        <h1>أضافة محتوى</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            </ol>
                        </nav>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>تعديل السليدر</h2>
                                    </div>
                                    <div class="body">

                                        <form id="basic-form" method="post" action="" enctype= multipart/form-data >
                                            <div class="form-group">
                                                <label>اضافة عنوان</label>
                                                <input type="text" name="title" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>أضافة فقرة نصية</label>
                                                <input type="text" name="body" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <h6>اضافة صورة</h6>
                                                    <div class="input-group mb-3">
                                                         <div class="input-group-prepend">
                                                         </div>
                                                         <div class="custom-file">
                                                             <input name="file" type="file">
                                                         </div>
                                                     </div>
                                                </div>
                                            </div>

                                            <br>
                                            <input type="submit" name="submit" class="btn btn-primary" value="اضافة">

                                        </form>
                                        <?php

                                            if(isset($_POST['submit'])){
                                            $title = $_POST['title'];
                                            $body  = $_POST['body'];

                                            $avatarName = $_FILES['file']['name'];
                                            $avatarSize = $_FILES['file']['size'];
                                            $avatarTmp  = $_FILES['file']['tmp_name'];
                                            $avatarType = $_FILES['file']['type'];

                                            $avatar = time() . '_' . $avatarName;
                                            
                                            $ImageLink = dirname(__FILE__) . "/../upload//";
                                            move_uploaded_file($avatarTmp, $ImageLink . $avatar);

                                            $data_arr = array("title" ,"body" , "img");
                                            $data_values_arr= array($title , $body , $avatar);

                                            Insertdata($data_arr , "slider" , $data_values_arr);
                                            
                                            }

                                        ?>

                                        <div id="lightgallery" class="row clearfix lightGallery  m-t-50">
                                            
                                            <?php
                                                $img_url ='upload\\';
                                                $select_imgs = $cont->prepare("SELECT * FROM slider");
                                                $select_imgs->execute();
                                                while($row_img = $select_imgs->fetch()){
                                            ?>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="card w_card3">
                                                        <div class="body">
                                                            <div class="text-center">
                                                                <div class="col-12">
                                                                    <img class="img-fluid rounded" src="<?php echo $img_url . $row_img['img']?>" alt="">
                                                                </div>
                                                                <h2 class="m-b-15 m-t-15"><?php echo $row_img['title'] ?></h2>
                                                                <p class="mb-0"><?php echo $row_img['body'] ?></p>
                                                                <a href="edit.php?id=<?php echo $row_img['id']?>" class="btn btn-primary m-t-25">تعديل</a>
                                                                <a href="delete.php?id=<?php echo $row_img['id']?>&t=slider" class="btn btn-danger m-t-25">خذف</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        

                                            <?php
                                                }
                                            ?>


                                        </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>من نحن</h2>
                                    </div>
                                    <div class="body">

                                        <form id="advanced-form" method="post" action="" enctype= multipart/form-data data-parsley-validate novalidate>
                                            <?php 
                                            
                                            $select_about_us = $cont->prepare("SELECT * FROM about_us");
                                            $select_about_us->execute();
                                            while($row_about = $select_about_us->fetch()){
                                                ?>

                                            <div class="form-group">
                                                <label for="text-input1">اضافة عنوان</label>
                                                <input type="text" name="title" id="text-input1" value="<?php echo $row_about['title']?>" class="form-control" required data-parsley-minlength="8">
                                            </div>
                                            <div class="form-group">
                                                <label>اضافة نبذة عن الشركة</label>
                                                <textarea title="body" name="body" class="form-control" rows="5" cols="30" required> <?php echo $row_about['body']?> </textarea>

                                            </div>
                                            <input type="submit" name="submit_about" class="btn btn-primary" value="اضافة">
                       
                                            <?php
                                                }
                                            ?>
                                            </form>
                                        <?php
                                        if(isset($_POST['submit_about'])){
                                            $title = $_POST['title'];
                                            $body  = $_POST['body'];

                                            $avatarName = $_FILES['file']['name'];
                                            $avatarSize = $_FILES['file']['size'];
                                            $avatarTmp  = $_FILES['file']['tmp_name'];
                                            $avatarType = $_FILES['file']['type'];

                                            $avatar = time() . '_' . $avatarName;
                                            
                                            $ImageLink = dirname(__FILE__) . "/../upload//";
                                            move_uploaded_file($avatarTmp, $ImageLink . $avatar);

                                            $update_about_us = $cont->prepare("UPDATE about_us SET title=? , body=? , img=?");
                                            $update_about_us->execute(array($title , $body , $avatar));
                                            ?>
                                                <script>
                                                    window.location="index.php"; 
                                                </script>
                                            <?php

                                        }
                                        ?>

                                        <div id="lightgallery" class="row clearfix lightGallery  m-t-50">


                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h1>خدماتنا</h1>
                                    </div>
                                    <div class="body">

                                        <form method="post" action="" id="advanced-form" data-parsley-validate novalidate>
                                            <div class="form-group">
                                                <label for="text-input1">اضافة عنوان الخدمة</label>
                                                <input type="text" name="title" id="text-input1" class="form-control" required data-parsley-minlength="8">
                                            </div>
                                            <div class="form-group">
                                                <label>اضافة وصف الخدمة</label>
                                                <textarea name="body" class="form-control" rows="5" cols="30" required></textarea>
                                            </div>
                                            <input name="submit_service" type="submit" class="btn btn-primary" value="اضافة">
                                        </form>

                                        <?php
                                        
                                        if(isset($_POST['submit_service'])){
                                            $title = $_POST['title'];
                                            $body  = $_POST['body'];
                                            $insert_service = $cont->prepare("INSERT INTO services(title , body) VALUES(?,?)");
                                            $insert_service->execute(array($title , $body));
                                        }
                                        
                                        ?>

                                        <div class="row">
                                            <?php
                                                $select_services = $cont->prepare("SELECT * FROM services");
                                                $select_services->execute();
                                                while($row_service = $select_services->fetch()){
                                                    ?>

                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="card w_card3 m-t-25" style=" border:1px solid rgb(57, 61, 66);">
                                                            <div class="body">
                                                                <div class="text-center">
                                                                    <h4 class="m-b-15"> <?php echo $row_service['title'] ?></h4>
                                                                    <p><?php echo $row_service['body']?></p>
                                                                    <a href="delete.php?id=<?php echo $row_service['id'] ?>&t=services" class="btn btn-danger m-t-25">خذف</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                

                                                    <?php
                                                } // End Services Loop
                                            ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h1>مشاريعنا</h1>
                                    </div>
                                    <div class="body">


                                        <form id="advanced-form" data-parsley-validate novalidate enctype= multipart/form-data method="post" action=""> 
                                            <h6 class="m-t-25 m-b-15">اضافة صورة</h6>
                                            <div class="input-group m-b-25">
                                                <div class="custom-file">
                                                    <input type="file" name="file">
                                                </div>
                                            </div>
                                            <input type="submit" name="submit_project" class="btn btn-primary" value="اضافة">
                                            
                                        </form>
                                        <?php
                                        
                                        if(isset($_POST['submit_project'])){

                                            $avatarName = $_FILES['file']['name'];
                                            $avatarSize = $_FILES['file']['size'];
                                            $avatarTmp  = $_FILES['file']['tmp_name'];
                                            $avatarType = $_FILES['file']['type'];

                                            $avatar = time() . '_' . $avatarName;
                                            
                                            $ImageLink = dirname(__FILE__) . "/../upload//";
                                            move_uploaded_file($avatarTmp, $ImageLink . $avatar);

                                            $insert_project = $cont->prepare("INSERT INTO projects(img) VALUES(?)");
                                            $insert_project->execute(array($avatar));

                                        }

                                        ?>

                                        <div id="lightgallery" class="row clearfix lightGallery  m-t-50">
                                            <?php
                                                $img_url ='upload\\';
                                                $select_projects = $cont->prepare("SELECT * FROM projects");
                                                $select_projects->execute();
                                                while($row_project = $select_projects->fetch()){
                                                    ?>
                                                <div class="col-lg-3 col-md-6 m-b-30">
                                                    <a class="light-link" ><img class="img-fluid rounded" src="<?php echo $img_url . $row_project['img']?>" alt=""></a>
                                                </div>

                                                    <?php
                                                }
                                            ?>
                                                
                                            </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h1>تواصل معنا</h1>
                                    </div>
                                    <div class="body">

                                        <form action="" method="post" id="advanced-form" data-parsley-validate novalidate>
                                                <?php
                                                
                                                $select_contact_us = $cont->prepare("SELECT * FROM contact_us");
                                                $select_contact_us->execute();
                                                while($row_contact = $select_contact_us->fetch()){
                                                    ?>
                                            <div class="form-group">
                                                <label for="text-input1">اضافة عنوان المصنع</label>
                                                <input type="text" name="addr" value="<?php echo  ($row_contact['addr'])?>" id="text-input1" class="form-control" required data-parsley-minlength="8">
                                            </div>

                                            <div class="form-group">
                                                <label for="text-input1">اضافة رقم الجوال</label>
                                                <input type="text" name="phone" value="<?php echo $row_contact['phone']?>" id="text-input1" class="form-control" required data-parsley-minlength="8">
                                            </div>
                                            <div class="form-group">
                                                <label for="text-input1">اضافة البريد الالكترونى</label>
                                                <input type="text" name="email" value="<?php echo $row_contact['email']?>" id="text-input1" class="form-control" required data-parsley-minlength="8">
                                            </div>
                                            <div class="form-group">
                                                <label for="text-input1">اضافة حساب تويتر</label>
                                                <input type="text" name="twiter" value="<?php echo $row_contact['twiter']?>" id="text-input1" class="form-control" required data-parsley-minlength="8">
                                            </div>
                                            <div class="form-group">
                                                <label for="text-input1">اضافة حساب انستجرام</label>
                                                <input type="text" name="instagram" value="<?php echo $row_contact['instagram']?>" id="text-input1" class="form-control" required data-parsley-minlength="8">
                                            </div>
                                            <input type="submit" name="submit_contact_us" class="btn btn-primary" value="اضافة">
                                                    <?php
                                                }

                                                ?>
                                        </form>

                                        <?php
                                        
                                            if(isset($_POST['submit_contact_us'])){
                                                $addr = $_POST['addr'];
                                                $phone = $_POST['phone'];
                                                $email = $_POST['email'];
                                                $twiter = $_POST['twiter'];
                                                $instagram = $_POST['instagram'];

                                                $update_contact_us = $cont->prepare("UPDATE contact_us SET addr=? , phone=? , email=? , twiter=? , instagram=?");
                                                $update_contact_us->execute(array($addr , $phone , $email , $twiter , $instagram));
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
<?php
}else{
    header('Location:login.php');
}
?>
