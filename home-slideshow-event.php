<!-- Carousel
    ================================================== -->
    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel1" data-slide-to="1"></li>              
      </ol>
      <div class="carousel-inner">
	  <?php $wl_theme_options = weblizar_get_options();
		$event_image_1 = WL_TEMPLATE_DIR_URI ."/images/event1.jpg";
		$event_image_2 = WL_TEMPLATE_DIR_URI ."/images/event2.jpg"; ?>
        <div class="item active">
			<?php if($wl_theme_options['event_image_1']!='') {  ?>
          <img src="<?php echo esc_url($wl_theme_options['event_image_1']); ?>" class="img-responsive" alt="<?php echo esc_attr($wl_theme_options['event_image_1']); ?>">
          <?php } else { ?>
		  <img src="<?php echo esc_url($event_image_1); ?>" class="img-responsive" alt="First slide">
		  <?php } ?>		  
		  <div class="container">
            <div class="carousel-caption">
			<?php if($wl_theme_options['slide_title_1']!='') {  ?>
			<div class="carousel-text">
            <h1 class="animated bounceInRight"><?php echo esc_attr($wl_theme_options['slide_title_1']); ?></h1>			
			<?php  	
			 if($wl_theme_options['slide_desc_1']!='') {  ?>
			  <ul class="list-unstyled carousel-list">
			 <li class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_desc_1']); ?></li>
			 </ul>
			 <?php }
			if($wl_theme_options['slide_btn_text_1']!='') { ?>
            <a class="enigma_blog_read_btn animated bounceInUp" href="<?php if($wl_theme_options['slide_btn_link_1']!='') { echo esc_url($wl_theme_options['slide_btn_link_1']); } ?>" role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_1']); ?></a>
			<?php } ?>
            </div>
			<?php } ?>
			</div>
          </div>
        </div>		
        <div class="item">		
			<?php if($wl_theme_options['event_image_2']!='') {  ?>
          <img src="<?php echo esc_url($wl_theme_options['event_image_2']); ?>" class="img-responsive" alt="<?php echo esc_attr($wl_theme_options['event_image_2']); ?>">
          <?php } else { ?>
		  <img src="<?php echo esc_url($event_image_2); ?>" class="img-responsive" alt="Second slide">
		  <?php } ?>
          <div class="container">
            <div class="carousel-caption">			
			<?php if($wl_theme_options['slide_title_2']!='') {  ?>
			<div class="carousel-text">
              <h1 class="animated bounceInRight"><?php echo esc_attr($wl_theme_options['slide_title_2']); ?></h1>
			<?php 	
			 if($wl_theme_options['slide_desc_2']!='') {  ?>
			 <ul class="list-unstyled carousel-list">
			 <li class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_desc_2']); ?></li>
			 </ul>
			 <?php }
			if($wl_theme_options['slide_btn_text_2']!='') { ?>
             <a class="enigma_blog_read_btn animated bounceInUp" href="<?php if($wl_theme_options['slide_btn_link_2']!='') { echo esc_attr($wl_theme_options['slide_btn_link_2']); } ?>" role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_2']); ?></a>
			  <?php } ?>
            </div>
			<?php } ?>
			</div>
          </div>
        </div>
		
      </div>
      <a class="left carousel-control" href="#myCarousel1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	  <div class="enigma_slider_shadow"></div>
    </div><!-- /.carousel -->