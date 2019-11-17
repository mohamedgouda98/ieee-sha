<?php
  include 'include/navbar.php';
  include 'back/functions.php';

?>
<style>
form{
  text-align: center;
  padding:0 30px;
}
</style>


<div class="container-fluid">
<br>
  <form method="post" action="">
    <input name="data" type="text" class="form-control" placeholder="Enter Phone Number Or Email"><br>
    <input type="submit" name="submit" class="btn btn-primary" value="Submit"><br>
  </form>

<br><br>

<?php
  if(isset($_POST['submit'])){
    
    $data = $_POST['data'];

    $count_visitor_phone = selectCountID("old" , "phone" , $data);

    if($count_visitor_phone == 0){
      
      $count_visitor_email = selectCountID("old" , "email" , $data);

      if($count_visitor_email == 0){
        ?>

          <div class="alert alert-danger col-md-12 text-center" role="alert">
          <p>  This Visitor Not found , Going to submit </p>
            <a href="go.php" class="btn btn-success">going</a>
          </div>

        <?php
      }else{ //End if mail

        $select_visitor_data = selectItems("*" , "old" , "email" , $data);
        while($visitor_data = $select_visitor_data->fetch()){
          ?>
          <div class="card col-md-12" style="width: 18rem;">
            <div class="card-body ">
              <h5 class="card-title"><?php echo $visitor_data['name']?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?php echo $visitor_data['email']?></h6>
              <p class="card-text"><?php echo $visitor_data['title']?></p>
            </div>
          </div>

          <?php
          updateOne("old" , "status" , 1 , "id" , $visitor_data['id']);
        } // End While Loop Mail

      } // End Else mail

    }else{ // End if phone 

      $select_visitor_data = selectItems("*" , "old" , "phone" , $data);
      while($visitor_data = $select_visitor_data->fetch()){
        ?>
        <div class="card" style="width: 18rem; margin: 5px auto;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $visitor_data['name']?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $visitor_data['email']?></h6>
            <p class="card-text"><?php echo $visitor_data['title']?></p>
          </div>
        </div>
        <?php
        updateOne("old" , "status" , 1 , "id" , $visitor_data['id']);

      } // End While Loop phone

    } // End Else Phone

  } // End If isset
?>

</div>
<?php
  include 'include/footer.php';
?>
