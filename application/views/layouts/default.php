<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<!-- MODIFY LATER. 
	<meta http-equiv="Content-Language" content="EN">
	<meta name="submission" content="http://www..cl/">
	<meta name="revisit-after" content="7 days">
	<meta name="robots" content="all">
	<meta http-equiv="expires" content="0">
	<meta name="distribution" content="Global">
	<meta name="copyright" content="Monumento.cl">
	<meta name="expires" content="never">
	<meta name="author" content="Xside.cl">
	<meta name="doc-type" content="web page">-->
	<link rel="shortcut icon" href="<?php echo base_url().'public/';?>images/favicon.png" type="image/png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

	<!-- 
	<script src="public/js/bootstrap.carousel.js"></script>-->
	<script src="<?php echo base_url();?>public/js/document_ready.js"></script> 


	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<style type="text/css">
		body{
			font-family: 'Ubuntu', sans-serif;
		}

		h1{
			color: #f4511e !important;
		}
		.navbar, .back_vancouver{
			background-color: #272822;
		}

		.navbar li a, .navbar .navbar-brand {
			color: #fff !important;
		}
		.navbar-nav li.active a {
			color: #f4511e !important;
			
		}
		.navbar-nav li a:hover{
			color: #f4511e !important;
			background-color: #fff !important;
		}

		.navbar-default .navbar-toggle, .text_white{			
			color: #fff !important;
		}

		.header-back{
			background: #000 url("public/images/back_index_flip.png");
			color: #fff;
		}		

		.header-contentX{
			padding: 150px 0;
		}

		.extra-margin{
			padding-top: 40px;
			padding-bottom: 100px;
		}

		.thumbnail {
			padding: 0 0 15px 0;
			border: none;
			border-radius: 0;
		}

		.thumbnail:hover{
			border: #f4511e 1px solid;
		}

		.thumbnail img {
			width: 100%;
			height: 100%;
			margin-bottom: 10px;
		}

		.footer{
			background-color: #272822;
			color: #fff !important;
			font-size: 10px;
			height: 40px;
			padding-top: 15px;
		}
		.footer p span{
			color: #f4511e !important;
		}

		/*.back_vancouver{
			background: #FFF url("public/images/back_vancouver.jpg") fixed no-repeat;
		}*/

		@keyframes slide {
		    0% {
		      opacity: 0;
		      transform: translateY(70%);
		    } 
		    100% {
		      opacity: 1;
		      transform: translateY(0%);
		    }
		  }
		  @-webkit-keyframes slide {
		    0% {
		      opacity: 0;
		      -webkit-transform: translateY(70%);
		    } 
		    100% {
		      opacity: 1;
		      -webkit-transform: translateY(0%);
		    }
		  }
		  @media screen and (max-width: 768px) {
		    .col-sm-4 {
		      text-align: center;
		      margin: 25px 0;
		    }
		    .btn-lg {
		        width: 100%;
		        margin-bottom: 35px;
		    }
		  }
		  @media screen and (max-width: 480px) {
		    .logo {
		        font-size: 150px;
		    }
		  }

	</style>

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

	<?php echo $this->layout->css; ?> 
	<?php echo $this->layout->js; ?> 
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">
	<?php echo $content_for_layout; ?>
</body>
</html>

