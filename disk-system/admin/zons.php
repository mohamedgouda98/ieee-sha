<?php
    session_start();
    if(isset($_SESSION['email'])){
        include '../include/navbar.php';
        include '../back/dbcont.php';
        include 'navadmin.php';
        
    $action = isset($_GET['action']) ? $_GET['action']:'tr';


    if(isset($_POST['submit'])){
        $question_id = $_POST['question'];
        $id_zone = $_POST['id'];

        $update_question_zone = $cont->prepare("UPDATE questions set zon=? WHERE id=?");
        $update_question_zone->execute(array($id_zone , $question_id));
    }




// <!-- Start Zons -->



    if($action == 'tr'){

        ?>
  <div class="form">
        <div class="container">
            <div class="row">
                 <div class="col-md-12 inputs">
                  <form action="" method="post">
                  <h5>أدخل التعليمات</h5>
                    <textarea name="giude" rows="5" cols="70"> <?php
                        $select_guide = $cont->prepare("SELECT body FROM guide");
                        $select_guide->execute();
                        $body = $select_guide->fetchColumn();
                        echo $body;

                    ?></textarea><br>
                    <input type="submit" name="submitguide" value="submit">
                  </form>
                  <?php
                  if(isset($_POST['submitguide'])){
                    $giude = $_POST['giude'];
                    $update_guide = $cont->prepare("UPDATE guide SET body=?");
                    if($update_guide->execute(array($giude))){
                        header("Location:zons.php");
                    }
                  }
                  ?>
                     
    
    
                 </div>
            </div>
        </div>
    </div>
        <?php

    $select_zons = $cont->prepare("SELECT * FROM zons");
    $select_zons->execute();
    while($row = $select_zons->fetch()){
        ?>
        <div class="form">
        <div class="container">
            <div class="row">
                 <div class="col-md-12 inputs">
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                        <h3><?php echo $row['name'] ?> </h3>
                        <a href="zons.php?action=edit&id=<?php echo $row['id']?>">edit Zone Name</a><br>
                        <a href="zons.php?action=data&id=<?php echo $row['id']?>">edit Zone Data</a><br>
                        <a href="zons.php?action=book&id=<?php echo $row['id']?>">edit Book Link</a><br>

                        <i class="fas fa-question"></i>
                        <textarea name="question" placeholder="Add Question" required></textarea><br>
                         <!-- <input type="number" name="question" placeholder="Add Question" require><br> -->
                         <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                         <input type="submit" name="submit" value="Add"> 
                         <br><br>

                         <table style="width:100%">

                         <?php
                       $select_question = $cont->prepare("SELECT id , question , zon FROM questions WHERE zon=?");
                       $select_question->execute(array($row['id']));
                       $counter = 0;
                       while($row2 = $select_question->fetch()){
                           $counter++;
                           ?>
                            <tr>
                                <td><?php echo $row2['id']?></td>
                                 <td><?php echo $row2['question'] ?></td>
                                 <td><a href="zons.php?action=update&id=<?php echo $row2['id']; ?>">Delete</a></td>

                            </tr>
                           
                           <?php
                       }
                       ?>
                        </table>
                        <br>
                       <h4> Total Qutions : <?php echo $counter ?> </h4>
                    </form>
    
                     
    
    
                 </div>
            </div>
        </div>
    </div>

    <?php

    }


?>






<!-- End Zons -->




<?php
    }elseif($action == 'update'){
        $id = $_GET['id'];
        $update = $cont->prepare("UPDATE questions SET zon=? WHERE id=?");
        $update->execute(array('0',$id));
        header('Location:zons.php');

    }elseif($action == 'edit'){

        $id = $_GET['id'];
        if(isset($_POST['submitedit'])){
            $new_name = $_POST['newdata'];
            $update_zon = $cont->prepare("UPDATE zons SET name=? WHERE id=?");
            $update_zon->execute(array($new_name , $id));

            ?>
                <script type="text/javascript">
                window.location="zons.php"; 
                </script>
         <?php

        }
        ?>

    <div class="edit">
        <div class="container">
            <div class="row">
                <div class="col-md-12 data">
                    <h3>Edit Zon</h3>
                    <form method="post" action="" >
                        <?php
                        $select_zon_data = $cont->prepare("SELECT name FROM zons WHere id=?");
                        $select_zon_data->execute(array($id));
                        $zon_data = $select_zon_data->fetchColumn();
                        
                        ?>
                        <input type="text" name="newdata" value="<?php echo $zon_data?>" required><br>
                        <input type="submit" name="submitedit" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

        <?php
    }elseif($action == 'data'){

        $id = $_GET['id'];
        if(isset($_POST['submitedit'])){
            $new_name = $_POST['newdata'];
            $update_zon = $cont->prepare("UPDATE zons SET data=? WHERE id=?");
            $update_zon->execute(array($new_name , $id));

            ?>
                <script type="text/javascript">
                window.location="zons.php"; 
                </script>
         <?php

        }
        ?>

    <div class="edit">
        <div class="container">
            <div class="row">
                <div class="col-md-12 data">
                    <h3>Edit Zon</h3>
                    <form method="post" action="" >
                        <?php
                        $select_zon_data = $cont->prepare("SELECT data FROM zons WHere id=? LIMIT 1");
                        $select_zon_data->execute(array($id));
                        while($zon_data = $select_zon_data->fetch()){
                            ?>

                        <input type="text" name="newdata" value="<?php echo $zon_data['data']?>" required><br>
                           
                            <?php
                        }
                        
                        ?>
                        <input type="submit" name="submitedit" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

        <?php
    }elseif($action == 'book'){

        $id = $_GET['id'];
        if(isset($_POST['submitbook'])){
            $book_link = $_POST['book_link'];
            $update_zon = $cont->prepare("UPDATE zons SET book_link=? WHERE id=?");
            $update_zon->execute(array($book_link , $id));

            ?>
                <script type="text/javascript">
                window.location="zons.php"; 
                </script>
         <?php

        }
        ?>
    <div class="edit">
        <div class="container">
            <div class="row">
                <div class="col-md-12 data">
                    <h3>Edit Zon</h3>
                    <form method="post" action="" >
                        <?php
                        $select_zon_data = $cont->prepare("SELECT data , book_link FROM zons WHere id=? LIMIT 1");
                        $select_zon_data->execute(array($id));
                        while($zon_data = $select_zon_data->fetch()){
                            ?>

                        <input type="text" name="book_link" value="<?php echo $zon_data['book_link']?>" required><br>
                           
                            <?php
                        }
                        
                        ?>
                        <input type="submit" name="submitbook" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
        <?php

    }





    include '../include/fotter.php';

}else{
   ?>
        <script type="text/javascript">
        window.location="login.php"; 
        </script>
   <?php
}
?>