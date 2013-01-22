<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
	<title><?php print $head_title; ?></title>
	<?php print $head; ?>
	<?php print $styles; ?>
  <!--[if lte IE 6]><script src="<?php echo base_path() . path_to_theme(); ?>js/ie6-warning.js"></script><script>window.onload=function(){e("<?php echo base_path() . path_to_theme(); ?>ie6/")}</script><![endif]-->
	<?php print $scripts; ?>
</head>

<body <?php print $body_class ?>>

<!-- wrapper starts  -->	
	<div id="wrapper">
	<div class="wrapperMain">

	<!-- Header starts  -->
	<div id="header">

		<!-- headerTopLinks starts  -->
		<?php include_once('inc/headerTopLinks.php'); ?>
		<!-- headerTopLinks ends  -->

		<p class="clear">&nbsp;</p>
		<div id="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php echo path_to_theme(); ?>/images/logo.png" alt=" "  /></a></div>

		<!-- logoTitle starts  -->
		<div class="logoTitle fltlft">
			<h4><a href="<?php print $front_page; ?>"><img src="<?php echo path_to_theme(); ?>/images/st_bedes_text.png" alt="ST BEDES CATHOLIC HIGH SCHOOL"  /></a></h4>
			<h3><a href="<?php print $front_page; ?>" title="<?php print t("A Specialist Arts College"); ?>">A Specialist Arts College</a></h3>
		</div>
		<!-- logoTitle ends  -->


		<!-- searchBlock starts  -->
		<div class="searchBlock fltrt" style="z-index:1;">
			<?php echo $header; ?>
		</div>
		<!-- searchBlock edns  -->

		<!-- nav starts  -->
		<?php
			print bedes_links(bedes_navigation_links('primary-links'), array('class' =>'links'));
		?>
		<!-- nav ends  -->

	<p class="clear">&nbsp;</p>
	</div>
	<!-- Header ends  -->

	<!-- body starts  -->
	<div>

		<!-- cmnContainer starts  -->
		<div class="cmnContainer">

			<!-- Start Top_Banner -->
			<?php if ($top_banner): ?>
				
				<!-- homeBanner starts   --> 
					<?php echo $top_banner; ?>
				<!-- homeBanner ends   -->  

			<?php endif; ?>
			<!-- End Top_Banner -->

			<!-- scrollContent starts  -->
			<div class="scrollContent fltlft" id="front">
				<div class="scrollMid">

					<h1>What's New</h1>
					<?php echo $content_left; ?>

					<p class="clear">&nbsp;</p>
				</div>	 
			 
			</div>
			<!-- scrollContent ends  -->

			<!-- yellowBlock starts  -->
			<?php echo $content_right ;?>
			<!-- yellowBlock ends  -->

			<!-- CurriculumBanner Coverflow starts  -->
			<?php echo $content_bottom; ?>
			<!-- CurriculumBanner Coverflow ends  -->



		</div>
		<!-- cmnContainer ends  -->	   

	</div>
	<!-- body ends  -->

	<!-- preFooter starts  -->
	<?php include_once('inc/preFooter.php');?>
	<!-- preFooter ends  -->

	</div>

</div>
<!-- wrapper ends  -->	


<!-- footer starts  -->
<?php include_once('inc/footer.php');?>
<!-- footer ends  -->
<?php print $closure ?>
</body>
</html>