<?php
/**
 * CodeIgniter
 *
 *
 * @author	Manuel Irrazabal
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<!-- MODIFY LATER. -->
	<meta http-equiv="Content-Language" content="EN">
	<meta name="submission" content="http://www..cl/">
	<meta name="revisit-after" content="7 days">
	<meta name="robots" content="all">
	<meta http-equiv="expires" content="0">
	<meta name="distribution" content="Global">
	<meta name="copyright" content="Monumento.cl">
	<meta name="expires" content="never">
	<meta name="author" content="Xside.cl">
	<meta name="doc-type" content="web page">
	<link rel="shortcut icon" href="public/images/favicon.png" type="image/png">

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
	<script src="public/js/document_ready.js"></script> 


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

	<title>Manu Irrazabal</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">


	<div class="jumbotron text-left header-back">
		<nav class="navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
			    	<a class="navbar-brand" href="#"><img src="public/images/logo.png" width="200" /></a>
			    </div>
				<div id="navbar" class="collapse navbar-collapse navbar-right">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#Home">Home</a></li>
						<li><a href="#about">About me</a></li>
						<li><a href="#mywork">My Work</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
		<div class="container header-contentX" id="Home">
			<h1>Manuel Irrazabal</h1> 
		  	<p>Don’t try to be original, just try to be good.</p> 
		</div>
	</div>



	<div class="container extra-margin" id="mywork">
		<div class="row">
			<div class="col-sm-12"><h1>Proyects</h1><br /></div>

			<div class="col-sm-3 text-center">
				<div class="thumbnail">
					<img src="public/images/monumento_mini.jpg" alt="Monumento" width="300" height="240">
					<p><strong>Monumento Propiedades</strong></p>
					<p>Real State Company</p>
				</div>
			</div>
			<div class="col-sm-3 text-center">
				<div class="thumbnail">
					<img src="public/images/reye_mini.jpg" alt="Reye" width="300" height="240">
					<p><strong>Reye</strong></p>
					<p>Building Management</p>
				</div>
			</div>
			<div class="col-sm-3 text-center">
				<div class="thumbnail">
					<img src="public/images/xside_mini.jpg" alt="Xside" width="300" height="240">
					<p><strong>Xside</strong></p>
					<p>Wed Page Developers</p>
				</div>
			</div>
			<div class="col-sm-3 text-center">
				<div class="thumbnail">
					<img src="public/images/contaflex_mini.jpg" alt="Contaflex" width="300" height="240">
					<p><strong>Contaflex</strong></p>
					<p>Accountant System</p>
				</div>
			</div>
			<div class="col-sm-3 text-center">
				<div class="thumbnail">
					<img src="public/images/verbodivino_mini.jpg" alt="Libreria Verbo Divino" width="300" height="240">
					<p><strong>Libreria Verbo Divino (2013)</strong></p>
					<p>Library</p>
				</div>
			</div>

			<div class="col-sm-3 text-center">
				<div class="thumbnail">
					<img src="public/images/verbodivino2_mini.jpg" alt="Libreria Verbo Divino" width="300" height="240">
					<p><strong>Libreria Verbo Divino (2015)</strong></p>
					<p>Library</p>
				</div>
			</div>
		</div>
	</div>

	<div class="back_vancouver">
		<div class="container extra-margin" id="about">
			<div class="row">
				<div class="col-sm-12">
					<h1>About me?</h1>
					<br><br>
				</div>
				<div class="col-sm-3">
					<img src="public/images/about_font.jpg" class="img-circle" alt="Cinque Terre" width="200" height="200">
				</div>
				<div class="col-sm-4">
					<p class="text_white">
					I am normal and simple guy, runner and hiking lover, amateur photographer who enjoy the nature and socialized person.</p>

					<p class="text_white">
					Professionally speaking I am proactive, responsible, who loves new challenges, ability to focus under pressure, self starter and great team worker.
					</p>				
				</div>
				<div class="col-sm-5">
					<p class="text_white">Engineering informatics (Software Enginner), Instituto Profesional AIEP ( Santiago, Chile) 2005 - 2011</p>
					<p class="text_white">Diploma project administration and management, Escuela de Negocios IEDE 2011</p>
				</div>
			</div>
		</div>
	</div>



	<div class="container extra-margin" id="contact">
		<div class="row">
			<div class="col-sm-12"><h1>Contact Me</h1></div>
			<div class="col-sm-5" style="padding-top: 50px;">
				<p>Feel free to contact to me if you are interesting in my job, <br />give me some feed back or just say hello.</p>

				<!-- Social Media Links -->
				<br />
				<p><img src="public/images/location.png" width="20"> Vancouver, BC. Canada</p>
				<p><img src="public/images/mail_icon.png" width="20"> manuirrazabal@manuirrazabal.com</p>
			</div>

			<div class="col-sm-7">
				<form name="Frm-SendMail" class="form-horizontal">
					<div class="form-group">
						<label for="name" class="col-sm-3">Name</label>
						 <div class="col-sm-9"><input type="text" class="form-control" id="name" placeholder="Name"></div>
					</div>
					<div class="form-group">
						<label for="Email" class="col-sm-3">Email</label>
						<div class="col-sm-9"><input type="email" class="form-control" id="Email" placeholder="Email"></div>
					</div>
					<div class="form-group">
						<label for="Email" class="col-sm-3">Phone</label>
						<div class="col-sm-9"><input type="text" class="form-control" id="Phone" placeholder="Phone Number"></div>
					</div>
					<div class="form-group">
						<label for="Message" class="col-sm-3">Message</label>
						<div class="col-sm-9"><textarea name="message" id="Message" class="input-md round form-control" style="height: 84px;" placeholder="Message"></textarea></div>
					</div>				
					<div class="form-group text-right"><button type="submit" class="btn btn-default">Submit</button></div>
				</form>
			</div>
		</div>
	</div>


	<footer class="footer">
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-11">
        			<p><span> &lt;/&gt; </span> Manuel Irrazabal &copy; 2017 <span> &lt;/&gt; </span></p>
        		</div>
        		<div class="col-sm-1">
        			<a href="www.linkedin.com/in/manuel-irrazabal" target="_blank" style="margin-right: 5px;"><img src="public/images/linkedin1_icon.png" width="21"></a>
        			<a href="https://www.instagram.com/manuirrazabal" target="_blank"><img src="public/images/instagram1_icon.png" width="21"></a>
        		</div>
        	</div>
      	</div>
    </footer>

	

</body>
</html>


