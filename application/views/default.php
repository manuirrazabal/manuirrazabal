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



	<div class="container extra-margin" id="<?php echo $this->lang->line('mw_title_tag'); ?>">
		<div class="row">
			<div class="col-sm-12 col-xs-12"><h2><?php echo $this->lang->line('mw_title'); ?></h2><br /></div>

			<div class="col-sm-3 col-xs-6 text-center">
				<div class="thumbnail">
					<a href="<?php echo base_url('monumento_propiedades'); ?>"><img src="public/images/monumento_mini.jpg" alt="Monumento" width="300" height="240"></a>
					<p><strong><?php echo $this->lang->line('mw_monumento_title'); ?></strong></p>
					<p><?php echo $this->lang->line('mw_monumento_descr'); ?></p>
				</div>
			</div>
			<div class="col-sm-3  col-xs-6 text-center">
				<div class="thumbnail">
					<a href="<?php echo base_url('reye'); ?>">
						<img src="<?php echo base_url().'public/';?>images/reye_mini.jpg" alt="Reye" width="300" height="240"></a>
					<p><strong><?php echo $this->lang->line('mw_reye_title'); ?></strong></p>
					<p><?php echo $this->lang->line('mw_reye_descr'); ?></p>
				</div>
			</div>
			<div class="col-sm-3 col-xs-6 text-center">
				<div class="thumbnail">
					<a href="<?php echo base_url('xside'); ?>">
						<img src="<?php echo base_url('').'public/';?>images/xside_mini.jpg" alt="Xside" width="300" height="240">
					</a>
					<p><strong><?php echo $this->lang->line('mw_xside_title'); ?></strong></p>
					<p><?php echo $this->lang->line('mw_xside_descr'); ?></p>
				</div>
			</div>
			<div class="col-sm-3  col-xs-6 text-center">
				<div class="thumbnail">
					<a href="<?php echo base_url('contaflex'); ?>">
						<img src="<?php echo base_url().'public/';?>images/contaflex_mini.jpg" alt="Contaflex" width="300" height="240">
					</a>
					<p><strong><?php echo $this->lang->line('mw_conta_title'); ?></strong></p>
					<p><?php echo $this->lang->line('mw_conta_descr'); ?></p>
				</div>
			</div>
			<div class="col-sm-3 col-xs-6 text-center">
				<div class="thumbnail">					
					<a href="<?php echo base_url('verbo_divino_2012'); ?>">
						<img src="<?php echo base_url().'public/';?>images/verbodivino_mini.jpg" alt="Libreria Verbo Divino" width="300" height="240">
					</a>
					<p><strong><?php echo $this->lang->line('mw_lib2012_title'); ?></strong></p>
					<p><?php echo $this->lang->line('mw_lib2012_descr'); ?></p>
				</div>
			</div>

			<div class="col-sm-3 col-xs-6 text-center">
				<div class="thumbnail">
					<a href="<?php echo base_url('verbo_divino_2015'); ?>">
						
						<img src="<?php echo base_url().'public/';?>images/verbodivino2_mini.jpg" alt="Libreria Verbo Divino" width="300" height="240">
					</a>
					<p><strong><?php echo $this->lang->line('mw_lib2015_title'); ?></strong></p>
					<p><?php echo $this->lang->line('mw_lib2015_descr'); ?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="back_vancouver">
		<div class="container extra-margin" id="<?php echo $this->lang->line('AM_title_tag'); ?>">
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<h2><?php echo $this->lang->line('AM_title'); ?></h2>
					<br><br>
				</div>
				<div class="col-sm-4 col-xs-12">
					<img src="public/images/about_font.jpg" class="img-circle" alt="It's me" width="200" height="200">
				</div>
				<div class="col-sm-4 col-xs-12">
					<p class="text_white">
						<?php echo $this->lang->line('AM_description1'); ?>
					</p>

					<p class="text_white">
						<?php echo $this->lang->line('AM_description2'); ?>
					</p>				
				</div>
				<div class="col-sm-4 col-xs-12">
					<p class="text_white"><?php echo $this->lang->line('AM_carreer1'); ?></p>
					<p class="text_white"><?php echo $this->lang->line('AM_carreer2'); ?></p>
				</div>
			</div>
		</div>
	</div>



	<div class="container extra-margin" id="<?php echo $this->lang->line('CON_title_tag'); ?>">
		<div class="row">
			<div class="col-sm-12 col-xs-12"><h2><?php echo $this->lang->line('CON_title'); ?></h2></div>
			<div class="col-sm-5 col-xs-12" style="padding-top: 50px;">
				
				<p><?php echo $this->lang->line('CON_description'); ?></p>

				
				<br />
				<p><img src="public/images/location.png" alt="my current location"  width="20"> <?php echo $this->lang->line('CON_location'); ?></p>
				<p><img src="public/images/mail_icon.png" alt="my current contact mail" width="20"> <?php echo $this->lang->line('CON_mail'); ?></p>
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
						<label for="name" class="col-sm-3"><?php echo $this->lang->line('CON_pl_name'); ?></label>
						 <div class="col-sm-9">
						 	<input type="text" class="form-control" id="name" name="name"  placeholder="<?php echo $this->lang->line('CON_pl_name'); ?>">
						 	<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
						 
					</div>
					<div class="form-group">
						<label for="Email" class="col-sm-3"><?php echo $this->lang->line('CON_pl_email'); ?></label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="Email" name="email" placeholder="<?php echo $this->lang->line('CON_pl_email'); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
						
					</div>
					<div class="form-group">
						<label for="Email" class="col-sm-3"><?php echo $this->lang->line('CON_pl_phone'); ?></label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="Phone" name="phone" placeholder="<?php echo $this->lang->line('CON_pl_phone'); ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="Message" class="col-sm-3"><?php echo $this->lang->line('CON_pl_message'); ?></label>
						<div class="col-sm-9">
							<textarea name="message" id="Message" class="input-md round form-control" style="height: 84px;" placeholder="<?php echo $this->lang->line('CON_pl_message'); ?>"></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>	
					<div class="form-group">
						<label for="human" class="col-sm-3"><?php echo $this->lang->line('CON_pl_answer_Q'); ?></label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="human" name="human" placeholder="<?php echo $this->lang->line('CON_pl_answer'); ?>">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>			
					<div class="form-group text-right"><button type="submit" name="submit" lass="btn btn-default"><?php echo $this->lang->line('CON_pl_submit'); ?></button></div>
					
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



