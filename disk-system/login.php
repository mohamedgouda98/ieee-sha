<?php
    include 'include/navbar.php';
    include 'back/dbcont.php';

if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];

       

} // End isset function


?>

<!-- start login -->

<div class="img">
    <div class="row">
        <div class="col-md-12 logo">
            <img src="img/logo.jpg" class="card-img-top" alt="...">
       </div>
    </div>
</div>

<div class="form">
    <div class="container">
        <div class="row">
             <div class="col-md-12 inputs">
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                    <h3>Disc Test</h3>
                    <i class="fas fa-user"></i>
                     <input type="text" name="name" placeholder="User Name" required><br>
                     <i class="fas fa-envelope"></i>
                     <input type="email" name="email" placeholder="E-mail" required><br>
                     <i class="fas fa-phone"></i>
                     <input type="number" name="phone" placeholder="Phone Number" required><br>
                     <input type="submit" name="submit" value="Goo!">     
                </form>
             </div>
        </div>
    </div>
</div>







<!-- End login -->






<?php
    include 'include/fotter.php';
?>