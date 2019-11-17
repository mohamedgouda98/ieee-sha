<?php
  include '../back/dbcont.php';
  $action = isset($_GET['action']) ? $_GET['action'] : 'manage';
  if($action == "manage"){
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tables</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

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
            <span>لوحة التحكم</span></a>
        </li>
  
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="tables.php">المقالات</a>
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
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">تفاصيل المقالات</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" >
                  <thead>
                    <tr>
                      <th>رقم المقال</th>
                      <th>العنوان</th>
                      <th>نبذة</th>
                      <th>الحالة</th>
                      <th>تعليق</th>
                      <th>تعديل</th>
                      <th>حذف</th>
                    </tr>
                  </thead>

                  <?php
                  
                  $select_articals = $cont->prepare("SELECT * FROM articals");
                  $select_articals->execute();
                  $count = 0 ;
                  while($row = $select_articals->fetch()){
                    $count ++;
                    ?>

                      <tbody>
                        <tr>
                          <td><?php echo $count ?></td>
                          <td><?php echo $row['head'] ?></td>
                          <td><?php echo $row['body'] ?></td>
                          <td>
                           
                              <?php
                              // status Section >>>>
                              if($row['status'] == 1){
                                ?>
                                <span class=" btn btn-success btn-circle btn-sm">
                                  <i class="fas fa-check"></i>
                                </span>
                              <?php
                              }else{
                                ?>
                                <span class=" btn btn-warning btn-circle btn-sm">
                                  <i class="fas fa-exclamation-triangle"></i>
                                </span>
                              <?php
                              }
                              
                              ?>                             
                          </td>


                          <td>
                            <?php
                            //Mute Section >>>

                            if($row['status'] == 0){
                              ?>
                              <a href="tables.php?action=unmute&id=<?php echo $row['id']?>" class="btn btn-success btn-circle btn-sm">
                              <i class="fas fa-check"></i>
                              </a>
                            <?php
                            }else{
                              ?>
                                <a href="tables.php?action=mute&id=<?php echo $row['id']?>" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-times"></i>
                            </a>
                              <?php
                            }
                            ?>
                          </td>

                          <td>
                            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                          </td>
                          <td>
                            <a href="tables.php?action=delete&id=<?php echo $row['id']?>" class="btn btn-danger btn-circle btn-sm">
                              <i class="fas fa-trash"></i>
                            </a>
                          </td>
                        </tr>
                        
                      </tbody>

                    <?php
                  }

                  ?>
                 
                
                </table>
              </div>
            </div>
          </div>

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



  <?php
  
    }elseif($action == "mute"){
    $id = $_GET['id'];
    $update_artical = $cont->prepare("UPDATE articals SET `status`=? WHERE id=?");
    if($update_artical->execute(array(0 , $id))){
    header('Location:tables.php');
  
  }else{
    header('Location:tablesfd.php');

  }


  }elseif($action == "unmute"){
    $id = $_GET['id'];
    $update_artical = $cont->prepare("UPDATE articals SET `status`=? WHERE id=?");
    if($update_artical->execute(array(1 , $id))){
    header('Location:tables.php');

    }else{
      header('Location:tablesfd.php');
    }

  }elseif($action == "delete"){
    $id = $_GET['id'];
    $delete_artical = $cont->prepare("DELETE FROM articals WHERE id=?");
    $delete_artical->execute(array($id));
    header('Location:tables.php');
  }
  
  
  ?>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>

</body>

</html>