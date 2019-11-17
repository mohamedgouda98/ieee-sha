<?php
  

    session_start();
    if(isset($_SESSION['email'])){

        include '../include/navbar.php';
        include '../back/dbcont.php';
        include 'navadmin.php';
        
    $action = isset($_GET['action']) ? $_GET['action']:'tr';



    if(isset($_POST['submit'])){
        $question = $_POST['question'];
        $select_count = $cont->prepare("SELECT COUNT(id) FROM questions WHERE question=?");
        $select_count->execute(array($question));
        $select_count_all = $select_count->fetchColumn();

        if($select_count_all == 0){
            $insert = $cont->prepare("INSERT INTO questions(question,zon) VALUES(?,?)");
            $insert->execute(array($question,0));
        }
       
    }


    if($action == 'tr'){
?>


<!-- Start Add -->
<div class="form">
    <div class="container">
        <div class="row">
             <div class="col-md-12 inputs">
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                    <h3>Questions</h3>
                    <i class="fas fa-question"></i>
                    <textarea name="question" placeholder="Add Question" required></textarea><br>
                     <!-- <input type="text" name="question" placeholder="Add Question" require><br> -->
                     <input type="submit" name="submit" value="Add"> 
                     <br><br>
                     <?php
                    
                   if(isset($select_count_all) && $select_count_all == 0){
                        ?>
                        <div class="alert alert-success" role="alert">
                           Done :)
                        </div>
                        <?php
                    }elseif(isset($select_count_all) && $select_count_all != 0){
                        ?>
                        <div class="alert alert-danger" role="alert">
                        this question is exist :(
                        </div>
                        <?php
                    }
                    
                    
                    ?>    
                </form>

                   


             </div>
        </div>
    </div>
</div>

<!-- End Add -->


<!-- Start Show -->

<div class="show">
    <div class="container">
    <div class="row">
            <div class="col-md-12 table">   
                <table style="width:100%">
                   <?php
                   
                   $select_qutions = $cont->prepare("SELECT * FROM questions");
                   $select_qutions->execute();
                   while($row = $select_qutions->fetch()){
                       ?>
                        <tr>
                            <td> <?php echo $row['id']?> </td>
                            <td><?php echo $row['question'] ?></td>
                            <td><a href="add.php?action=delete&id=<?php echo $row['id'] ?>">Delete</a></td>
                            <td><a href="add.php?action=edit&id=<?php echo $row['id'] ?>">Edit</a></td>
                         </tr>
                       <?php
                   }
                   
                   ?>
                   
                </table>
            </div>
        </div>
    </div>
</div>







<?php

                }elseif($action == 'delete'){
                    $id = $_GET['id'];
                    $delete = $cont->prepare("DELETE FROM questions WHERE id=?");
                    $delete->execute(array($id));
                    ?>
                            <script type="text/javascript">
                            window.location="add.php"; 
                            </script>
                        <?php

                }elseif($action = 'edit'){

                    $id = $_GET['id'];
                    if(isset($_POST['submitedit'])){               
                        $data = $_POST['newadit'];
                        $delete = $cont->prepare("UPDATE questions SET question=? WHERE id=?");
                        $delete->execute(array($data , $id));
                        ?>
                            <script type="text/javascript">
                            window.location="add.php"; 
                            </script>
                        <?php
                    }
                    ?>

                <div class="edit">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 data">
                                <h3>Edit question</h3>
                                <form method="post" action="">
                                    <?php
                                    $select_q_data = $cont->prepare("SELECT question FROM questions WHERE id=? LIMIT 1");
                                    $select_q_data->execute(array($id));
                                    $data = $select_q_data->fetchColumn();

                                    ?>
                                    <input type="text" name="newadit" value="<?php echo $data ?>" required><br>
                                    <input type="submit" name="submitedit" value="submit">
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