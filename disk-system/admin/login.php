<?php
    include '../include/navbar.php';
    include '../back/dbcont.php';

if(isset($_POST['submit'])){
    $email    = $_POST['email'];
    $pass     = $_POST['pass'];

    $select_admin = $cont->prepare("SELECT COUNT(id) FROM admins WHERE email=? AND pass=? LIMIT 1");
    $select_admin->execute(array($email , $pass));
    $admin = $select_admin->fetchColumn();

    if($admin > 0){
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;
       ?>
        <script type="text/javascript">
        window.location="index.php"; 
        </script>
       <?php
    }else{
        ?>

        <div class="alert alert-danger" role="alert">
        Email Or Password Not Exist
        </div>

        <?php
    }

   
}


?>

<!-- start login -->

<div class="img">
    <div class="row">
        <div class="col-md-12 logo">
            <img src="../img/logo.jpg" class="card-img-top" alt="...">
       </div>
    </div>
</div>

<div class="form">
    <div class="container">
        <div class="row">
             <div class="col-md-12 inputs">
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                    <h3>Disc Test</h3>
                     <i class="fas fa-envelope"></i>
                     <input type="email" name="email" placeholder="E-mail" require><br>
                     <i class="fas fa-lock"></i>
                     <input type="password" name="pass" placeholder="Password" require><br>
                     <input type="submit" name="submit" value="Goo!">     
                </form>
             </div>
        </div>
    </div>
</div>







<!-- End login -->






<?php
    include '../include/fotter.php';
?>