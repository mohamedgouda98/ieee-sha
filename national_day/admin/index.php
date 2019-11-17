<?php
session_start();
 include '../back/dbcont.php';
ob_start();
if(isset($_SESSION["email"])){
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/index_style.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">


        <!-- Begin Page Content -->
        <div class="container-fluid">

        <div class="container visitors">
        <div class="col-12 d-flex justify-content-center">
            <div class="visitor-counter text-center">
                <i class="fas fa-user fa-2x"></i>
                <h4><em>Visitors</em></h4>
                <?php
                  $select_count_visitors = $cont->prepare("SELECT COUNT(id) FROM ips");
                  $select_count_visitors->execute();
                  $total_count = $select_count_visitors->fetchcolumn();
                ?>
                <p class="text-primary font-weight-bold"><?php echo $total_count?></p>  
             </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-hover table-bordered table-striped">
            <thead class="text-center">
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        E-mail
                    </th>
                    <th>
                        Phone
                    </th>
                    <th>
                        cat
                    </th>
                    <th>
                        Paid
                    </th>
                      <th>
                        Update
                    </th>
                    <th>
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
            
              
              $cats = array("المتجر الالكتروني" , "تطبيق المتجر الالكتروني" , "الموقع التعريفي");
              
              $select_data = $cont->prepare("SELECT * FROM orders ORDER BY id");
              $select_data->execute();
              $count= 0 ;
              while($row = $select_data->fetch()){
                $count++;
                ?>

                  <tr class="text-center font-weight-bold">
                    <td><?php echo $count?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><?php echo $cats[$row['cat_id']-1]?></td>
                    <td><?php
                        if($row['paid'] == 1){
                            echo "done";
                        }else{
                            echo "Yet";
                        }
                    ?></td>
                    
                    <td><a href="update.php?id=<?php echo $row['id']?>&st=<?php echo $row['paid']?>" class="btn btn-success">Update</a></td>
                    
                    <td><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
                  </tr>


                <?php
              }
            
            ?>
            
              

            </tbody>
        </table>
    </div>



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
?>