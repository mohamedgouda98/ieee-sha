<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Factory</title>
    <link href="https://fonts.googleapis.com/css?family=Tajawal:400,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- start -->
    <main>
        <section class="gradientSection d-flex justify-content-center align-items-center flex-column">
            <div class="overLayer d-flex justify-content-center align-items-center text-center flex-column">
                    <div class="DummyDIV">

                        </div>
                <div>
                    <h2>WE'RE REFRESHING OUR WEBSITE!</h2>
                    <h4>meanwhile, you can check our protfolio here</h4>
                    <a href="index.php?file=protfolio">
                        <!-- <a href="#"> -->
                        OUR PORTFOLIO
                    </a>
                </div>
                
                <?php
                
                if(!empty($_GET['file'])){
                    
                    $file_name = $_GET['file'] . '.pdf';
                    $file_path = 'upload/' . $file_name;
                if(!empty($file_name) && file_exists($file_path)){
                    
                    header("Cache-Control: public");
                    header('Content-Type: application/pdf');
                    header("Content-Description: FIle Transfer");
                    header("Content-Disposition: attachment; filename=$file_name");
                    header("Content-Transfer-Emcoding: binary");
            
                    readfile($file_path);
                    exit;
                }else{
                    echo "Not Yet";
                }
                }
                
                ?>

                <div class="text-center logoImg">
                        <img src="Images/TFA_Landing Page-04.png" class="img-fluid">
                </div>
            </div>
            <div class="text-center pt-3">
                <p style="color :#fff;">Copyright©2019.The Factory Advertising Agency</p>
            </div>
        </section>

    </main>
    <!-- end -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>