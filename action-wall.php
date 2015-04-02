<!-- Carousel
    ================================================== -->
    <div id="actionWall" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#actionWall" data-slide-to="0" class="active"></li>
        <li data-target="#actionWall" data-slide-to="1"></li>              
        <li data-target="#actionWall" data-slide-to="2"></li>              
        <li data-target="#actionWall" data-slide-to="3"></li>              
        <li data-target="#actionWall" data-slide-to="4"></li>              
      </ol>
      <div class="carousel-inner">
	  <?php $wl_theme_options = weblizar_get_options();
		$wall_image_1 = WL_TEMPLATE_DIR_URI ."/images/action/wall/wall1.jpg";
		$wall_image_2 = WL_TEMPLATE_DIR_URI ."/images/action/wall/wall1.jpg";
		$wall_image_3 = WL_TEMPLATE_DIR_URI ."/images/action/wall/wall1.jpg";
		$wall_image_4 = WL_TEMPLATE_DIR_URI ."/images/action/wall/wall1.jpg"; 
		$wall_image_5 = WL_TEMPLATE_DIR_URI ."/images/action/wall/wall1.jpg"; ?>
        <div class="item active">
			<?php if($wl_theme_options['wall_image_1']!='') {  ?>
          <img src="<?php echo esc_url($wl_theme_options['wall_image_1']); ?>" class="img-responsive" alt="<?php echo esc_attr($wl_theme_options['wall_image_1']); ?>">
          <?php } else { ?>
		  <img src="<?php echo esc_url($wall_image_1); ?>" class="img-responsive" alt="First slide">
		  <?php } ?>		  
        </div>		
        <div class="item">		
			<?php if($wl_theme_options['wall_image_2']!='') {  ?>
          <img src="<?php echo esc_url($wl_theme_options['wall_image_2']); ?>" class="img-responsive" alt="<?php echo esc_attr($wl_theme_options['wall_image_2']); ?>">
          <?php } else { ?>
		  <img src="<?php echo esc_url($wall_image_2); ?>" class="img-responsive" alt="Second slide">
		  <?php } ?>
        </div>
		<div class="item">		
			<?php if($wl_theme_options['wall_image_3']!='') {  ?>
          <img src="<?php echo esc_url($wl_theme_options['wall_image_3']); ?>" class="img-responsive" alt="<?php echo esc_attr($wl_theme_options['wall_image_3']); ?>">
          <?php } else { ?>
		  <img src="<?php echo esc_url($wall_image_3); ?>" class="img-responsive" alt="Second slide">
		  <?php } ?>
        </div>
        <div class="item">		
			<?php if($wl_theme_options['wall_image_4']!='') {  ?>
          <img src="<?php echo esc_url($wl_theme_options['wall_image_4']); ?>" class="img-responsive" alt="<?php echo esc_attr($wl_theme_options['wall_image_4']); ?>">
          <?php } else { ?>
		  <img src="<?php echo esc_url($wall_image_4); ?>" class="img-responsive" alt="Second slide">
		  <?php } ?>
        </div>
        <div class="item">		
			<?php if($wl_theme_options['wall_image_5']!='') {  ?>
          <img src="<?php echo esc_url($wl_theme_options['wall_image_5']); ?>" class="img-responsive" alt="<?php echo esc_attr($wl_theme_options['wall_image_5']); ?>">
          <?php } else { ?>
		  <img src="<?php echo esc_url($wall_image_5); ?>" class="img-responsive" alt="Second slide">
		  <?php } ?>

        </div>
      </div>
      <a class="left carousel-control" href="#actionWall" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#actionWall" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->