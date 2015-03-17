<!-- portfolio section -->
<?php $wl_theme_options = weblizar_get_options(); ?>
<div class="enigma_project_section">

<div class="container" style="background-image:url(<?php echo esc_url($wl_theme_options['hall_of_fame_image_1']); ?>)">
		<div class="row" style="padding-top:130px">
			<div id="enigma_portfolio_section" class="enima_photo_gallery">
				<?php for($i=1 ; $i<=2; $i++) { ?>
				<div class="col-lg-6 col-md-6 col-sm-12 pull-left scrollimation fade-right d1"> 
					<div class="img-wrapper">
					<?php if($wl_theme_options['port_'.$i.'_img'] !='') { ?>
						<figure class="effect-lily">
							<img src="<?php echo esc_url($wl_theme_options['port_'.$i.'_img']); ?>" alt="<?php the_title_attribute(); ?>">
							<div>
								<figcaption>
									<a href="<?php echo esc_url($wl_theme_options['port_'.$i.'_link']); ?>">
										<img src="<?php echo esc_url($wl_theme_options['port_'.$i.'_img_shade']); ?>" style="display:hidden">
									</a>
								</figcaption>
							</div>
						</figure>
					<?php } ?>
					</div>
					<div class="enigma_portfolio_shadow"></div>
				</div>
				<?php } ?>
			</div>
		</div>
						
</div>

<div class="container" style="background-image:url(<?php echo esc_url($wl_theme_options['get_in_touch_image_1']); ?>)">
		<div class="row" style="padding-top:130px">
			<div id="enigma_portfolio_section" class="enima_photo_gallery">
				
					<div class="col-lg-2 col-md-2 col-sm-2 pull-left scrollimation fade-right d1"> 
						<div>
							<input style="opacity: 0.8; width:400px;height:50px;display:block"/>
						</div>
						<br>
						<input style="opacity: 0.8; width:400px;height:50px;display:block"/>
						<br>
						<input style="opacity: 0.8; width:500px;height:150px;display:block"/>
						<br>
						<button style="width:100px;height:50px;display:block;background-image:url(<?php echo esc_url($wl_theme_options['get_in_touch_image_2']); ?>)" />
						<br>
	
					</div>
			</div>
		</div>
						
</div>

<div class="container" style="opacity:0.8;background-image:url(<?php echo esc_url($wl_theme_options['sponsor_image_1']); ?>)">
	<div class="row" style="padding-top:130px">
		<div id="enigma_portfolio_section" class="enima_photo_gallery">
				<?php for($i=1 ; $i<=9; $i++) { ?>
					<br>
				<?php } ?>
			</div>
		</div>				
</div>


</div>
<!-- /portfolio section -->