<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php  print $scripts; ?>
  
  <script type="text/javascript">
	Cufon.replace('h2', { fontFamily: 'Rockwell_bold' }, {hover: true});
	Cufon.replace('h3', { fontFamily: 'Rockwell_bold' }, {hover: true});
	Cufon.replace('h1', { fontFamily: 'Rockwell_bold' }, {hover: true});
	Cufon.replace('h5', { fontFamily: 'Rockwell' }, {hover: true});
</script>
  
<!-- scollpanes jquery starts  -->
<script type="text/javascript">
$(function()
			{
				$('#pane1').jScrollPane({showArrows:true, scrollbarWidth:15});
				
			});
</script>
<!-- scollpanes jquery ends  -->

<!-- Image Wheler start here -->
<script type="text/javascript">
      $(document).ready(function () {
        $("#waterwheel-carousel-default").waterwheelCarousel();
      });
</script>
<!-- Image Wheler end here. -->




<script language="javascript" type="text/javascript">
function search_button(){
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
                                	<li><a href="#"><img src="<?php echo  path_to_theme(); ?>/images/ico01.png" alt=""  /></a></li>
                                    <li><a href="#"><img src="<?php echo  path_to_theme(); ?>/images/ico02.png" alt=""  /></a></li>
                                    <li><a href="#"><img src="<?php echo  path_to_theme(); ?>/images/ico03.png" alt=""  /></a></li>
                                </ul>
                                <!-- headerTopLinks ends  -->
                                
                                <p class="clear" >&nbsp;</p>
                                <span id="logo" ><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php echo  path_to_theme(); ?>/images/logo.png" alt=" "  /></a></span>
                        
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
                        		
                                
                              <!-- homeBanner starts   --> 
                               <div class="homeBanner" 	 >
                               			
                                        <!-- main_banner starts   -->
                                            <div id="main_banner">
                                                     <div id="slider">
                                                                   
                                                                    <ul id="portfolio">
                                                                            <li><img src="<?php echo  path_to_theme(); ?>/images/banner.jpg" alt=""  width="634" height="335" /></li>
                                                                            <li><img src="<?php echo  path_to_theme(); ?>/images/banner02.jpg" alt=""  width="634" height="335" /></li>
                                                                            <li><img src="<?php echo  path_to_theme(); ?>/images/banner03.jpg" alt=""  width="634" height="335" /></li>
                                                                    </ul>
                                                                    <ul id="slide_nav">
                                                                        <li class="slide_0">1</li>
                                                                        <li class="slide_1">2</li>
                                                                        <li class="slide_2">3</li>
                                                                      </ul>    
                                                    </div>
                                                   
                                                     <ul id="portfolio-desc" >
                                                            
                                                           <li>
                                                                 <div class="desc01" > 
                                                                 	<div class="desc" >
                                                                            <h5>There is a strong sense of optimism and confidence throughout the school</h5>
                                                                            <h3>OFSTED</h3>
                                                                            <p class="clear" >&nbsp;</p>
                                                                    </div>
                                                                    <a href="?q=node/29" class="findMoreBtn fltrt"  ><span>Find out more</span></a>
                                                                    <p class="clear" >&nbsp;</p>
                                                                 </div>
                                                           </li>
                                                           
                                                            <li>
                                                                 <div class="desc01" > 
                                                                 	<div class="desc" >
                                                                            <h5>Moral, social, spiritual and cultural<br />development is excellent</h5>
                                                                            <h3>OFSTED</h3>
                                                                            <p class="clear" >&nbsp;</p>
                                                                    </div>
                                                                    <a href=""?q=node/29" class="findMoreBtn fltrt"  ><span>Find out more</span></a>
                                                                    <p class="clear" >&nbsp;</p>
                                                                 </div>
                                                           </li>
                                                            
                                                            <li>
                                                                 <div class="desc01" > 
                                                                 	<div class="desc" >
                                                                            <h5>We are proud to be a Catholic School where spiritual life is just as important as worldly considerations</h5>
                                                                            <p class="clear" >&nbsp;</p>
                                                                    </div>
                                                                    <a href="?q=node/29" class="findMoreBtn fltrt"  ><span>Find out more</span></a>
                                                                    <p class="clear" >&nbsp;</p>
                                                                 </div>
                                                           </li>
                                                    </ul>
                                                     <div class="clear"> &nbsp; </div>
        
                                            </div>
                                        <!-- main_banner ends   -->
                                        
                                        <!-- WelcomeBanner starts   -->
                                        <div class="WelcomeBanner fltrt" >
                                        
                                        	 <h2>Welcome</h2>
                                                 <p class="clear" >&nbsp;</p>
                                                <div class="descBlock fltrt" >
                                                	
                                                        
                                                        <span  class="rtImg fltrt"  ><img src="<?php echo base_path() . path_to_theme(); ?>/images/smlImg.gif" alt="" /></span>
                                                        <p class="desc" ><strong>I'd like to welcome you to St Bede's  Catholic High School, a caring Christian community where Jesus is at the centre of our life.  <?php //  echo base_path() ; ?></strong>  </p>
                                                        
                                                        
                                                        
                                                        <p class="desc" >Because we recognise  <br />that each and every one of us is a unique creation in God, we celebrate our faith with daily acts of worship and prayer as well as regular whole school masses. Our Catholic ethos is the foundation for our success...</p>
                                                        
                                                        
                                                        <a href="<?php echo $base_path ; ?>?q=node/28" class="readMoreBtn fltlft" >Read more</a>
                                                        
                                                        
                                                </div>
                                        		
                                        </div>
                                        <!-- WelcomeBanner ends   -->
                                    
                                    	<p class="clear" >&nbsp;</p>
                               </div>
                              <!-- homeBanner ends   -->  
                              
                              
                              <!-- cmnContainer starts  -->
                              <div class="cmnContainer" >
                              
                              	
                                
                             
                                
                                
                                
                                <!-- scrollContent starts  -->
                                <div class="scrollContent fltlft" id="pane1" >
                                 	<div class="scrollMid" >
                                    		
                                                
                                          <h1>Whats New</h1>
                               
                                          
                                          
                                          <?php  echo $content_left; ?>
                                          
                                          
                                          
                                          
                                           <p class="clear" >&nbsp;</p>
                                    </div>      
                                </div>
                                <!-- scrollContent ends  -->
                                
                                
                                
                                
                                
                                
                                <!-- yellowBlock starts  -->
                                
                                <?php echo $content_right ; ?>
                                
                                <!-- yellowBlock ends  -->
                                
                                
                                
                                
                                
                                
                                
                                <p class="clear" >&nbsp;</p>
                                
                                
                                <h2 class="mainTItle" >Curriculum</h2>
                                <p class="clear" >&nbsp;</p>
                                
                                
                                <!-- CurriculumBanner starts  -->
                                <div class="CurriculumBanner" >
                                
                                
                                
                                	<?php echo $content_bottom; ?>
                                
                                
                                
                                </div>                                
                                 <!-- CurriculumBanner ends  -->
                                
                                
                                
                      
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
                                  <p class="footerDesign" ><img src="<?php echo  path_to_theme(); ?>/images/footerDesign.png" alt="" /></p>
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
							
							$f_link_path	=	'?q='.$f_row['link_path'];
							
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
