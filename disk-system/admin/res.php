
<?php
session_start();

if(isset($_SESSION['email'])){
    include '../include/navbar.php';
    include '../back/dbcont.php';
    include 'navadmin.php';



?>


<div class="res">
    <div class="container">
        <div class="row">
            <div class="col-md-12 data">






<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>zone Name</th>
            <?php
            $select_zonos_name = $cont->prepare("SELECT name FROM zons");
            $select_zonos_name->execute();
            while($row_zon = $select_zonos_name->fetch()){
            ?>
            <th><?php echo $row_zon['name'] ?></th>

            <?php
            }
            ?>
            </tr>
        </thead>
<?php
                $select_users_res = $cont->prepare("SELECT * FROM users");
                $select_users_res->execute();
                while($row = $select_users_res->fetch()){
            ?>
            <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['phone']?></td>
            <td>
            <?php
                $select_zon_name = $cont->prepare("SELECT name FROM zons WHERE id=? LIMIT 1");
                $select_zon_name->execute(array($row['zoneid']));
                while($row_name_zon = $select_zon_name->fetch()){
                    
                 echo $row_name_zon['name'];
                    
                }
            ?>
            </td>
            <td><?php echo $row['zone1']?></td>
            <td><?php echo $row['zone2']?></td>
            <td><?php echo $row['zone3']?></td>
            <td><?php echo $row['zone4']?></td>
                        
            </tr>

            <?php
                }
            ?>
        <tbody>
            
            
        </tbody>
      </table>


</div>
</div>
</div>
</div>



<?php


    include '../include/fotter.php';
    ?>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();

    $('#example').tableExport();
});
</script>

    <?php
}else{
    ?>
     <script type="text/javascript">
        window.location="login.php"; 
        </script>
    <?php
}
?>