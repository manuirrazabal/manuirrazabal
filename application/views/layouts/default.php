<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Language" content="EN">	
	
	<meta name="revisit-after" content="7 days">
	<meta name="robots" content="all">
	<meta http-equiv="expires" content="0">
	<meta name="distribution" content="Global">
	<meta name="copyright" content="manuirrazabal.com">
	<meta name="expires" content="never">
	<meta name="author" content="manuirrazabal.com">
	<meta name="doc-type" content="web page">
	<meta name="keywords" content="PHP Solutions, PHP Softwares, Backend Programming, Php Programming, PHP Freelance,PHP Freelance Vancouver, Low Cost PHP Sotwares, Softwares PHP de bajo costo, Softwares Solutions, Soluciones Informaticas"> <!-- -->

	<link rel="shortcut icon" href="<?php echo base_url().'public/';?>images/favicon.png" type="image/png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

	<!-- 
	<script src="public/js/bootstrap.carousel.js"></script>-->
	<script src="<?php echo base_url();?>public/js/document_ready.js"></script> 


	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/style_webpage.css">

	<script>
		$(document).ready(function(){
		  // Add smooth scrolling to all links in navbar + footer link
		  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
		    // Make sure this.hash has a value before overriding default behavior
		    if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		      // Using jQuery's animate() method to add smooth page scroll
		      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 900, function(){
		   
		        // Add hash (#) to URL when done scrolling (default click behavior)
		        window.location.hash = hash;
		      });
		    } // End if
		  });
		  
		  $(window).scroll(function() {
		    $(".slideanim").each(function(){
		      var pos = $(this).offset().top;

		      var winTop = $(window).scrollTop();
		        if (pos < winTop + 600) {
		          $(this).addClass("slide");
		        }
		    });
		  });
		})
		</script>

	<title><?php echo $this->layout->getTitle(); ?></title>
	<meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>">


	<?php echo $this->layout->css; ?> 
	<?php echo $this->layout->js; ?> 
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">
	<?php echo $content_for_layout; ?>
</body>
</html>

