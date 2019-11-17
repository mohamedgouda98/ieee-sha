<?php
include 'include/navbar.php';
include 'back/functions.php';
?>


   <style>
   form input{
      margin-top:10px;
      border-radius:5px;
      border: 1px solid #333;
      padding:5px 10px;
   }

   </style>


    
<div class="container">

  <div class="col-md-12">

    <form method="post" action="action.php" class="formTybe col-12 d-flex flex-column mb-3">
      <input type="text" name="firstName" placeholder="First Name" size="25" required>
      <input type="text" name="lastName" placeholder="Last Name" required>
      <input type="text" name="title" placeholder="Title" required>
      <input type="text" name="org" placeholder="Organization" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="phone" placeholder="Phone Number" required>
      <input type="submit" name="submit" value="Chick-In"  class="btn btn-primary w-25 submitBtn">
    </form>
    
  </div>

    

   
<br>




<?php

if(isset($_POST['submit'])){
  
  $name  = $_POST['firstName'] . " " . $_POST['lastName'];
  $title = $_POST['title'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  
  $data_arr = array("name" ,"title" , "email" , "phone");
  $data_values_arr= array($name , $title , $email , $phone);

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

?>

</div>



<?php
  include 'include/footer.php';
?>


