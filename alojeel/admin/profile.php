<?php
session_start();
include '../back/dbcont.php';
ob_start();
if(isset($_SESSION['name'])){

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ajendy  - Edit Profile</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Edit Profile</h1>
                  </div>
                  <form class="user" method="POST" action="">
                    <?php
                    
                    $select_user_data = $cont->prepare("SELECT * FROM users");
                    $select_user_data->execute();
                    while($row_user = $select_user_data->fetch()){
                      ?>

                    <div class="form-group">
                      <input type="text" name="name" value="<?php echo $row_user['name'] ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Name...">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" value="<?php echo $row_user['email'] ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="old_pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                      <input type="password" name="new_pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="New Password">
                    </div>                    
                    <div class="form-group">
                      <input type="password" name="re_new_pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Repeat Password">
                    </div>

                    <div class="form-group">
                      <input type="submit" name="submit" value="تحديث" class="btn btn-primary btn-user btn-block">
                    </div>
                     
                     <?php
                    }
                    
                    ?>
                  
                  </form>

                  <?php
                  
                  if(isset($_POST['submit'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $old_pass = $_POST['old_pass'];
                    $new_pass = $_POST['new_pass'];
                    $re_new_pass = $_POST['re_new_pass'];
                    $password;
                    if(!empty($new_pass) && !empty($re_new_pass)){
                      $password=$old_pass;
                    }

                    $select_old_pass = $cont->prepare("SELECT password FROM users");
                    $select_old_pass->execute();
                    while($row = $select_old_pass->fetch()){
                      if($row['password'] == $old_pass){
                        if($new_pass == $re_new_pass){
                          $password = $new_pass;

                          $update_user = $cont->prepare("UPDATE users SET name=? , email=? , password=?");
                          if($update_user->execute(array($name , $email , $password))){
                            ?>
                                <script type="text/javascript">
                                  window.location="index.php"; 
                                </script>
                            <?php
                          }else{
                            ?>
                            <div class="alert alert-danger" role="alert">
                               بيانات خاطئة
                            </div>
                        <?php
                          }


                        }
                      }else{
                        ?>
                        <div class="alert alert-danger" role="alert">
                         ادخل الرقم السري الحالي
                        </div>
                        <?php
                      }
                    }


                  }

                  
                  ?>
                </div>
              </div>
            </div>
          </div>
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
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php
}else{
  ?>
 <script type="text/javascript">
      window.location="login.php"; 
    </script>
  <?php
}
?>