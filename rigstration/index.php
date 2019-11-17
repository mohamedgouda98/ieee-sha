
<?php
  include 'include/navbar.php';
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      </div>

      <!-- Content Row -->
      <div class="row justify-content-center">

        <!-- Earnings (Monthly) Card Example -->
        <!-- <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2 signUPm">
            <div class="card-body ">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  
                  <a href="mails.php" class="h5 mb-0 font-weight-bold  text-decoration-none" id="signUp">Sign Up</a>
                </div>
                <div class="col-auto">
                  <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4 ">
          <div class="card border-left-success shadow h-100 py-2 checkINm">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  
                  <a href="checkin.php" class="h5 mb-0 font-weight-bold text-decoration-none" id="cheakIn">Check in</a>
                </div>
                <div class="col-auto">
                  <i class="far fa-calendar-check fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4 ">
          <div class="card border-left-info shadow h-100 py-2 usersDATAm">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <a href="tables.php" class="h5 mb-0 mr-3 font-weight-bold text-decoration-none">Users data</a>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Content Row -->

    </div>
    <!-- /.container-fluid -->
  <!-- End of Main Content -->


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
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

<?php
  include 'include/footer.php';
?>
