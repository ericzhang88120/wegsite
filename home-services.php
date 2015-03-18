<!-- service section -->
<?php $wl_theme_options = weblizar_get_options(); ?>
<!--
<div class="enigma_service">
<?php if($wl_theme_options['home_service_heading'] !='') { ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="enigma_heading_title">
				<h3><?php echo esc_attr($wl_theme_options['home_service_heading']); ?></h3>		
			</div>
		</div>
	</div>
</div>	
<?php } ?>
<div class="container">
		<div class="row isotope" id="isotope-service-container">		
			<?php for($i=1; $i<4; $i++ ) { ?>
			<div class=" col-md-4 service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<?php if($wl_theme_options['service_'.$i.'_icons'] !='') { ?><div class="enigma_service_iocn pull-left"><i class="<?php echo esc_attr($wl_theme_options['service_'.$i.'_icons']); ?>"></i></div><?php } ?> 
					<div class="enigma_service_detail media-body">
						<?php if($wl_theme_options['service_'.$i.'_title'] !='') { ?><h3><a href="<?php echo esc_url($wl_theme_options['service_'.$i.'_link']); ?>"><?php echo esc_attr($wl_theme_options['service_'.$i.'_title']); ?></a></h3><?php } ?>
						<?php if($wl_theme_options['service_'.$i.'_text'] !='') { ?><p><?php echo apply_filters('the_content', $wl_theme_options['service_'.$i.'_text'], true); ?></p><?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>	
		</div>
	</div>
</div>	 
-->
<div class="stars">
	<div class="container star">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 pull-left scrollimation fade-left d1">
				<div class="img-wrapper-star starpic">
					<figure class="effect-apollo figurestar">
						<img  src="<?php echo $wl_theme_options['pic_image_1']; ?>">
						<figcaption class="figurestar2">
							<a href="#">View more</a>
						</figcaption>
					</figure>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 pull-left scrollimation fade-left d1 ">
				<div class="img-wrapper-star starpic">
					<figure class="effect-apollo figurestar">
						<img  src="<?php echo $wl_theme_options['pic_image_2']; ?>">
						<figcaption class="figurestar2">
							<a href="#">View more</a>
						</figcaption>
					</figure>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 pull-left scrollimation fade-left d1">
				<div class="img-wrapper-star starpic ">
					<figure class="effect-apollo figurestar">
						<img  src="<?php echo $wl_theme_options['pic_image_3']; ?>">
						<figcaption class="figurestar2">
							<a href="#">View more</a>
						</figcaption>
					</figure>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 pull-left scrollimation fade-left d1">
				<div class="img-wrapper-star starpic">
					<figure class="effect-apollo figurestar">
						<img  src="<?php echo $wl_theme_options['pic_image_4']; ?>">
						<figcaption class="figurestar2">
							<a href="#">View more</a>
						</figcaption>
					</figure>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-11 col-md-11 col-sm-20">
				<p class="star_desc">The Kia World Extreme Games is the most prestigious multi-event, action sports competition worldwide, and will be staged in Shanghai, China for the ninth time since 2007. Nearly 200 best action sport athletes from almost 30 countries and regions will compete in BMX freestyle, skateboarding and speed climbing competitions.  Considered the pinnacle of global action sports competition, the Kia World Extreme Games in Shanghai will be televised live across Asia, and delayed broadcast worldwide. More than 1k hours have been lived all over the world for Kia World Extreme Games 2014.</p>
			</div>

		</div>
	</div>
</div>

<!-- /Service section -->