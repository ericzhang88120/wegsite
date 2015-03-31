<!DOCTYPE html>

    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> 
    <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> 
    <![endif]-->

<html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta charset="<?php bloginfo('charset'); ?>" />	
	<?php $wl_theme_options = weblizar_get_options(); ?>
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo esc_url($wl_theme_options['upload_image_favicon']); ?>" /> 
	<?php } ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<?php 
	if ( ! function_exists( 'wl_title' ) ) :
	function wl_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
	}
	add_action( 'wp_head', 'wl_title' );
endif;
	wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div>
	<!-- Header Section -->
	<div class="header_section" >
		<div class="container" >
			<!-- Logo & Contact Info -->
			<div class="row ">
				<div class="col-md-2 col-sm-4 wl_rtl" >					
					<div claSS="logo">						
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php 
					if($wl_theme_options['text_title'] =="on")
					{ echo get_bloginfo('name'); }
					else if($wl_theme_options['upload_image_logo']!='') 
					{ ?>
					<img class="img-responsive" src="<?php echo $wl_theme_options['upload_image_logo']; ?>" style="margin-left:20px;padding-top:20px;height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "80"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "200"; } ?>px;" />
					<?php } else { echo __('Enigma','weblizar'); } ?>
					</a>
					</div>
				</div>
				<div class="col-md-10 col-sm-6 wl_rtl">
					<a href="http://www.kia.com">
                    <img class="img-responsive" src="<?php echo $wl_theme_options['upload_image_ad']; ?>" style="margin-left:60px;padding-top:5px;height:120px;width:900px;">
                    </a>
					<div class="row">
                        <div class="col-md-10 col-sm-20 wl_rtl">
                        <nav id="main-nav-menu">
                            <ul class="sf-menu">
                                <li>
                            		<a href="<?php echo esc_url(home_url( '/' )); ?>" title=""> HOME |</a>
                        		</li>
                        		<li>
                            		<a href='#' title="">&nbspTHE ACTION |</a>
                            		<ul>
                            			<li>
                            				<div><img src="<?php echo esc_url($wl_theme_options['subnav_point']); ?>" style="height:20px;width:200px;"></div>
                            				<a href='#' title="">VERT AT ORIENTAL PERL</a>
                            				<a href='#' title="">STREET COURSE AT KIC</a>
                            				<a href='#' title="">CLIMBING WALL</a>
                            				<a href='#' title="">MINI MEGA</a>
                            				<a href='#' title="">MOTO CROSS</a>
                            			</li>
                            		</ul>
                        		</li>
                        		<li>
                            		<a href='#' title="">&nbspTHE STARS |</a>
                            		<ul>
                            			<li>
                            				<div><img src="<?php echo esc_url($wl_theme_options['subnav_point']); ?>" style="height:20px;width:200px;"></div>
                            				<a href='#' title="">SKATEBOARD</a>
                            				<a href='#' title="">BMX</a>
                            				<a href='#' title="">SPEED CLIMBING</a>
                            				<a href='#' title="">OTHERS</a>
                            			</li>
                            		</ul>
                        		</li>
                        		 <li>
                            		<a href='<?php echo get_permalink( get_page_by_title( 'event' ) );?>' title="">&nbspABOUTTHE EVENT |</a> 
                            		<ul>
                            			<li>
                            				<div><img src="<?php echo esc_url($wl_theme_options['subnav_point']); ?>" style="height:20px;width:200px;"></div>
                            				<a href='<?php echo get_permalink( get_page_by_title( 'event' ) );?>#event-info' title="EVENT INFO">EVENT INFO</a>
                            				<a href='<?php echo get_permalink( get_page_by_title( 'event' ) );?>#schedule' title="COMPETITION SCHEDULE">COMPETITION SCHEDULE</a>
                            				<a href='<?php echo get_permalink( get_page_by_title( 'event' ) );?>#broadcast' title="BROADCAST SCHEDULE">BROADCAST SCHEDULE</a>
                            				<a href='<?php echo get_permalink( get_page_by_title( 'event' ) );?>#ticketing' title="TICKETING">TICKETING</a>
                            				<a href='<?php echo get_permalink( get_page_by_title( 'event' ) );?>#sponsor' title="SPONSORS &amp; PARTNERS">SPONSORS &amp; PARTNERS</a>
                            			</li>
                            		</ul>                      
                        		</li>
                        		 <li>
                            		<a href='<?php echo get_permalink( get_page_by_title( 'whatisup' ) );?>' title="">&nbspWHAT'S UP |</a>
                             		<ul>
                            			<li>
                            				<div><img src="<?php echo esc_url($wl_theme_options['subnav_point']); ?>" style="height:20px;width:200px;"></div>
                            				<a href='#' title="">PRE-EVENTS</a>
                            				<a href='#' title="">MEDIA RELEASE</a>
                            				<a href='#' title="">RESULT</a>
                            			</li>
                            		</ul>                           		
                        		</li>
                        		 <li>
                            		<a href='#' title="">&nbspHALL OF FAME |</a>
                              		<ul>
                            			<li>
                            				<div><img src="<?php echo esc_url($wl_theme_options['subnav_point']); ?>" style="height:20px;width:200px;"></div>
                            				<a href='#' title="">PHOTOS</a>
                            				<a href='#' title="">VIDEOS</a>
                            			</li>
                            		</ul>                           		
                        		</li>
                        		<li>
                            		<a href='#' title="">&nbspGET IN TOUCH</a>
                        		</li>
                            </ul>
                        </nav>
                        </div>
                        <div class="col-md-2 col-sm-4 wl_rtl">
                            <div style="float:right;width:100px;padding-top:5px;"><a href="#"><img src="<?php echo $wl_theme_options['english_png']; ?>"></a></div>
                        </div>
					</div>
				</div>
			</div>	
			<!-- /Logo & Contact Info -->
		</div>	
	</div>	
	<!-- /Header Section -->
	<!-- Navigation  menus -->

	</div>
