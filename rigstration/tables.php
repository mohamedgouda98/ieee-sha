<?php
  include 'include/navbar.php';   
  include 'back/functions.php'; 
  $action = isset($_GET['action']) ? $_GET['action']:'all';

?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800 text-center">Dash Board</h1>
    <div class="text-center mb-4">

          <a href="tables.php?action=all" class="btn btn-info mr-2">All</a>
          <a href="tables.php?action=done" class="btn btn-success mr-2">Done</a>
          <a href="tables.php?action=notdone" class="btn btn-danger">Not Done</a>
    </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Our Table</h6>
            </div>
            <!-- Our TABLE -->
            <div class="container-fluid">
        <table class="table table-hover table-bordered table-striped my-5 col-md-12">
            <thead class="text-center">
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                        E-mail
                    </th>
                    <th>
                        Phone
                    </th>
                    <th>
                        Validation
                    </th>
                </tr>
            </thead>
            <tbody>
              <?php
              
                if($action == "all"){
                  $count = 0;

                  $select_all_data = $cont->prepare("SELECT * FROM old");
                  $select_all_data->execute();
                  while($data = $select_all_data->fetch()){
                    $count++;

              ?>
                <tr class="text-center font-weight-bold">
                    <td><?php echo $count?></td>
                    <td><?php echo $data['name']?></td>
                    <td><?php echo $data['title']?></td>
                    <td><?php echo $data['email']?></td>
                    <td><?php echo $data['phone']?></td>
                    <td><?php echo $data['status']?></td>

                    
                </tr>
               
                <?php
                } // End while old

                $select_all_data2 = $cont->prepare("SELECT * FROM new");
                $select_all_data2->execute();
                while($data2 = $select_all_data2->fetch()){
                  $count++;
                  ?>
                  <tr class="text-center font-weight-bold">
                    <td><?php echo $count?></td>
                    <td><?php echo $data2['name']?></td>
                    <td><?php echo $data2['title']?></td>
                    <td><?php echo $data2['email']?></td>
                    <td><?php echo $data2['phone']?></td>
                    <td>1</td>

                    
                   </tr>
                  <?php
                } // End While New
              }elseif($action == "done"){ // End if all
                $count = 0;
                $select_data = selectItems("*" , "old" , "status" , 1);
                while($data = $select_data->fetch()){
                  $count++;
                  ?>
                  <tr class="text-center font-weight-bold">
                    <td><?php echo $count?></td>
                    <td><?php echo $data['name']?></td>
                    <td><?php echo $data['title']?></td>
                    <td><?php echo $data['email']?></td>
                    <td><?php echo $data['phone']?></td>
                    <td>1</td>

                    
                   </tr>
                  <?php
                } // End While old

                $select_all_data2 = $cont->prepare("SELECT * FROM new");
                $select_all_data2->execute();
                while($data2 = $select_all_data2->fetch()){
                  $count++;
                  ?>
                  <tr class="text-center font-weight-bold">
                    <td><?php echo $count?></td>
                    <td><?php echo $data2['name']?></td>
                    <td><?php echo $data2['title']?></td>
                    <td><?php echo $data2['email']?></td>
                    <td><?php echo $data2['phone']?></td>
                    <td>1</td>

                    
                   </tr>
                  <?php
                } // End while new
              }elseif($action =="notdone"){ //End Action Done
                $count = 0 ;
                $select_data = selectItems("*" , "old" , "status" , 1);
                while($data = $select_data->fetch()){
                  $count++;
                  ?>
                  <tr class="text-center font-weight-bold">
                    <td><?php echo $count?></td>
                    <td><?php echo $data['name']?></td>
                    <td><?php echo $data['title']?></td>
                    <td><?php echo $data['email']?></td>
                    <td><?php echo $data['phone']?></td>
                    <td>0</td>

                    
                   </tr>
                   <?php

                } // End While Loop
              } // End Action Not Done
                ?>

            </tbody>
        </table>
    </div>



          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



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
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>


  <?php
  include 'include/footer.php';
  
?>
