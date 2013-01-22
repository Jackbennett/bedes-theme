<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  
<!-- Cufon starts  -->
<script type="text/javascript">
	Cufon.replace('h2', { fontFamily: 'Rockwell_bold' }, {hover: true});
	Cufon.replace('h3', { fontFamily: 'Rockwell_bold' }, {hover: true});
	Cufon.replace('h1', { fontFamily: 'Rockwell_bold' }, {hover: true});
	Cufon.replace('h5', { fontFamily: 'Rockwell' }, {hover: true});
</script>
<!-- Cufon ends  -->


<script language="javascript" type="text/javascript">
function search_button(){
	
	if(document.getElementById("edit-submit-2"))
		document.getElementById("edit-submit-2").value = '';
		
		
	if(document.getElementById("edit-submit-1"))
		document.getElementById("edit-submit-1").value = '';
		
}
</script>

        
</head>


    
<body onload="search_button();">
		
        <!-- wrapper starts  -->	
		<div id="wrapper" >
        		<div class="wrapperMain" >
                		
                        <!-- Header starts  -->
    					<div id="header" >
                        		
                                
                                <!-- headerTopLinks starts  -->
                                <ul class="headerTopLinks fltrt" >
                                	<li><a href="#"><img src="<?php echo path_to_theme(); ?>/images/ico01.png" alt=""  /></a></li>
                                    <li><a href="#"><img src="<?php echo path_to_theme(); ?>/images/ico02.png" alt=""  /></a></li>
                                    <li><a href="#"><img src="<?php echo path_to_theme(); ?>/images/ico03.png" alt=""  /></a></li>
                                </ul>
                                <!-- headerTopLinks ends  -->
                                
                                <p class="clear" >&nbsp;</p>
                                <span id="logo" ><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php echo path_to_theme(); ?>/images/logo.png" alt=" "  /></a></span>
                        
                        	<!-- logoTitle starts  -->
                      		<div class="logoTitle fltlft" >
                                		<h4><a href="<?php print $front_page; ?>"><img src="<?php echo path_to_theme(); ?>/images/st_bedes_text.png" alt="ST BEDES CATHOLIC HIGH SCHOOL"  /></a></h4>
                                        <h3><a href="<?php print $front_page; ?>" title="<?php print t("A Specialist Arts College"); ?>">A Specialist Arts College</a></h3>
                                </div>
                                <!-- logoTitle ends  -->
                        
                        		
                                <!-- searchBlock starts  -->
                                <div class="searchBlock fltrt" >
                                        
                                         <?php echo $header; ?>                                         
                                         
                                </div>
                                <!-- searchBlock edns  -->
                        
                        	<!-- nav starts  -->
                        	
                                <?php  if ($primary_links || $navigation): ?>
          
          				<?php print theme('links', $primary_links); ?>
          
      				<?php endif; ?>
                                	
                                <!-- nav ends  -->
                        		
                                <p class="clear" >&nbsp;</p>
                        </div>
                        <!-- Header ends  -->
                        
                        <!-- body starts  -->
                        <div id="body" >
                        		
                              <!-- cmnContainer starts  -->
                              <div class="cmnContainer" >
                              
                              	<!-- ltSidebar starts  -->
                                <div class="ltSidebar fltlft" >
                                
                                 
                                        
                                        
                                 <?php
                                  
				  
				  		$get_node_str			=	$_GET['q'];
						$menu_navigation		=	'navigation';
						$hidden					=	0;
						
						if($get_node_str)
						{							
							
							$side_submenu		=	'';
						
							$parent_current_node		=		db_result(db_query('SELECT plid FROM {menu_links} WHERE  link_path = "%s" AND menu_name != "%s" AND hidden = %d ',$get_node_str,$menu_navigation,$hidden)) ;
						
							if($parent_current_node == 0)
							{// menu_name, mlid, link_path,link_title 
								
								$mlid_current_node		=	db_result(db_query('SELECT mlid FROM {menu_links} WHERE link_path="%s" AND menu_name != "%s" AND hidden = %d ',$get_node_str,$menu_navigation,$hidden));
								
								$parent_node_name	=	db_result(db_query('SELECT link_title FROM {menu_links} WHERE link_path="%s" AND menu_name != "%s" AND hidden = %d ',$get_node_str,$menu_navigation,$hidden));
								
								$side_submenu		.=	'<h1 class="mainTitle" >'.$parent_node_name.'</h1>';	
								
								$side_submenu		.=	'<ul class="ltLinks fltlft" >';
								
								
								$qry1				=	db_query('SELECT link_path,link_title FROM {menu_links} WHERE plid="%d" AND menu_name != "%s" AND hidden = %d  ORDER BY mlid ASC', $mlid_current_node,$menu_navigation,$hidden);
								while($rs	=	db_fetch_array($qry1))
								{
									
									$submenu_link_path	=	'?q='.$rs['link_path'];
									
									$submenu_link_title		=	$rs['link_title'];									
									
									$side_submenu		.=	'<li><a href="'.$base_path.$submenu_link_path.'">'.$submenu_link_title.'</a></li>';
									
									
								}
								
								$side_submenu		.=	'</ul>';
								
							}
							else
							{
								
								$plid_current_node		=	db_result(db_query('SELECT plid FROM {menu_links} WHERE link_path="%s" AND menu_name != "%s" AND hidden = %d ',$get_node_str,$menu_navigation,$hidden));
								
								$parent_node_name	=	db_result(db_query('SELECT link_title FROM {menu_links} WHERE mlid=%d  AND menu_name != "%s" AND hidden = %d ',$plid_current_node,$menu_navigation,$hidden));
								
								$side_submenu		.=	'<h1 class="mainTitle" >'.$parent_node_name.'</h1>';	
								
								$side_submenu		.=	'<ul class="ltLinks fltlft" >';
								
								
								$qry1				=	db_query('SELECT link_path,link_title FROM {menu_links} WHERE plid="%d" AND menu_name != "%s" AND hidden = %d  ORDER BY mlid ASC', $plid_current_node,$menu_navigation,$hidden);
								
								while($rs	=	db_fetch_array($qry1))
								{
									
									$submenu_link_path	=	'?q='.$rs['link_path'];
									
									$submenu_link_title		=	$rs['link_title'];
									
									if($submenu_link_path	==	$get_node_str)
										$class		=	' class="active"';
									else
										$class		=	' class=""';
																
									
									$side_submenu	.=	'<li '.$class.'><a href="'.$base_path.$submenu_link_path.'">'.$submenu_link_title.'</a></li>';
									
									
								}
								
								$side_submenu		.=	'</ul>';
							}//end of if else ($parent_current_node)
							
							
						
						
						
						}//end of  if ($get_node_str)
						
						
						
				  
				  		echo "<br>".$side_submenu;
				  		
				  
				  
				  ?>       
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                
                                <!-- downloadBlock starts  -->
                               	
                               
                               		<?php echo $sidebar_first2; ?>
                                        
                                       
                                <!-- downloadBlock ends  -->
                                        
                                        
                                        
                                        
                                        
                                        
                                       
                                        
                                        
                                        
                                        
                                </div>
                                <!-- ltSidebar ends  -->
                                
                                <!-- rtContainer starts  -->
                                <div class="rtContainer fltrt" >
                                
                                            
                                            <h5 class="contentTitle" ><?php echo $title; ?></h5>
                                            
                                             <?php if ($show_messages && $messages): print $messages; endif; ?>
                                             
                                            
                                             
                                             <?php echo $content; ?>      
                                             
                                             
                                             <?php

								
								
					     ?>                                   
                                             
                            
                                
                                </div>
                                <!-- rtContainer ends  -->
                                
                                
                      
                                <p class="clear" >&nbsp;</p>
                              </div>
                             <!-- cmnContainer ends  -->       
                                    
                                    
                                    
                                    
                                
                                <p class="clear" >&nbsp;</p>
                        </div>
                        <!-- body ends  -->
                        
                        <!-- preFooter starts  -->
     				 <div id="preFooter" >
                        
                        
                        	<!-- partnerList starts  -->
                        	
                                
                                <?php echo $footer_top; ?>
                                	
                                <!-- partnerList ends  -->
                                
                                <p class="clear" >&nbsp;</p>
                                
                                <!-- preFooterTitle starts  -->
                                <div class="preFooterTitle" >
                                  <p class="footerDesign" ><img src="<?php echo path_to_theme(); ?>/images/footerDesign.png" alt="" /></p>
                                  <h1 class="fltlft" >Sitemap</h1>
								  <p class="clear" >&nbsp;</p>
                                </div>
                                <!-- preFooterTitle ends  -->
                                
                                
                                <?php
                                
					
					$f_menu_name	=	'primary-links';
					
					$f_plid			=	0;
					
					$pg1			=	'Home';
					
					$pg2			=	'Contact Us';
							
					$f_q 			=	"SELECT plid, menu_name, mlid, link_path,link_title FROM {menu_links} WHERE menu_name = '%s' AND plid = %d ORDER BY mlid ASC ";  // AND link_title != '%s' AND link_title != '%s'							 
					
					$f_sql 			= 	db_query($f_q, $f_menu_name,$f_plid);//,$pg1,$pg2
					
					
					$ft_sub_menu		=	'';//'<ul class="preFooterLinks fltlft">';
					
					$c	=	1;
					
											
					while($f_row 		= 	db_fetch_array($f_sql))
					{
						
						$f_mlid		=	$f_row['mlid'];	
						
						
						
						
						$f_q1		=	db_result(db_query("SELECT mlid FROM {menu_links} WHERE plid = %d ORDER BY mlid ASC", $f_mlid));
						
						
						if($f_q1 > 0)
						{
							
							$f_link_title	=	$f_row['link_title'];
							
							$f_link_path	=	$f_row['link_path'];
							
							$ft_sub_menu		.=	'<ul class="preFooterLinks'.$c.' fltlft">';
							
							$ft_sub_menu	.=	'<li class="title"><h2>'.$f_link_title.'</h2>';
							
							if($f_link_title	==	'Curriculum')
								$style_class	=	' class="criculam" ';
							else	
								$style_class	=	' class="menu" ';
							
							
							
							$ft_sub_menu	.=	'<ul '.$style_class.' >';	
							
							
							
							
							$qry		=	"SELECT  plid, menu_name, mlid, link_path,link_title FROM {menu_links} WHERE plid = %d  ORDER BY mlid ASC";  
							
							$f_qry	= 	db_query($qry,$f_mlid);
							
							while($rs	=	db_fetch_array($f_qry))
							{
																
								$menu_name	=	$rs['menu_name'];
								
								$link_path	=	'?q='.$rs['link_path'];
								
								$link_title		=	$rs['link_title'];
								
								$ft_sub_menu		.=	'<li class="leaf"><a href="'.$base_path.$link_path.'">'.$link_title.'</a></li>';
								
							}
							
								$ft_sub_menu		.=	'</ul></li>';
								
								
								//$ft_sub_menu		.= '<li class="title" ><h2>Information</h2></li><li> '. menu_tree('menu-information').'</li>';
							
							
							$ft_sub_menu		.=	'</ul>';
							
							
							$c++;
						}
						
						
						
						
					}
					
					
					
						
				
				?>
                                
                                
                                
                                <!-- mainFooter starts  -->
                                <div class="mainFooter" >
                                	
                                    	
                                   <?php echo $ft_sub_menu; ?>
                                    
                                    <!-- preFooterLinks starts  -->
                                    <ul class="preFooterLinks fltlft" >
                                        <li class="title" ><h2>Information</h2></li>
                                        <li><?php echo menu_tree('menu-information'); ?></li>
                                    </ul> 
                                    <!-- preFooterLinks ends  -->
                                   
                                    
                                    <p class="clear" >&nbsp;</p>
                                </div>
                                <!-- mainFooter ends  -->
                        		
                                <p class="clear" >&nbsp;</p>
                        </div>
                        <!-- preFooter ends  -->
                	
                  <p class="clear" >&nbsp;</p>
                </div>
                <p class="wrapperBtm" >&nbsp;</p>
        </div>
        <!-- wrapper ends  -->	
        
        
        
        <!-- footer starts  -->
        <div id="footer" >
                  <!--<!-- footerLt starts  -->     
                 
                 	<?php echo $footer; ?>
                 
                  <!-- footerLt ends  -->     
                  
                  <!-- footerLinks starts  -->  
                  
                  <div class="footerLinks fltrt">
                       
                  
                  	<?php print theme('links', $secondary_links); ?>
                  
                  
                  </div>
                  <!-- footerLinks ends  --> 
		  <p class="clear" >&nbsp;</p>
                  
                  
                  
        </div>
        <!-- footer ends  -->
        
        

			

</body>


</html>
