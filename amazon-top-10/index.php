<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>

    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 50px;
        }

        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php

include("classes/simple_html_dom.php");

?>

<?php

function get_random_keyword() {
    $f_contents = file("keywords.txt"); 
    return $f_contents[rand(0, count($f_contents) - 1)];	
}

function getHtml($page) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $page);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	curl_setopt($ch, CURLOPT_ACCEPT_ENCODING, "gzip");
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
	$html = curl_exec($ch);	
    if (curl_errno($ch)) { 
	   echo 'Curl error: ' . curl_error($ch); 
	}			
	curl_close($ch);		
	return $html;
}

?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="starter-template">
            <h1>Amazon Top 10</h1>

            <p class="lead">Top 10 <span class="text-success"><b><?= get_random_keyword(); ?></b></span> Results</p>
			
			<?php
				 
			  $html = file_get_html("https://www.amazon.co.uk/s?k=" . str_replace(get_random_keyword(), " ", "+")); 
			  echo "<hr />";
			 
			?>
			
			<div class="panel panel-primary">
				<div class="panel-heading">TOP 10 PRODUCTS</div>
				<div class="panel-body">
					<table class="table table-striped table-condensed table-hover table-responsive">
						<thead>
							<tr>
								<th>RANK</th>
								<th>IMAGE</th>
								<th>PRODUCT NAME</th>
								<th>SCORE</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
						
						    <?php $counter = 1; ?>
 							<?php foreach ($html->find('a[class="a-link-normal"]') as $element) { ?>
								
								<?php

								$amazon_rnk = $counter++;
								$amazon_img = $element->src;
								$amazon_url = "https://www.amazon.co.uk" . $element->href;
								$amazon_pnm = "???";
								
								?>
								
 								<tr>
								    <td><?= $amazon_rnk; ?></td>
									<td><img src="<?php echo $amazon_img; ?>"></td>
								    <td><a href="<?= $amazon_url; ?>">PRODUCT NAME</a></td>
									<td><img src="images/img-button.png"></td>
								</tr> 
								
							<?php } ?>
							
						</tbody>
					</table>
				</div>
				<div class="panel-footer text-center">...</div>
			</div>			
			
			
            <!--<p><a href="http://getbootstrap.com/getting-started/">http://getbootstrap.com/getting-started/</a></p>-->
			
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>