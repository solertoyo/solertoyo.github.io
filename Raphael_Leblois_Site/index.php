<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Raphael Leblois - Centre de Biologie pour la Gestion des Populations, CBGP-INRA, Montpellier, France</title>
		<meta name="title" content="Raphael Leblois" />
		<meta name="description" content="Raphael Leblois - Centre de Biologie pour la Gestion des Populations, CBGP-INRA, Montpellier, France" />
		<link rel="image_src" href="images/screenshot.png" />
		<link type="image/x-icon" rel="icon" href="favicon.ico" />
		<link rel="stylesheet" type="text/css" href="css/raphaelleblois.css" />
		<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />

		<script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
		<script src="js/scroll.js" type="text/javascript"></script>

	    <script type="text/javascript">
	    $(function() {
	        $('#gallery a').lightBox();
	    });
	    </script>

	</head>
<body>

<div id="container">
	
	<div id="header_container">
		<div id="header"></div>
		<?php include 'header.php';?>
	  	<br class="clearfix" />
      	<br class="clearfix" />

      
 	<div id="menu">
			<?php include 'menu.php';?>
		</div>
	</div>

	<div id="content">
		
		<div id="research">
			<?php include 'research.php';?>
		</div>
        
        <br class="clearfix" />
        
        <div id="research">
			<?php include 'cv.php';?>
		</div>

		<br class="clearfix" />

		<div id="softwares">
			<?php include 'softwares.php';?>
		</div>

		<br class="clearfix" />

		<div id="teaching">
			<?php include 'teaching.php';?>
		</div>

		<br class="clearfix" />

		<div id="scientific">
			<?php include 'scientific.php';?>
		</div>

		<br class="clearfix" />

		<div id="academic">
			<?php include 'academic.php';?>
		</div>
        
        <br class="clearfix" />
        
        <div id="research">
			<?php include 'funding.php';?>
		</div>

	</div>

</div>

<div id="connectors">
	<img src="img/connectors.png">
</div>

<div id="footer">
	<?php include 'footer.php';?>
</div>

<div id="backtotop_footer">
		<div class="top_icon"><img src="img/top_icon.png"></div>
		<div class="top_text"><a href="#header" class="scroll">Go back to top</a></div>
</div>

<div id="copyright"><i>Raphael Leblois -   Reserved 2011-Today </i></div>

</body>