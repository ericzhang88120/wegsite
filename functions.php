<?php
/** Theme Name	: Enigma
* Theme Core Functions and Codes
*/
	/**Includes required resources here**/
	define('WL_TEMPLATE_DIR_URI', get_template_directory_uri());
	define('WL_TEMPLATE_DIR', get_template_directory());
	define('WL_TEMPLATE_DIR_CORE' , WL_TEMPLATE_DIR . '/core');
	require( WL_TEMPLATE_DIR_CORE . '/menu/default_menu_walker.php' );
	require( WL_TEMPLATE_DIR_CORE . '/menu/weblizar_nav_walker.php' );
	require( WL_TEMPLATE_DIR_CORE . '/scripts/css_js.php' ); //Enquiring Resources here	
	require( WL_TEMPLATE_DIR_CORE . '/comment-function.php' );
	require( WL_TEMPLATE_DIR_CORE . '/flickr-widget.php' );
	
	//Sane Defaults
	function weblizar_default_settings()
{
	$ImageUrl = WL_TEMPLATE_DIR_URI ."/images/slide1.jpg";
	$ImageUrl2 = WL_TEMPLATE_DIR_URI ."/images/slide2.jpg";
	$ImageUrl3 = WL_TEMPLATE_DIR_URI ."/images/3.png";
	$ImageUrl4 = WL_TEMPLATE_DIR_URI ."/images/HallOfFame/image1.jpg";
	$ImageUrl4Shade = WL_TEMPLATE_DIR_URI ."/images/HallOfFame/image3.png";
	$ImageUrl5 = WL_TEMPLATE_DIR_URI ."/images/HallOfFame/image2.jpg";
	$ImageUrl5Shade = WL_TEMPLATE_DIR_URI ."/images/HallOfFame/image4.png";
	$ImageUrl6 = WL_TEMPLATE_DIR_URI ."/images/portfolio3.png";
	$ImageUrl7 = WL_TEMPLATE_DIR_URI ."/images/portfolio4.png";
	$ImageUrl8 = WL_TEMPLATE_DIR_URI ."/images/portfolio5.png";
	$ImageUrl9 = WL_TEMPLATE_DIR_URI ."/images/portfolio6.png";
	$ImageUrlWechatScan = WL_TEMPLATE_DIR_URI ."/images/wechat-scan.png";

	$subnav_point=WL_TEMPLATE_DIR_URI ."/superfish/img/point.png";
	//define image name
	$logo_image = WL_TEMPLATE_DIR_URI ."/images/logo.png";
	$ad_image = WL_TEMPLATE_DIR_URI ."/images/kiaad.jpg";
	$stars_image_root = WL_TEMPLATE_DIR_URI ."/images/";
	$english_png = WL_TEMPLATE_DIR_URI ."/images/english.png";
	$chinese_png = WL_TEMPLATE_DIR_URI ."/images/chinese.png";

	$event_image_1 = WL_TEMPLATE_DIR_URI."/images/event1.jpg";
	$event_image_2 = WL_TEMPLATE_DIR_URI."/images/event2.jpg";
	$event_image_3 = WL_TEMPLATE_DIR_URI."/images/event3.jpg";
	$event_image_4 = WL_TEMPLATE_DIR_URI."/images/event4.jpg";
	$event_image_5 = WL_TEMPLATE_DIR_URI."/images/event5.jpg";
	$event_image_6 = WL_TEMPLATE_DIR_URI."/images/event/event6.jpg";
	$event_broadcast_mark = WL_TEMPLATE_DIR_URI."/images/event/mark.png";
	
	$hall_of_fame_image_1 = WL_TEMPLATE_DIR_URI ."/images/HallOfFame/background.jpg";
	$get_in_touch_image_1 = WL_TEMPLATE_DIR_URI ."/images/GetInTouch/background.jpg";
	$get_in_touch_image_2 = WL_TEMPLATE_DIR_URI ."/images/GetInTouch/submit.png";
	$sponsor_image_1 = WL_TEMPLATE_DIR_URI ."/images/Sponsor/background.png";

	
	$what_is_up_image_1 = WL_TEMPLATE_DIR_URI ."/images/WhatIsUp/background.jpg";
	$what_is_up_image_2 = WL_TEMPLATE_DIR_URI ."/images/WhatIsUp/image1.jpg";
	$what_is_up_image_3 = WL_TEMPLATE_DIR_URI ."/images/WhatIsUp/image2.jpg";
	$what_is_up_image_6 = WL_TEMPLATE_DIR_URI ."/images/WhatIsUp/image5.png";
	$what_is_up_image_4 = WL_TEMPLATE_DIR_URI ."/images/WhatIsUp/image3.jpg";
	$what_is_up_image_5 = WL_TEMPLATE_DIR_URI ."/images/WhatIsUp/image4.png";
	
	//Page what's up
	$page_what_is_up_background_1 = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/background1.png";
	$page_what_is_up_background_2 = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/background2.png";
	$page_what_is_up_background_3 = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/background3.png";
	$page_what_is_up_image_1 = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/image1.png";
	$page_what_is_up_image_2 = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/image2.png";
	$page_what_is_up_image_3 = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/image3.png";
	$page_what_is_up_image_4 = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/image4.png";
	$page_what_is_up_image_5 = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/image5.png";
	$page_what_is_up_image_6 = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/image6.png";
	$page_what_is_up_image_7 = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/image7.png";
	$page_what_is_up_image_8 = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/image8.png";
	$page_what_is_up_image_9 = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/image9.png";
	$page_what_is_up_image_10 = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/image10.png";
	$page_what_is_up_image_11 = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/image11.png";
	$page_what_is_up_line = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/line.png";
	$page_what_is_up_read = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/read.png";
	$page_what_is_up_more = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/more.png";
	$page_what_is_up_year = WL_TEMPLATE_DIR_URI ."/images/PageWhatIsUp/year.png";
	
	$wl_theme_options=array(
			//Logo and Fevicon header			
			'upload_image_logo'=>$logo_image,
			'upload_image_ad'=>$ad_image,
			'english_png'=>$english_png,
			'chinese_png'=>$chinese_png,
			'height'=>'130',
			'width'=>'215',
			'subnav_point'=>$subnav_point,
			'_frontpage' => 'on',
			'text_title'=>'off',
			'upload_image_favicon'=>'',			
			'custom_css'=>'',
			'slide_image_1' => $ImageUrl,
			'slide_title_1' => '',
			'slide_desc_1' => '',
			'slide_btn_text_1' => '',
			'slide_btn_link_1' => '#',
			'slide_image_2' => $ImageUrl2,
			'slide_title_2' => '',
			'slide_desc_2' => '',
			'slide_btn_text_2' => '',
			'slide_btn_link_2' => '#',
			'slide_image_3' => $ImageUrl3,
			'slide_title_3' => __('Contrary to popular ', 'weblizar' ),
			'slide_desc_3' => __('Aldus PageMaker including versions of Lorem Ipsum, rutrum turpi', 'weblizar' ),
			'slide_btn_text_3' => __('Read More', 'weblizar' ),
			'slide_btn_link_3' => '#',			
			'blog_title'=>__('Latest Blog', 'weblizar' ),			
			'fc_title' => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'weblizar' ),
			'fc_btn_txt' => __('More Features', 'weblizar' ),
			'fc_btn_link' =>'#',
			//Social media links
			'header_social_media_in_enabled'=>'on',
			'footer_section_social_media_enbled'=>'on',
			'twitter_link' =>"https://twitter.com/kiaextremegames",
			'fb_link' =>"https://www.facebook.com/kiaworldextremegames",
			'instagram_link' =>"https://instagram.com/kiaworldextremegames",
			'weixin_link' =>"#",
			'wechat_scan_image' =>$ImageUrlWechatScan,
			'webo_link' =>"http://www.weibo.com/kiaxgamesasia",
			'renren_link' =>'http://page.renren.com/weg',
			'gplus' =>"#",
			
			'email_id' => 'enigma@mymail.com',
			'phone_no' => '0159753586',
			'footer_customizations' => __('  All Rights Reserved &#169; 2014 WSG', 'weblizar' ),
			'developed_by_text' => __('', 'weblizar' ),
			'developed_by_weblizar_text' => __('', 'weblizar' ),
			'developed_by_link' => '',
			
			'home_service_heading' => __('Our Services', 'weblizar' ),
			'service_1_title'=>__("Idea",'weblizar' ),
			'service_1_icons'=>"fa fa-google",
			'service_1_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'weblizar' ),
			'service_1_link'=>"#",
			
			'service_2_title'=>__('Records', 'weblizar' ),
			'service_2_icons'=>"fa fa-database",
			'service_2_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'weblizar' ),
			'service_2_link'=>"#",
			
			'service_3_title'=>__("WordPress", 'weblizar' ),
			'service_3_icons'=>"fa fa-wordpress",
			'service_3_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'weblizar' ),
			'service_3_link'=>"#",			

			//Portfolio Settings:
			'portfolio_home'=>'on',
			'port_heading' => __('Recent Works', 'weblizar' ),
			'port_1_img'=> $ImageUrl4,
			'port_1_title'=>__('Bonorum', 'weblizar' ),
			'port_1_link'=>'#',
			'port_1_img_shade'=> $ImageUrl4Shade,
			'port_2_img'=> $ImageUrl5,			
			'port_2_title'=>__('Content', 'weblizar' ),
			'port_2_link'=>'#',
			'port_2_img_shade'=> $ImageUrl5Shade,
			'port_3_img'=> $ImageUrl6,
			'port_3_title'=>__('dictionary', 'weblizar' ),
			'port_3_link'=>'#',
			'port_4_img'=> $ImageUrl7,
			'port_4_title'=>__('randomised', 'weblizar' ),
			'port_4_link'=>'#',

			#the star
			'stars_image_root'=>$stars_image_root,



			'star_desc'=>__('NULL', 'weblizar' ),

			#events
			'event_image_1'=>$event_image_1,
			'event_image_2'=>$event_image_2,
			'event_image_3'=>$event_image_3,
			'event_image_4'=>$event_image_4,
			'event_image_5'=>$event_image_5,
			'event_image_6'=>$event_image_6,
			'event_broadcast_mark'=>$event_broadcast_mark,
			
			'event_info_text'=>__('NULL', 'weblizar' ),
			'event_broadcast_text'=>__('NULL', 'weblizar' ),
			
			#hall of fame
			'hall_of_fame_image_1'=>$hall_of_fame_image_1,
			
			#get in touch
			'get_in_touch_image_1'=>$get_in_touch_image_1,
			'get_in_touch_image_2'=>$get_in_touch_image_2,
			'sponsor_image_1'=>$sponsor_image_1,
			
			#what's up
			'what_is_up_image_1'=>$what_is_up_image_1,
			'what_is_up_image_2'=>$what_is_up_image_2,
			'what_is_up_image_3'=>$what_is_up_image_3,
			'what_is_up_image_4'=>$what_is_up_image_4,
			'what_is_up_image_5'=>$what_is_up_image_5,
			'what_is_up_image_6'=>$what_is_up_image_6,
			
			#page what's up
			'page_what_is_up_background_1'=>$page_what_is_up_background_1,
			'page_what_is_up_background_2'=>$page_what_is_up_background_2,
			'page_what_is_up_background_3'=>$page_what_is_up_background_3,
			'page_what_is_up_image_1'=>$page_what_is_up_image_1,
			'page_what_is_up_image_2'=>$page_what_is_up_image_2,
			'page_what_is_up_image_3'=>$page_what_is_up_image_3,
			'page_what_is_up_image_4'=>$page_what_is_up_image_4,
			'page_what_is_up_image_5'=>$page_what_is_up_image_5,
			'page_what_is_up_image_6'=>$page_what_is_up_image_6,
			'page_what_is_up_image_7'=>$page_what_is_up_image_7,
			'page_what_is_up_image_8'=>$page_what_is_up_image_8,
			'page_what_is_up_image_9'=>$page_what_is_up_image_9,
			'page_what_is_up_image_10'=>$page_what_is_up_image_10,
			'page_what_is_up_image_11'=>$page_what_is_up_image_11,
			'page_what_is_up_line'=>$page_what_is_up_line,
			'page_what_is_up_more'=>$page_what_is_up_more,
			'page_what_is_up_read'=>$page_what_is_up_read,
			'page_what_is_up_year'=>$page_what_is_up_year
			
		);
		return apply_filters( 'enigma_options', $wl_theme_options );
}
	function weblizar_get_options() {
    // Options API
    return wp_parse_args( 
        get_option( 'enigma_options', array() ), 
        weblizar_default_settings() 
    );    
	}
	require( WL_TEMPLATE_DIR_CORE . '/theme-options/option-panel.php' ); // for Options Panel
	
	/*After Theme Setup*/
	add_action( 'after_setup_theme', 'weblizar_head_setup' ); 	
	function weblizar_head_setup()
	{	
		global $content_width;
		//content width
		if ( ! isset( $content_width ) ) $content_width = 550; //px
	
	    //Blog Thumb Image Sizes
		add_image_size('home_post_thumb',340,210,true);
		//Blogs thumbs
		add_image_size('wl_page_thumb',730,350,true);	
		add_image_size('blog_2c_thumb',570,350,true);
		add_theme_support( 'title-tag' );
		// Load text domain for translation-ready
		load_theme_textdomain( 'weblizar', WL_TEMPLATE_DIR_CORE . '/lang' );	
		
		add_theme_support( 'post-thumbnails' ); //supports featured image
		// This theme uses wp_nav_menu() in one location.
		register_nav_menu( 'primary', __( 'Primary Menu', 'weblizar' ) );
		// theme support 	
		$args = array('default-color' => '000000',);
		add_theme_support( 'custom-background', $args); 
		add_theme_support( 'automatic-feed-links'); 
		require( WL_TEMPLATE_DIR . '/options-reset.php'); //Reset Theme Options Here				
	}
	

	// Read more tag to formatting in blog page 
	function weblizar_content_more($more)
	{  							
	   return '<div class="blog-post-details-item"><a class="enigma_blog_read_btn" href="'.get_permalink().'"><i class="fa fa-plus-circle"></i>"'.__('Read More', 'weblizar' ).'"</a></div>';
	}   
	add_filter( 'the_content_more_link', 'weblizar_content_more' );
	
	
	// Replaces the excerpt "more" text by a link
	function weblizar_excerpt_more($more) {      
	return '';
	}
	add_filter('excerpt_more', 'weblizar_excerpt_more');
	/*
	* Weblizar widget area
	*/
	add_action( 'widgets_init', 'weblizar_widgets_init');
	function weblizar_widgets_init() {
	/*sidebar*/
	register_sidebar( array(
			'name' => __( 'Sidebar', 'weblizar' ),
			'id' => 'sidebar-primary',
			'description' => __( 'The primary widget area', 'weblizar' ),
			'before_widget' => '<div class="enigma_sidebar_widget">',
			'after_widget' => '</div>',
			'before_title' => '<div class="enigma_sidebar_widget_title"><h2>',
			'after_title' => '</h2></div>'
		) );

	register_sidebar( array(
			'name' => __( 'Footer Widget Area', 'weblizar' ),
			'id' => 'footer-widget-area',
			'description' => __( 'footer widget area', 'weblizar' ),
			'before_widget' => '<div class="col-md-3 col-sm-6 enigma_footer_widget_column">',
			'after_widget' => '</div>',
			'before_title' => '<div class="enigma_footer_widget_title">',
			'after_title' => '<div class="enigma-footer-separator"></div></div>',
		) );             
	}
	
	/* Breadcrumbs  */
	function weblizar_breadcrumbs() {
    $delimiter = '';
    $home = __('Home', 'weblizar' ); // text for the 'Home' link
    $before = '<li>'; // tag before the current crumb
    $after = '</li>'; // tag after the current crumb
    echo '<ul class="breadcrumb">';
    global $post;
    $homeLink = home_url();
    echo '<li><a href="' . $homeLink . '">' . $home . '</a></li>' . $delimiter . ' ';
    if (is_category()) {
        global $wp_query;
        $cat_obj = $wp_query->get_queried_object();
        $thisCat = $cat_obj->term_id;
        $thisCat = get_category($thisCat);
        $parentCat = get_category($thisCat->parent);
        if ($thisCat->parent != 0)
            echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
        echo $before . ' _e("Archive by category","weblizar") "' . single_cat_title('', false) . '"' . $after;
    } elseif (is_day()) {
        echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
        echo '<li><a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
        echo $before . get_the_time('d') . $after;
    } elseif (is_month()) {
        echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
        echo $before . get_the_time('F') . $after;
    } elseif (is_year()) {
        echo $before . get_the_time('Y') . $after;
    } elseif (is_single() && !is_attachment()) {
        if (get_post_type() != 'post') {
            $post_type = get_post_type_object(get_post_type());
            $slug = $post_type->rewrite;
            echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } else {
            $cat = get_the_category();
            $cat = $cat[0];
            //echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
            echo $before . get_the_title() . $after;
        }
		
    } elseif (!is_single() && !is_page() && get_post_type() != 'post') {
        $post_type = get_post_type_object(get_post_type());
        echo $before . $post_type->labels->singular_name . $after;
    } elseif (is_attachment()) {
        $parent = get_post($post->post_parent);
        $cat = get_the_category($parent->ID);
        $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
    } elseif (is_page() && !$post->post_parent) {
        echo $before . get_the_title() . $after;
    } elseif (is_page() && $post->post_parent) {
        $parent_id = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
            $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb)
            echo $crumb . ' ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
    } elseif (is_search()) {
        echo $before . _e("Search results for","weblizar")  . get_search_query() . '"' . $after;

    } elseif (is_tag()) {        
		echo $before . _e('Tag','weblizar') . single_tag_title('', false) . $after;
    } elseif (is_author()) {
        global $author;
        $userdata = get_userdata($author);
        echo $before . _e("Articles posted by","weblizar") . $userdata->display_name . $after;
    } elseif (is_404()) {
        echo $before . _e("Error 404","weblizar") . $after;
    }
    
    echo '</ul>';
	}
	
	//PAGINATION
		function weblizar_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='enigma_blog_pagination'><div class='enigma_blog_pagi'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                echo ($paged == $i)? "<a class='active'>".$i."</a>":"<a href='".get_pagenum_link($i)."'>".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div></div>";
     }
}
	/*===================================================================================
	* Add Author Links
	* =================================================================================*/
	function weblizar_author_profile( $contactmethods ) {	
	
	$contactmethods['youtube_profile'] = __('Youtube Profile URL','weblizar');	
	$contactmethods['twitter_profile'] = __('Twitter Profile URL','weblizar');
	$contactmethods['facebook_profile'] = __('Facebook Profile URL','weblizar');
	$contactmethods['linkedin_profile'] = __('Linkedin Profile URL','weblizar');
	
	return $contactmethods;
	}
	add_filter( 'user_contactmethods', 'weblizar_author_profile', 10, 1);
	/*===================================================================================
	* Add Class Gravtar
	* =================================================================================*/
	add_filter('get_avatar','weblizar_gravatar_class');

	function weblizar_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='author_detail_img", $class);
    return $class;
	}	
	/****--- Navigation for Author, Category , Tag , Archive ---***/
	function weblizar_navigation() { ?>
	<div class="enigma_blog_pagination">
	<div class="enigma_blog_pagi">
	<?php posts_nav_link(); ?>
	</div>
	</div>
	<?php }

	/****--- Navigation for Single ---***/
	function weblizar_navigation_posts() { ?>
	<div class="navigation_en">
	<nav id="wblizar_nav"> 
	<span class="nav-previous">
	<?php previous_post_link('&laquo; %link'); ?>
	</span>
	<span class="nav-next">
	<?php next_post_link('%link &raquo;'); ?>
	</span> 
	</nav>
	</div>	
<?php 
	}	
?>