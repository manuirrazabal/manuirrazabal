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


// Get the email form and processing.... 

$errMessage = isset($errMessage)?$errMessage:null;
$errHuman	= isset($errHuman)?$errHuman:null;
$errEmail	= isset($errEmail)?$errEmail:null;
$errName	= isset($errName)?$errName:null;



?>



	<div class="container extra-margin" id="mywork">
		<div class="row">
			<div class="col-sm-12 col-xs-12"><h1>My Work</h1><br /></div>

			<div class="col-sm-3 col-xs-6 text-center">
				<div class="thumbnail">
					<a href="<?php echo base_url('monumento_propiedades'); ?>"><img src="public/images/monumento_mini.jpg" alt="Monumento" width="300" height="240"></a>
					<p><strong>Monumento Propiedades</strong></p>
					<p>Real Estate Company</p>
				</div>
			</div>
			<div class="col-sm-3  col-xs-6 text-center">
				<div class="thumbnail">
					<a href="<?php echo base_url('reye'); ?>">
						<img src="<?php echo base_url().'public/';?>images/reye_mini.jpg" alt="Reye" width="300" height="240"></a>
					<p><strong>Reye</strong></p>
					<p>Building Management</p>
				</div>
			</div>
			<div class="col-sm-3 col-xs-6 text-center">
				<div class="thumbnail">
					<a href="<?php echo base_url('xside'); ?>">
						<img src="<?php echo base_url('').'public/';?>images/xside_mini.jpg" alt="Xside" width="300" height="240">
					</a>
					<p><strong>Xside</strong></p>
					<p>Web Page Developers</p>
				</div>
			</div>
			<div class="col-sm-3  col-xs-6 text-center">
				<div class="thumbnail">
					<a href="<?php echo base_url('contaflex'); ?>">
						<img src="<?php echo base_url().'public/';?>images/contaflex_mini.jpg" alt="Contaflex" width="300" height="240">
					</a>
					<p><strong>Contaflex</strong></p>
					<p>Accountant System</p>
				</div>
			</div>
			<div class="col-sm-3 col-xs-6 text-center">
				<div class="thumbnail">					
					<a href="<?php echo base_url('verbo_divino_2012'); ?>">
						<img src="<?php echo base_url().'public/';?>images/verbodivino_mini.jpg" alt="Libreria Verbo Divino" width="300" height="240">
					</a>
					<p><strong>Verbo Divino's Library (2012)</strong></p>
					<p>Library</p>
				</div>
			</div>

			<div class="col-sm-3 col-xs-6 text-center">
				<div class="thumbnail">
					<a href="<?php echo base_url('verbo_divino_2015'); ?>">
						
						<img src="<?php echo base_url().'public/';?>images/verbodivino2_mini.jpg" alt="Libreria Verbo Divino" width="300" height="240">
					</a>
					<p><strong>Verbo Divino's Library (2015)</strong></p>
					<p>Library</p>
				</div>
			</div>
		</div>
	</div>

	<div class="back_vancouver">
		<div class="container extra-margin" id="about">
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<h1>About me?</h1>
					<br><br>
				</div>
				<div class="col-sm-4 col-xs-12">
					<img src="public/images/about_font.jpg" class="img-circle" alt="Cinque Terre" width="200" height="200">
				</div>
				<div class="col-sm-4 col-xs-12">
					<p class="text_white">
					I am normal and simple guy, runner and hiking lover, amateur photographer who enjoy the nature and socialized person.</p>

					<p class="text_white">
					Professionally speaking I am proactive, responsible, who loves new challenges, ability to focus under pressure, self starter and great team worker.
					</p>				
				</div>
				<div class="col-sm-4 col-xs-12">
					<p class="text_white">Engineering informatics (Software Enginner), Instituto Profesional AIEP ( Santiago, Chile) 2005 - 2011</p>
					<p class="text_white">Diploma project administration and management, Escuela de Negocios IEDE 2011</p>
				</div>
			</div>
		</div>
	</div>



	<div class="container extra-margin" id="contact">
		<div class="row">
			<div class="col-sm-12 col-xs-12"><h1>Contact Me</h1></div>
			<div class="col-sm-5 col-xs-12" style="padding-top: 50px;">
				<p>Feel free to contact to me if you are interested in my work, <br />give me some feedback or just say hello.</p>

				<!-- Social Media Links -->
				<br />
				<p><img src="public/images/location.png" width="20"> Vancouver, BC. Canada</p>
				<p><img src="public/images/mail_icon.png" width="20"> manuirrazabal@manuirrazabal.com</p>
			</div>

			<div class="col-sm-7 col-xs-12">
				<form name="Frm-SendMail" class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php
 
								if ( $this->session->flashdata('ControllerMessage') != '' ){ 
									echo $this->session->flashdata('ControllerMessage');
							
								}
							?>
						</div>
					</div>

					<div class="form-group">
						<label for="name" class="col-sm-3">Name</label>
						 <div class="col-sm-9">
						 	<input type="text" class="form-control" id="name" name="name"  placeholder="Name">
						 	<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
						 
					</div>
					<div class="form-group">
						<label for="Email" class="col-sm-3">Email</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="Email" name="email" placeholder="Email">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
						
					</div>
					<div class="form-group">
						<label for="Email" class="col-sm-3">Phone</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="Phone" name="phone" placeholder="Phone Number">
						</div>
					</div>
					<div class="form-group">
						<label for="Message" class="col-sm-3">Message</label>
						<div class="col-sm-9">
							<textarea name="message" id="Message" class="input-md round form-control" style="height: 84px;" placeholder="Message"></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>	
					<div class="form-group">
						<label for="human" class="col-sm-3">2 + 5 = ?</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>			
					<div class="form-group text-right"><button type="submit" name="submit" lass="btn btn-default">Submit</button></div>
					
				</form>
			</div>
		</div>
	</div>

    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-96466916-1', 'auto');
	  ga('send', 'pageview');

	</script>



