<?php
ob_start();

?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          <div class="sidebar-brand-text mx-3">الجندى للمحاماه</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
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
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                </div>
                <div class="add-article">
                    <div class="row">
                      <form method="post" action="">
                      <?php

                      include '../back/dbcont.php';

                      $id = $_GET['id'];
                      $select_data = $cont->prepare("SELECT * FROM articals WHERE id=?");
                      $select_data->execute(array($id));
                      while($row = $select_data->fetch()){
                        ?>

                          <span>أضافة عنوان</span>
                          <input class="border-primary" type="text" name="title" value="<?php echo $row['head'] ?>">
                          <span> التاريخ</span>
                          <input class="border-primary" type="date" name="date" value="<?php echo $row['date'] ?>">
                          <span>محتوى المقال</span>
                          <textarea class="border-primary" name="body" id="" cols="30" rows="10"> <?php echo $row['body'] ?> </textarea>
                          <input class="border-primary" type="file">
                          <input type="hidden" name="oldFile" value="<?php echo $row['img'] ?>"> 
                          <a href="#!" id="youtube-link">أضافة لينك يوتيوب</a>                      
                          <input class="border-primary youtube" type="text" name="youtube" placeholder="أدخل اللينك" value="<?php echo $row['link']?>">
                          <br/>
                          <input name="submit" class="btn btn-success btn-icon-split" value="تعديل مقال" type="submit">
                          

                        <?php

                      }
                      
                      ?>
                          
                        </form>
                    </div>
                  </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php
      
        if(isset($_POST['submit'])){

          $id = $_GET['id'];
          $title   = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
          $date    = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
          $body    = filter_var($_POST['body'], FILTER_SANITIZE_STRING);
          $youtube = filter_var($_POST['youtube'], FILTER_SANITIZE_STRING);
          // $cat = $_POST['cats'];


          $avatarName = $_FILES['file']['name'];
          $avatarSize = $_FILES['file']['size'];
          $avatarTmp  = $_FILES['file']['tmp_name'];
          $avatarType = $_FILES['file']['type'];

          if(empty($avatarName)){
            $avatar = $_POST['oldFile'];
          }else{
            $avatar = time() . '_' . $avatarName;
            $ImageLink = 'C:\xampp\htdocs\elgendy\upload\\';
            move_uploaded_file($avatarTmp, $ImageLink . $avatar);
          }

          $update_data = $cont->prepare("UPDATE articals SET head=? , body=? , date=? , img=? , link=? wHERE id=?");
          if($update_data->execute(array($title , $body , $date , $avatar , $youtube , $id))){
            header('Location:tables.php');
          }

        }
      
      ?>

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
