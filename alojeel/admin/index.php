<?php
session_start();
include '../back/dbcont.php';

if(isset($_SESSION["email"])){

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

  <!-- <meta charset="utf-8"> -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content=""> -->

  <title> Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
    <link rel="stylesheet" href="../css/flaticon.css"/>
  <link href="css/sb-admin-2.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          <div class="sidebar-brand-text mx-3"> <?php echo $_SESSION['name']?> </div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>لوحة التحكم</span></a>
        </li>
  
        <!-- Nav Item - Pages Collapse Menu -->
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="profile.php">تعديل الملف الشخصى</a>
            </div>
          </div>
        </li>
       
  
      </ul>
      <!-- End of Sidebar -->


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php
          include 'incloud/header.php';
          
          $action = isset($_GET['action']) ? $_GET['action'] : 'arabic';
          if($action == "english"){
            $lang = 1;
          }else{
            $lang = 0;
          }
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        

          <div class="row">
            <!-- Area Chart -->
            <div class="col-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">سليدر</h6>
                </div>
                <div class="add-article">
                    <div class="row">


                      <form method="post" action="" enctype= multipart/form-data>

                      <?php
                      $select_about_slider = $cont->prepare("SELECT * FROM slider WHERE lang=?");
                      $select_about_slider->execute(array($lang));
                      while($row_slider = $select_about_slider->fetch()){
                        ?>
                          <span class="span-head">إضافة عنوان</span>
                          <br/>

                          <input name="head" style='border: 1px solid #000' type="text" value="<?php echo $row_slider['head'] ?>">
                          <br/>

                          <span class="span-head">إضافة صورة</span>
                          <br/>
                          <input name="file" style='border: 1px solid #000' type="file" >
                        
                          <br/>
                          <span>المحتوى</span>
                          <textarea class="border-primary" name="body" id="" cols="30" rows="10" value="<?php echo $row_slider['body']?>"><?php echo urldecode($row_slider['body']) ?></textarea>
                          <br/>
                          <input class="btn btn-success btn-icon-split add-article-btn" type="submit" name="submit_about" value="تعديل">

                        <?php
                      } // End While Loop >>  
                      
                      ?>
                         
                        </form>


                    <?php
                    
                    if(isset($_POST['submit_about'])){

                      $body    = filter_var($_POST['body'], FILTER_SANITIZE_STRING);
                      $head    = filter_var($_POST['head'], FILTER_SANITIZE_STRING);


                      $avatarName = $_FILES['file']['name'];
                      $avatarSize = $_FILES['file']['size'];
                      $avatarTmp  = $_FILES['file']['tmp_name'];
                      $avatarType = $_FILES['file']['type'];

                      $avatar = time() . '_' . $avatarName;
                    //   $ImageLink = 'C:\xampp\htdocs\alojeel\upload\\';
                    
                      $ImageLink = dirname(__FILE__) . "/../upload//";
                      move_uploaded_file($avatarTmp, $ImageLink . $avatar);

                      $update_slider = $cont->prepare("UPDATE slider SET head=? , body=? , img=? WHERE lang=?");
                      if($update_slider->execute(array($head , $body , $avatar , $lang))){
                        ?>
                          <script>
                            window.location="index.php"; 
                          </script>
                        <?php
                      }else{
                        ?>
                        <script>
                          window.location="indegfdgx.php"; 
                        </script>
                      <?php
                      }

                    }
                    
                    ?>


                    </div>
                  </div>
              </div>
            </div>
          
          
          
          
          </div> <!-- End Row -->


          <div class="row">
            <!-- Area Chart -->
            <div class="col-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">من نحن</h6>
                </div>
                <div class="add-article">
                    <div class="row">


                      <form method="post" action="" enctype= multipart/form-data>

                      <?php
                      $select_about_us_data = $cont->prepare("SELECT * FROM about_us WHERE lang=?");
                      $select_about_us_data->execute(array($lang));
                      while($row_about = $select_about_us_data->fetch()){
                        ?>
                          <span class="span-head">إضافة عنوان</span>
                          <br/>

                          <input name="head" style='border: 1px solid #000' type="text" value="<?php echo $row_about['head']?>" >
                          <br/>
                          <span class="span-head">إضافة صورة</span>
                          <br/>
                          <input name="file" style='border: 1px solid #000' type="file" >

                          <br/>
                          <span>المحتوى</span>
                          <textarea class="border-primary" name="body" id="" cols="30" rows="10" value="<?php echo $row_about['body']?>"><?php echo $row_about['body'] ?></textarea>
                          <br/>
                          <input class="btn btn-success btn-icon-split add-article-btn" type="submit" name="submit_about_us" value="تعديل">

                        <?php
                      } // End While Loop >>
                      
                      ?>
                         
                        </form>


                    <?php
                    
                    if(isset($_POST['submit_about_us'])){

                      $head    = filter_var($_POST['head'], FILTER_SANITIZE_STRING);
                      $body    = filter_var($_POST['body'], FILTER_SANITIZE_STRING);
                  
                      $avatarName = $_FILES['file']['name'];
                      $avatarSize = $_FILES['file']['size'];
                      $avatarTmp  = $_FILES['file']['tmp_name'];
                      $avatarType = $_FILES['file']['type'];

                      $avatar = time() . '_' . $avatarName;
                      $ImageLink = dirname(__FILE__) . "/../upload//";
                      move_uploaded_file($avatarTmp, $ImageLink . $avatar);

                      $update_about_us = $cont->prepare("UPDATE about_us SET head=? , body=? , img=? WHERE lang=?");
                      if($update_about_us->execute(array($head , $body , $avatar , $lang))){
                        ?>
                          <script>
                            window.location="index.php"; 
                          </script>
                        <?php
                      }else{
                        ?>
                        <script>
                          window.location="indegfdgx.php"; 
                        </script>
                      <?php
                      }

                    }
                    
                    ?>


                    </div>
                  </div>
              </div>
            </div>
          
          
          
          
          </div> <!-- End Row -->


          <div class="row">
            <!-- Area Chart -->
            <div class="col-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">خدماتنا</h6>
                </div>
                <div class="add-article">
                    <div class="row">

                    <?php
                      $select_services_data = $cont->prepare("SELECT * FROM services WHERE lang=?");
                      $select_services_data->execute(array($lang));
                      while($row_service = $select_services_data->fetch()){
                        ?>

                        <div class="card" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $row_service['head'] ?></h5>
                            <p class="card-text"><?php echo $row_service['body']?></p>
                            <a href="delete.php?action=service&id=<?php echo $row_service['id'] ?>" class="card-link">Delete</a>
                          </div>
                        </div>
                                                
                      <?php
                      }
                      ?>

                      <form method="post" action="" enctype= multipart/form-data>

                          <span class="span-head">اسم الخدمة</span>
                          <br/>

                          <input name="head" style='border: 1px solid #000' type="text" >
                          <br/>

                          <br/>
                          <span>المحتوى</span>
                          <textarea class="border-primary" name="body" id="" cols="30" rows="10"></textarea>
                          <br/>
                          <input class="btn btn-success btn-icon-split add-article-btn" type="submit" name="submit_service" value="تعديل">
                         
                        </form>


                    <?php
                    
                    if(isset($_POST['submit_service'])){

                      $head    = filter_var($_POST['head'], FILTER_SANITIZE_STRING);
                      $body    = filter_var($_POST['body'], FILTER_SANITIZE_STRING);
                     

                      $insert_service = $cont->prepare("INSERT INTO services(head , body , lang) VALUES(?,?,?)");
                      if($insert_service->execute(array($head , $body , $lang))){
                        ?>
                          <script>
                            window.location="index.php"; 
                          </script>
                        <?php
                      }else{
                        ?>
                        <script>
                          window.location="indegfdgx.php"; 
                        </script>
                      <?php
                      }

                    }
                    
                    ?>


                    </div>
                  </div>
              </div>
            </div>
          
          
          
          
          </div> <!-- End Row -->

          <div class="row">
            <!-- Area Chart -->
            <div class="col-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">تواصل معنا</h6>
                </div>
                <div class="add-article">
                    <div class="row">


                      <form method="post" action="" enctype= multipart/form-data>

                      <?php
                      $select_contact_data = $cont->prepare("SELECT * FROM contact WHERE lang=?");
                      $select_contact_data->execute(array($lang));
                      while($row_contact = $select_contact_data->fetch()){
                        ?>
                          <span class="span-head">العنوان</span>
                          <br/>

                          <input name="title" style='border: 1px solid #000' type="text" value="<?php echo $row_contact['title'] ?>">
                          <br/>

                          <span class="span-head">الهاتف</span>
                          <br/>

                          <input name="phone" style='border: 1px solid #000' type="text" value="<?php echo $row_contact['phone'] ?>">
                          <br/>

                          <span class="span-head">البريد الالكترونى</span>
                          <input name="email" style='border: 1px solid #000' type="text" value="<?php echo $row_contact['email'] ?>">
                          <br/>

                          <br/>
                          <input class="btn btn-success btn-icon-split add-article-btn" type="submit" name="submit_contact" value="تعديل">

                        <?php
                      } // End While Loop >>
                      
                      ?>
                         
                        </form>


                    <?php
                    
                    if(isset($_POST['submit_contact'])){

                      $title    = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
                      $phone    = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
                      $email    = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

                      $update_contact = $cont->prepare("UPDATE contact SET title=? , phone=? , email=? WHERE lang=?");
                      if($update_contact->execute(array($title , $phone , $email , $lang))){
                        ?>
                          <script>
                            window.location="index.php"; 
                          </script>
                        <?php
                      }else{
                        ?>
                        <script>
                          window.location="indegfdgx.php"; 
                        </script>
                      <?php
                      }

                    }
                    
                    ?>


                    </div>
                  </div>
              </div>
            </div>
          
          
          
          
          </div> <!-- End Row -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>
              Programming and Designed by 
              <a href="https://www.clicktopass.com/" target="blank" class="clr-orange"><u>clicktopass</u></a>
            </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php
}else{
  ?>
  <script>
     window.location="login.php"; 
</script>
  <?php
}
?>
