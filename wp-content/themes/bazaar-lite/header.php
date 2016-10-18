<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />




<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />




 

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >



<div id="wrapper">
	
   <div id="header-wrapper">
    
       <header id="header" style="height: 160px!important;" >
            
              
                              
<nav class="navbar navbar-default navbar-inverse" style="border-radius:0!important;">
 <div class="container-fluid">
   <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
   </div>

   <!-- Collect the nav links, forms, and other content for toggling -->
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav">
       <li class=""><a href="https://www.facebook.com/justpujasamagri"><i class="fa fa-facebook-f"></i> <span class="sr-only">(current)</span></a></li>
       <li><a href="https://www.pinterest.com/justpujasamagri/"><i class="fa fa-pinterest-p"></i></a></li>
       <li class=""><a href="https://twitter.com/justpujasamagri?refsrc=email"><i class="fa fa-twitter"></i> <span class="sr-only">(current)</span></a></li>

       <li><a href="https://plus.google.com/103012481596704287871/about"><i class="fa fa-google-plus"></i></a></li>
      
       
     </ul>
      
      <ul class="nav navbar-nav navbar-right">
      <li> <?php  echo do_shortcode('[yith_woocommerce_ajax_search]'); ?> </li>
         <li>  </li>
       <li><a href="http://puja.scaledesk.com/my-account/">My Account</a></li>
      

       
     </ul>
   </div><!-- /.navbar-collapse -->
 </div><!-- /.container-fluid -->
</nav>
          
 

       
            <div class="container">
               


                <div class="row">
                
                    <div class="col-md-2">
            
                        <div id="logo">
                        
							<?php bazaarlite_get_logo(); ?> 
                                            
                        </div>
                        
                    </div>

					<?php 
						
						if ( bazaarlite_is_woocommerce_active() && bazaarlite_setting('wip_woocommerce_header_cart') == "on" ) :
							
							$menu_class="col-md-9";
							
							echo '<div class="col-md-1 right">';
		
								bazaarlite_header_cart();
							
							echo '</div>';
							
						else:
	
							$menu_class="col-md-10";

						endif;

					?>

                    <div class="<?php echo $menu_class; ?>">

                        <nav id="mainmenu" class="<?php echo bazaarlite_setting('wip_menu_layout'); ?>">
                            
                            <?php wp_nav_menu( array('theme_location' => 'main-menu', 'container' => 'false','depth' => 3  )); ?>
                        
                        </nav>
                        	
                       
                    </div>
                    
                </div>
                
            </div>  
            
        </header>
    
    </div>
    
<?php 

	if ( is_front_page() ) {

		if ( bazaarlite_setting('wip_enable_slideshow') == 'on' || !bazaarlite_setting('wip_enable_slideshow') ) : 
		
?>
	
		<div class="slick-wrapper">
	
			<div class="slick-image" style="background-image:url('<?php echo esc_url(bazaarlite_setting('wip_slideshow_1_image', get_template_directory_uri().'/assets/images/slideshow/img01.jpg'))?>')">
<p class="slick-title"><?php echo esc_html(bazaarlite_setting('wip_slideshow_1_title','Get instant discount of Rs. 50 on minimum order of Rs. 500 on All Products.    < Valid till 30th August>
COUPON CODE: JUST50'))?></p>
			
				
		   
			</div>
		
			<div class="slick-image" style="background-image:url('<?php echo esc_url(bazaarlite_setting('wip_slideshow_2_image', get_template_directory_uri().'/assets/images/slideshow/img02.jpg'))?>')">

<p class="slick-title"><?php echo esc_html(bazaarlite_setting('wip_slideshow_2_title','Free shipping for the order of Rs 500 and above'))?></p>		
				
		   
			</div>
		
			<div class="slick-image" style="background-image:url('<?php echo esc_url(bazaarlite_setting('wip_slideshow_3_image', get_template_directory_uri().'/assets/images/slideshow/img03.jpg'))?>')">
<p class="slick-title"><?php echo esc_html(bazaarlite_setting('wip_slideshow_3_title',' Best prices for any product compared to Market and Online stores'))?></p>
			
				
		   
			</div>
		
		</div>
	
<?php
	
		endif;
	
	} else {
	
		do_action('bazaarlite_get_breadcrumb'); 

	}
	
?>