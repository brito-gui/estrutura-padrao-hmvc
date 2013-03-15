<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
	<head>
		<title><?php echo $this->config->item('site_title'); if(isset($title))echo " ".$this->config->item('site_title_delimiter')." ".$title;?></title>	
			<link type='text/css' href="<?php echo base_url();?>assets/css/admin.css" rel='Stylesheet' />
			<link type='text/css' href="<?php echo base_url();?>assets/twitter-bootstrap/css/bootstrap.min.css" rel='Stylesheet' />    
			<link type='text/css' href="<?php echo base_url();?>assets/twitter-bootstrap/css/bootstrap-responsive.min.css" rel='Stylesheet' />    
			<script src="<?php echo base_url();?>assets/twitter-bootstrap/js/bootstrap.min.js"></script>
			<script type='text/javascript'>
					<?php if (isset($js)){echo $js;}?>				
			</script>
			<?php 
				if(isset($head) && is_array($head)) {
					foreach ($head as $headObject) {
						echo $headObject; 
					}  		
				}
			?>
	</head>
	<body>
		<!-- Part 1: Wrap all page content here -->
		<div id="wrap">

			<!-- Begin page content -->
			<div class="container">				
				<?php   $data['menu_type']='main'; ?>
				<?php   $data['module']='admin'; ?>
				<div class="navbar navbar-fixed-top navbar-inverse">
					<div class="navbar-inner navbar-inverse">
						<div class="container">
							<?php $this->load->view($this->template_path.'/partials/menu.tpl.php',$data);?>
						</div>
					</div>
				</div>
				<div id="content" style="margin-top:55px">
				<?php echo $content;?>			
				</div>
			</div>

			<div id="push"></div>
		</div>

		<div id="footer">
			<div class="container">
				<div id="copywright"><?php $this->load->view($this->template_path.'/partials/copywright.tpl.php');?></div>
			</div>
		</div>
	</body>
</html>