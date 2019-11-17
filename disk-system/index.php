<?php
session_start();

$action = isset($_POST['action']) ? $_POST['action']:'all';
include 'include/navbar.php';
include 'back/dbcont.php';

// if($action == "all"){

    


    // Back End >>>

        
        $counter_q = 0; 

    if(isset($_POST['submit'])){
  //  $zon= 'zon' ;
    $zone1 = 0;
    $zone2 = 0;
    $zone3 = 0;
    $zone4 = 0 ;

    // Start Zons Calck >>>>

    $select_zons = $cont->prepare("SELECT id FROM zons");
    $select_zons->execute();
    while($row_zon = $select_zons->fetch()){

        $select_qutions_zon = $cont->prepare("SELECT id From questions WHERE zon=?");
        $select_qutions_zon->execute(array($row_zon['id']));
        while($row_question = $select_qutions_zon->fetch()){

            $answer = $_POST['q'.$row_question['id']];
            if($row_zon['id'] == 1){
                $zone1 += $answer;
               
            }elseif($row_zon['id'] == 2){
                $zone2 += $answer;
                
            }elseif($row_zon['id'] == 3){
                $zone3 += $answer;
                
            }elseif($row_zon['id'] == 4){
                $zone4 += $answer;
                
            }
        

        }
    }




if($zone1 >= $zone2 && $zone1 >= $zone3 && $zone1 >= $zone4){
    $user_zon = $zone1;
    $zon_id = 1;
}elseif($zone2 >= $zone1 && $zone2 >= $zone3 && $zone2 >= $zone4){
    $user_zon = $zone2;
    $zon_id = 2;
}elseif($zone3 >= $zone1 && $zone3 >= $zone2 && $zone3 >= $zone4){
    $user_zon = $zone3;
    $zon_id = 3;
}elseif($zone4 >= $zone1 && $zone4 >= $zone2 && $zone4 >= $zone3){
    $user_zon = $zone4;
    $zon_id = 4;
}




    $_SESSION['zon_deg'] = $user_zon;
    $_SESSION['zon_id'] = $zon_id;


    // $non = 0;

    // $insert_user = $cont->prepare("INSERT INTO users(username , email , phone , zone1 , zone2 , zone3 , zone4 , zoneid) VALUES(?,?,?,?,?,?,?,?)");
    // if($insert_user->execute(array($non , $non , $non , $zone1 , $zone2 , $zone3 , $zone4 , $zon_id))){
    //     $select_user_id = $cont->prepare("SELECT MAX(id) FROM users");
    //     $select_user_id->execute();
    //     $user_id = $select_user_id->fetchColumn();
    //     $_SESSION['user_id'] = $user_id;

    ?>
        <!-- <script type="text/javascript"> -->
         <!-- window.location="res.php";  -->
        <!-- </script> -->
    <?php

    // }else{
    //     echo 'NOOOOOOOOOOO';
    // }
    

    
    }






?>


<!-- start Header -->

<?php
if($action == "all"){

    //Select Guide ...

    $select_guide = $cont->prepare("SELECT body FROM guide");
    $select_guide->execute();
    $body_guide = $select_guide->fetchColumn();
    echo '<br><h6 class="guide">' . nl2br($body_guide) . '<h6>'; 

$select_questions = $cont->prepare("SELECT id , question FROM questions ");
$select_questions->execute();
?>
<form class="form-test" method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
<?php

while($row = $select_questions->fetch()){
    $counter_q++;
    ?>

    <div class="quesions">
        <div class="container">
            <div class="row">
                <div class="col-md-12 data">
                  
                        <h4><?php echo $row['question'] . ' - ' . $counter_q ?></h4>
                        <input type="radio" name="<?php echo 'q'.$row['id']?>" value="1" required>1
                        <input type="radio" name="<?php echo 'q'.$row['id']?>" value="2" required>2
                        <input type="radio" name="<?php echo 'q'.$row['id']?>" value="3" required>3
                        <input type="radio" name="<?php echo 'q'.$row['id']?>" value="4" required>4
                        <input type="radio" name="<?php echo 'q'.$row['id']?>" value="5" required>5
                   
                </div>
            </div>
        </div>

   </div>

    <?php
}



?>
<div class="container">
    <div class="row">
    <input type="hidden" name="action" value="reg">
<input type="submit" name="submit" value="submit" class="btn btn-success">
</div>
</div>
</form>


<!-- End Header -->






<?php
 }elseif($action == "reg"){

?>


<!-- Start Login -->


<div class="form">
    <div class="container">
        <div class="row">
             <div class="col-md-12 inputs">
                <form method="post" action="res.php">
                <h6 style="color:#f00">Rigister To show Your Results</h6>
                    <h3>Disc Test</h3>
                    <i class="fas fa-user"></i>
                     <input type="text" name="name" placeholder="User Name" required><br>
                     <i class="fas fa-envelope"></i>
                     <input type="email" name="email" placeholder="E-mail" required><br>
                     <i class="fas fa-phone"></i>
                     <input type="number" name="phone" placeholder="Phone Number" required><br>
                     <input type="submit" name="login" value="Goo!">     
                </form>
             </div>
        </div>
    </div>
</div>



<?php

    $_SESSION['zone1'] = $zone1;
    $_SESSION['zone2'] = $zone2;
    $_SESSION['zone3'] = $zone3;
    $_SESSION['zone4'] = $zone4;






}
    include 'include/fotter.php';
?>