<?php
include 'include/navbar.php';
include 'back/dbcont.php';
session_start();
if(isset($_POST['login'])){
    $username = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    // $zone1    = $_SESSION['zone1'];
    // $zone2    = $_SESSION['zone2'];
    // $zone3    = $_SESSION['zone3'];
    // $zone4    = $_SESSION['zone4'];

    $zone1    = 20;
    $zone2    = 50;
    $zone3    = 10;
    $zone4    = 40;

    $insert_user = $cont->prepare("INSERT INTO users(username , email , phone , zone1 , zone2 , zone3 , zone4 , zoneid) VALUES(?,?,?,?,?,?,?,?)");
    if($insert_user->execute(array($username , $email , $phone , $zone1 , $zone2 , $zone3 , $zone4 , $_SESSION['zon_id']))){

        ?>



<div class="img">
    <div class="row">
        <div class="col-md-12 logo">
            <img src="img/logo.jpg" class="card-img-top" alt="...">
       </div>
    </div>
</div>


<div class="res">
    <div class="container">
        <div class="row">
            <div class="col-md-12 data">
            <?php
            $select_data_zon = $cont->prepare("SELECT data , book_link FROM zons WHERE id=? LIMIT 1");
            $select_data_zon->execute(array($_SESSION['zon_id']));
            while($data = $select_data_zon->fetch()){
                ?>
                    <h5><?php echo $data['data'] ?></h5>
                    <a href="<?php echo $data['book_link'] ?>" target="_blank"> Book Link : <?php echo $data['book_link']?> </a>
                    <br><br>
                <?php                
            }
            ?>
                
            <?php
            
            $select_zon_info = $cont->prepare("SELECT * FROM zons");
            $select_zon_info->execute();
            $arr = array();
            while($zon = $select_zon_info->fetch()){

                $zone_val = 'zone'.$zon['id'];

                $arr[] =array($zon['name'] , ${$zone_val});

               
            } 


            // Sort Arry
            $swap = 0;
            $swap_index;
            
            for($i=0 ; $i < 4 ; $i++){
            
                    $max = $arr[$i][1];
                    $index = $arr[$i][0];
            
                    for ($j=$i+1; $j <4 ; $j++) { 
                        if($max < $arr[$j][1]){
                            $swap = $arr[$j][1] ; 
                            $arr[$j][1] = $max;
                            $max = $swap;

                            $swap_index = $arr[$j][0];
                            $arr[$j][0] = $index;
                            $index = $swap_index;
                        }
                    }
                    $arr_sort[] =array($index , $max );
            
            } // end For Loop >>>>
            
            echo '<h5>Your Results</h5>';
            for ($i=0; $i <4 ; $i++) { 
                echo '<h3>' . $arr_sort[$i][0] . ' : ' . $arr_sort[$i][1] . '</h3>';

            }


            ?>

            

            
            <br>
             
        
        
            <a href="back/logout.php" class="btn btn-danger"> LogOut</a>

            

            </div>
        </div>
    </div>
</div>



        <?php
    } //End Login
    else{
        
    }

       

} // End isset SESSTION function

include 'include/fotter.php';
