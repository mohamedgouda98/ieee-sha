<html>
      <?php
        include 'include/navbar.php';
      ?>

        <!-- Start Form -->

        <div class="container">
            <div class="row">
                <div class="col-md-12 form">

                <form method="post" action="action.php" class="formTybe col-12 d-flex flex-column mb-3">
                <input type="text" name="firstName" placeholder="First Name" size="25" required>
                <input type="text" name="lastName" placeholder="last Name" required>
                <input type="text" name="title" placeholder="Title" required>
                <input type="text" name="org" placeholder="orgnazation" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="phone" placeholder="phone Number" required>
                <input type="submit" name="submit" value="Submit"  class="btn btn-primary submitBtn">
                </form>

                </div>  
            </div>
        </div>

        <!-- End Form -->

        <?php
            include 'include/footer.php';
        ?>