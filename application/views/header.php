<?php
/**
 * @author	Manuel Irrazabal
 */


echo  'hola'.  $this->session->userdata('site_lang'). ' -';


?>




	<div class="jumbotron text-left header-back">
		<nav class="navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
			    	<a class="navbar-brand" href="#"><img src="public/images/logo.png" width="200" alt="Redirect To main page" /></a>
			    	
			    </div>
				<div id="navbar" class="collapse navbar-collapse navbar-right">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#Home"><?php echo $this->lang->line('menu_home'); ?></a>
						</li>
						<li>
							<a href="#<?php echo $this->lang->line('AM_title_tag'); ?>">
								<?php echo $this->lang->line('menu_about'); ?>
							</a>
						</li>

						<li>
							<a href="#<?php echo $this->lang->line('mw_title_tag'); ?>">
								<?php echo $this->lang->line('menu_mywork'); ?>
							</a>
						</li>
						<li>
							<a href="#contact">
								<?php echo $this->lang->line('menu_contact'); ?>
							</a>
						</li>

						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $this->lang->line('menu_language'); ?>
							<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo base_url(); ?>languageSwitcher/switchLang/english">
										<img src="<?php echo base_url();?>public/images/canada.gif" width="15" alt="<?php echo $this->lang->line('lang_english'); ?>"> 
										&nbsp;&nbsp;<?php echo $this->lang->line('lang_english'); ?>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>languageSwitcher/switchLang/spanish">
										<img src="<?php echo base_url();?>public/images/chile.gif" width="15"  alt="<?php echo $this->lang->line('lang_spanish'); ?>"> 
										&nbsp;&nbsp;<?php echo $this->lang->line('lang_spanish'); ?>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
				
			</div>
		</nav>
		<div class="container header-contentX" id="Home">
			<h1><?php echo $this->lang->line('header_name'); ?></h1> 
		  	<p><?php echo $this->lang->line('header_legend'); ?></p> 
		</div>
	</div>



 

