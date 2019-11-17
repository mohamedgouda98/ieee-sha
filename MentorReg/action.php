<?php
    include 'back/functions.php';
    include 'include/navbar.php';



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
          <div class="card" id="print_card" style="width: 18rem; margin: 50px auto;">
                    <div class="card-body text-center">
                      <h5 class="card-title"><?php echo $name?></h5>
                      <h6 class="card-subtitle mb-2 text-muted"><?php echo $title?></h6>
                      <p class="card-text"><?php echo $org?></p>
                    </div>
          </div>
          <div class="col-md-12 text-center my-4">
      
      <button class="btn btn-success" id="btnPrint"  onclick="window.print()">Print</button>
      </div>
          <?php
        }
      
      
      
      }
      




    include 'include/footer.php';
?>