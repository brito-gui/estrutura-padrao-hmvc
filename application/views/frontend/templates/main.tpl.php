<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<title><?php echo $this->config->item('site_title'); if(isset($title)) echo " ".$this->config->item('site_title_delimiter')." ".$title;?></title>
    <link type='text/css' href="<?php echo base_url();?>assets/css/main.css" rel='Stylesheet' />
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
<body <?php if(isset($onload)){echo "onload=$onload";}?>>
	<div id="container">
		<div id="header">
			<div id="logo"></div>
		</div>
		<div id="mainNav">
			<?php $this->load->view($this->template_path.'/partials/menu.tpl.php');?>
		</div>		
		<?php /*<div id="breadcrumb"><?php $this->load->view('partials/breadcrumb.tpl.php');?></div>*/?>
		<div id="content">
			<?php echo $content;?>
		</div>		
		<div id="footer">
			<div id="bottomMenu"><?php $this->load->view($this->template_path.'/partials/bottom_menu.tpl.php');?></div>
			<div id="copywright"><?php $this->load->view($this->template_path.'/partials/copywright.tpl.php');?></div>
		</div>
	</div>
</body>
</html>