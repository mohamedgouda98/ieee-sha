<?php
    
    session_start();
    if(isset($_SESSION['email'])){
        include '../include/navbar.php';
        include 'navadmin.php';
    
?>

<!-- Start Logo -->

<div class="img">
    <div class="row">
        <div class="col-md-12 logo">
            <img src="../img/logo.jpg" class="card-img-top" alt="...">
       </div>
    </div>
</div>

<!-- End Logo -->


<!-- Start Header -->

<div class="header">
    <div class="row">
        <div class="col-md-4 item">
            <a href="add.php"><img src="../img/plus.png" class="card-img-top" alt="..."></a>
            <h3>Add</h3>
        </div>
        <div class="col-md-4 item item2">
        <a href="res.php"><img src="../img/contract.png" class="card-img-top" alt="..."></a>
            <h3>Res</h3>
        </div>
        <div class="col-md-4 item item3">
        <a href="zons.php"><img src="../img/menu.png" class="card-img-top" alt="..."></a>
            <h3>Zons</h3>
        </div>
    </div>
</div>


<!-- End Header -->





<?php
    include '../include/fotter.php';
    }else{
        ?>
        <script type="text/javascript">
        window.location="login.php"; 
        </script>

        
        <?php
    }
?>