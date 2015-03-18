<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
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
	<style type="text/css">
		nav ul {
		  list-style: none;
		  padding-left: 0;
		  margin-top: 0;
		  margin-bottom: 0;
		}
		.nav {
		  width: 900px;
		  margin: auto 0;
		  background: #000000;
		  color: #ffffff;
		}
		.nav b {
		  display: block;
		  padding: 0 16px;
		  line-height: inherit;
		  cursor: pointer;
		}
		.nav__menu {
		  line-height: 35px;
		  font-weight: 100;
		  text-transform: uppercase;
		}
		.nav__menu-item {
		  display: inline-block;
		  position: relative;
		}
		.nav__menu-item:hover {
		  background-color: #dcdcdc;
		}
		.nav__menu-item:hover .nav__submenu {
		  display: block;
		  z-index: 10;
		}
		.nav__submenu {
		  font-weight: 100;
		  text-transform: none;
		  display: none;
		  position: absolute;
		  width: 220px;
		  background-color: #000000;
		}
		.nav__submenu-item:hover {
		  background: rgba(0, 0, 0, 0.1);
		}
		.owner-nav{
			margin-left: 48px;
		}
	</style>
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
				<div class="col-md-10 col-sm-20 wl_rtl">
					<img class="img-responsive" src="<?php echo $wl_theme_options['upload_image_ad']; ?>" style="margin-left:60px;padding-top:5px;height:120px;width:900px;">
					<div class="owner-nav">
						<nav class="nav">
						  <ul class="nav__menu">
						    <li class="nav__menu-item"><b>HOME</b></li>
						    <li class="nav__menu-item"><b>THE ACTION</b>
						      <ul class="nav__submenu">
						        <li class="nav__submenu-item"> <b>VERT AT ORIENTAL PERL</b></li>
						        <li class="nav__submenu-item"> <b>STREET COURSE AT KIC</b></li>
						        <li class="nav__submenu-item"> <b>CLIMBING WALL</b></li>
						        <li class="nav__submenu-item"> <b>MINI MEGA</b></li>
								<li class="nav__submenu-item"> <b>MOTO CROSS</b></li>
						      </ul>
						    </li>
							<li class="nav__menu-item"><b>THE STARS</b>
						      <ul class="nav__submenu">
						        <li class="nav__submenu-item"> <b>SKATEBOARD</b></li>
						        <li class="nav__submenu-item"> <b>BMX</b></li>
						        <li class="nav__submenu-item"> <b>SPEED CLIMBING</b></li>
						        <li class="nav__submenu-item"> <b>OTHERS</b></li>
						      </ul>
						    </li>
						    <li class="nav__menu-item"><b>ABOUT THE EVENT</b>
						      <ul class="nav__submenu">
						        <li class="nav__submenu-item"> <b>EVENT INFO</b></li>
						        <li class="nav__submenu-item"> <b>COMPETITION SCHEDULE</b></li>
						        <li class="nav__submenu-item"> <b>BROADCAST SCHEDULE</b></li>
								<li class="nav__submenu-item"> <b>TICKETING</b></li>
								<li class="nav__submenu-item"> <b>SPONSORS &amp; PARTNERS</b></li>
						      </ul>
						    </li>
						    <li class="nav__menu-item"><b>WHAT'S UP</b>
							  <ul class="nav__submenu">
						        <li class="nav__submenu-item"> <b>PRE-EVENTS</b></li>
						        <li class="nav__submenu-item"> <b>MEDIA RELEASE</b></li>
						        <li class="nav__submenu-item"> <b>RESULT</b></li>
						      </ul>
							</li>
						    <li class="nav__menu-item"><b>HALL OF FAME</b>
							  <ul class="nav__submenu">
						        <li class="nav__submenu-item"> <b>PHOTOS</b></li>
						        <li class="nav__submenu-item"> <b>VIDEOS</b></li>
						      </ul>
							</li>
							<li class="nav__menu-item"><b>GET IN TOUCH</b></li>
						  </ul>
						</nav>
					</div>
				</div>
			</div>	
			<!-- /Logo & Contact Info -->
		</div>	
	</div>	
	<!-- /Header Section -->
	<!-- Navigation  menus -->

	</div>