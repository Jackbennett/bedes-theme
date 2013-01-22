<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
<title><?php print $head_title; ?></title>
	<?php print $head; ?>
	<?php print $styles; ?>

	<?php print $scripts; ?>
</head>

<body <?php print $body_class ?>>

<!-- wrapper starts -->
<div id="wrapper">
	<div class="wrapperMain">

		<!-- Header starts -->
		<div id="header">

			<!-- headerTopLinks starts -->
			<?php include_once('inc/headerTopLinks.php'); ?>
			<!-- headerTopLinks ends -->

			<p class="clear">&nbsp;</p>
			<div id="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php echo path_to_theme(); ?>/images/logo.png" alt=" "  /></a></div>

			<!-- logoTitle starts -->
			<div class="logoTitle fltlft">
				<h4><a href="<?php print $front_page; ?>"><img src="<?php echo path_to_theme(); ?>/images/st_bedes_text.png" alt="ST BEDES CATHOLIC HIGH SCHOOL"/></a></h4>
				<h3><a href="<?php print $front_page; ?>" title="<?php print t("A Specialist Arts College"); ?>">A Specialist Arts College</a></h3>
			</div>
			<!-- logoTitle ends -->

			<!-- searchBlock starts -->
			<div class="searchBlock fltrt">
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

			<h5 class="contentTitle"><?php echo $title; ?></h5>

			<!-- Start Top_Banner -->
			<?php if ($top_banner): ?>
				
				<!-- homeBanner starts   --> 
					<?php echo $top_banner; ?>
				<!-- homeBanner ends   -->  

			<?php endif; ?>
			<!-- End Top_Banner -->


			<?php
				if ( ! empty($sidebar_first) || ! empty($sidebar_first2) ){
					?>
					<!-- ltSidebar starts  -->
					<div class="ltSidebar fltlft">

						<!-- sidebar_first2 block starts -->
						<?php echo $sidebar_first; ?>
						<!-- sidebar_first2 block ends -->


						<!-- sidebar_first2 block starts -->
						<?php echo $sidebar_first2; ?>
						<!-- sidebar_first2 block ends -->

					</div>
					<!-- ltSidebar ends -->

			<?php } else { $fullWidth = true; }; ?>
				<!-- rtContainer starts -->
				<div class="rtContainer <?php if($fullWidth){ print 'fullContainer'; } else { print 'fltrt'; } ?>">

					<?php if ($show_messages && $messages): print $messages; endif; ?>
					<?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
					<?php if ($tabs): print $tabs .'</div>'; endif; ?>

					<?php echo $content; ?>

				</div>
				<!-- rtContainer ends -->

			<p class="clear">&nbsp;</p>
			</div>
			<!-- cmnContainer ends  -->	   

		<p class="clear">&nbsp;</p>
		</div>
		<!-- body ends  -->

		<!-- preFooter starts  -->
		<?php include_once('inc/preFooter.php');?>
		<!-- preFooter ends  -->

	<p class="clear">&nbsp;</p>
	</div>
	<!-- wrapperMain ends-->
</div>
<!-- wrapper ends  -->	

<!-- footer starts  -->
<?php include_once('inc/footer.php');?>
<!-- footer ends  -->
<?php print $closure ?>
</body>
</html>