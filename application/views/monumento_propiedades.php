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



	<div class="container extra-margin" id="monumento_propiedades">
		<div class="row">
			<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12"><h2><?php echo $this->lang->line('monu_title'); ?></h2><br /></div>

			<div class="col-sm-5 col-xs-12 col-md-5 col-lg-5">
				<p><?php echo $this->lang->line('monu_description'); ?><br /> <?php echo $this->lang->line('monu_location'); ?></p>
				<p><?php echo $this->lang->line('monu_website'); ?></p>
				<br />
				<p>
				<!-- Add Description Later. -->
				</p>


			</div>
			<div class="col-sm-7 col-xs-12 col-md-7 col-lg-7">
				<div class="row">
					<div class="col-sm-4 col-xs-6 col-md-4 col-lg-4">
						<a class="thumbnail fancybox" rel="ligthbox" href="public/images/monumento_preview_600.jpg">
							<img src="public/images/monumento_preview_300.jpg" alt="Monumento" width="300" >
						</a>
					</div>
					<div class="col-sm-4 col-xs-6 col-md-4 col-lg-4">
						<a class="thumbnail fancybox" rel="ligthbox" href="public/images/monumento_preview2_600.jpg">
							<img src="public/images/monumento_preview2_300.jpg" alt="Monumento 2" width="300" >
						</a>
					</div>
					<div class="col-sm-4 col-xs-6 col-md-4 col-lg-4">
						<a class="thumbnail fancybox" rel="ligthbox" href="public/images/monumento_preview3_600.jpg">
							<img src="public/images/monumento_preview3_300.jpg" alt="Monumento 2" width="300" >
						</a>
					</div>
				
				
					<div class="col-sm-4 col-xs-6 col-md-4 col-lg-4">
						<a class="thumbnail fancybox" rel="ligthbox" href="public/images/monumento_preview4_600.jpg">
							<img src="public/images/monumento_preview4_300.jpg" alt="Monumento 2" width="300" >
						</a>
					</div>
					<div class="col-sm-4 col-xs-6 col-md-4 col-lg-4">
						<a class="thumbnail fancybox" rel="ligthbox" href="public/images/monumento_preview5_600.jpg">
							<img src="public/images/monumento_preview5_300.jpg" alt="Monumento 2" width="300" >
						</a>
					</div>
				</div>				
			</div>
		</div>
	</div>

	<div class="row extra-margin text-center">
		<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
			
			<a href="<?php echo base_url('index');?>" class="pagination"><?php echo $this->lang->line('pagination_index'); ?></a>
			<a href="<?php echo base_url('reye'); ?>" class="pagination"><?php echo $this->lang->line('pagination_next'); ?></a>
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



