<div id="preFooter" >
	<!-- partnerList starts  -->
	<?php echo $footer_top; ?>
	<!-- partnerList ends  -->

	<p class="clear" >&nbsp;</p>

	<!-- preFooterTitle starts  -->
	<div class="preFooterTitle" >
		<div class="footerDesign" ><img src="<?php echo  path_to_theme(); ?>/images/footerDesign.png" alt="" /></div>
		<h1 class="fltlft" >Sitemap</h1>
	</div>
	<!-- preFooterTitle ends  -->

	<!-- mainFooter starts  -->
	<div class="mainFooter" >

		<?php //echo $ft_sub_menu;
			$menus = menu_tree_page_data($menu_name = 'primary-links'); // get 'navigation' menu tree on current page
			$output = '';
			foreach($menus as $data) {
				if( ! empty($data['link']['title'])){
					$link = '<li class="title"><h2>'.$data['link']['title'].'</h2>';//theme('h2', $data['link']['title']);
					if ( ! empty($data['below'])) { // sub-menus items
						$output = theme('menu_item', $link, $data['link']['has_children'], menu_tree_output($data['below']), $data['link']['in_active_trail'], 'class');print theme('menu_tree', $output, 'preFooterLinks fltlft');
					}
				}
			}
		?>

		<!-- preFooterLinks starts  -->
		<?php if( $thisMenu = menu_tree('menu-virtuallearning') )://don't forget to set the menu title \n ?>
			<ul class="preFooterLinks fltlft" >
				<li class="title" ><h2>Online Portals</h2></li>
				<li><?php print $thisMenu; ?></li>
			</ul>
		<?php endif; ?>
		<?php if( $thisMenu = menu_tree() )://don't forget to set the menu title \n ?>
			<ul class="preFooterLinks fltlft" >
				<li class="title" ><h2>Navigation</h2></li>
				<li><?php print $thisMenu; ?></li>
			</ul>
		<?php endif; ?>
		<!-- preFooterLinks ends  -->	

	</div>
	<!-- mainFooter ends  -->

</div>