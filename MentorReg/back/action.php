<?php
    include 'functions.php';
?>

 <!-- Start Header -->

 <div class="header">  
        <div class="row">
            <div class="col-md-4 logo">
                <img src="../images/logo1.png">
            </div>

            <div class="col-md-4">
                name
            </div>

            <div class="col-md-4 logo">
                logo2
            </div>
        </div>
    </div>

        <!-- End Header -->


        <?php



    if(isset($_POST['submit'])){
  
        $name  = $_POST['firstName'] . " " . $_POST['lastName'];
        $title = $_POST['title'];
        $org   = $_POST['org'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        $data_arr = array("name" ,"title" , "email" , "phone" , "org");
        $data_values_arr= array($name , $title , $email , $phone , $org);
      
        $insert = Isertdata($data_arr , "new" , $data_values_arr);
        if($insert == 1){
          ?>
          <div class="card" id="print_card" style="width: 18rem; margin: 5px auto;">
                    <div class="card-body text-center">
                      <h5 class="card-title">test</h5>
                      <h6 class="card-subtitle mb-2 text-muted">test</h6>
                      <p class="card-text">test</p>
                    </div>
          </div>
          <div class="col-md-12 text-center my-4">
      
      <button class="btn btn-success" id="btnPrint"  onclick="btnFunction()">Print</button>
      </div>
          <div class="alert alert-success" role="alert">
            Added successfuly <a href="checkin.php" class="btn btn-success"> retrun Search Page</a>
          </div>
          <?php
        }
      
      
      
      }
      




    include '../include/footer.php';
?>