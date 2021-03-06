<?php function weblizar_scripts()
        {      
                wp_enqueue_style('bootstrap', WL_TEMPLATE_DIR_URI .'/css/bootstrap.css');
                wp_enqueue_style('default', WL_TEMPLATE_DIR_URI . '/css/default.css');
                wp_enqueue_style('enigma-theme', WL_TEMPLATE_DIR_URI . '/css/enigma-theme.css');
                wp_enqueue_style('media-responsive', WL_TEMPLATE_DIR_URI . '/css/media-responsive.css');
                wp_enqueue_style('animations', WL_TEMPLATE_DIR_URI . '/css/animations.css');
                wp_enqueue_style('theme-animtae', WL_TEMPLATE_DIR_URI . '/css/theme-animtae.css');
                wp_enqueue_style('font-awesome', WL_TEMPLATE_DIR_URI . '/css/font-awesome-4.3.0/css/font-awesome.css');            
                wp_enqueue_style('OpenSansRegular','//fonts.useso.com/css?family=Open+Sans');
                wp_enqueue_style('OpenSansBold','//fonts.useso.com/css?family=Open+Sans:700');
                wp_enqueue_style('OpenSansSemiBold','//fonts.useso.com/css?family=Open+Sans:600');
                wp_enqueue_style('RobotoBold','//fonts.useso.com/css?family=Roboto:700');
                wp_enqueue_style('RalewaySemiBold','//fonts.useso.com/css?family=Raleway:600');
                wp_enqueue_style('Courgette','//fonts.useso.com/css?family=Courgette');
                wp_enqueue_style('superfish',WL_TEMPLATE_DIR_URI .'/superfish/superfish.css');
                //wp_enqueue_style('galleria',WL_TEMPLATE_DIR_URI .'/galleria/superfish.css');
                
                // Js
                wp_enqueue_script('modernizr', WL_TEMPLATE_DIR_URI .'/js/modernizr.js');
		        wp_enqueue_script('response', WL_TEMPLATE_DIR_URI .'/js/respond.min.js');
                wp_enqueue_script('jtemplates', WL_TEMPLATE_DIR_URI .'/js/jquery-jtemplates.js');
                wp_enqueue_script('superfish', WL_TEMPLATE_DIR_URI .'/superfish/superfish.js',array('jquery'));
                wp_enqueue_script('galleria', WL_TEMPLATE_DIR_URI .'/galleria/galleria-1.4.2.js');
                wp_enqueue_script('thestarts', WL_TEMPLATE_DIR_URI .'/js/thestarts.js');
                wp_enqueue_script('bootstrap-js', WL_TEMPLATE_DIR_URI .'/js/bootstrap.js');
                wp_enqueue_script('starshow', WL_TEMPLATE_DIR_URI .'/starshow/jssor.slider.js');
                wp_enqueue_script('starshow2', WL_TEMPLATE_DIR_URI .'/starshow/jssor.js');
                wp_enqueue_script('enigma-theme-script', WL_TEMPLATE_DIR_URI .'/js/enigma_theme_script.js');
                if(is_front_page()){
                /*Carofredsul Slides*/
                wp_enqueue_script('jquery.carouFredSel', WL_TEMPLATE_DIR_URI .'/js/carouFredSel-6.2.1/jquery.carouFredSel-6.2.1.js');
                wp_enqueue_script('carouFredSel-element', WL_TEMPLATE_DIR_URI .'/js/carouFredSel-6.2.1/caroufredsel-element.js');
                /*PhotoBox JS*/
                wp_enqueue_script('photobox-js', WL_TEMPLATE_DIR_URI .'/js/jquery.photobox.js');
                wp_enqueue_style('photobox', WL_TEMPLATE_DIR_URI . '/css/photobox.css');
                //Footer JS//
				wp_enqueue_script('enigma-footer-script', WL_TEMPLATE_DIR_URI .'/js/enigma-footer-script.js','','',true);
				wp_enqueue_script('waypoints', WL_TEMPLATE_DIR_URI .'/js/waypoints.js','','',true);				
				wp_enqueue_script('scroll', WL_TEMPLATE_DIR_URI .'/js/scroll.js','','',true);
				}
                if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        }
        add_action('wp_enqueue_scripts', 'weblizar_scripts');       
?>
