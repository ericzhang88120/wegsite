<!-- portfolio section -->
<?php $wl_theme_options = weblizar_get_options(); ?>

<div class="container" style="background-image:url(<?php echo esc_url($wl_theme_options['what_is_up_image_1']); ?>);background-repeat:no-repeat;">
	<div class="row" style="padding-top:130px">
		<div id="enigma_portfolio_section" class="enima_photo_gallery">
			<div class="col-lg-7 col-md-7 col-sm-7 pull-left scrollimation fade-right d1"> 
				<div class="row">
					<div style="padding-top:20px" class="col-lg-3 col-md-3 col-sm-3 pull-left scrollimation fade-right d1">
						<a href="#">
							<img src="<?php echo esc_url($wl_theme_options['what_is_up_image_2']); ?>" alt="<?php the_title_attribute(); ?>">
						</a>
					</div>
					<div style="padding-top:12px" class="col-lg-9 col-md-9 col-sm-9 pull-left scrollimation fade-right d1">
						<div>
							<font size="2px" color="#FFFFFF">////////////////////////////////////////////////////////////////////////////////////////////////////////////<br></font>
							<font size="4px" color="#FFFFFF">FINAL MEDAL FRENZY AT KIA WORLD EXTREME GAME<br><br></font>
							<font class="star_desc" size="2px">Shanghai, Saturday 3rd May...Final day of action at the Kia World Extre Game saw the athletes throw down some big moves...</font>
						</div>
					</div>
				</div>
				<div class="row">
					<div style="padding-top:20px" class="col-lg-3 col-md-3 col-sm-3 pull-left scrollimation fade-right d1">
						<a href="#">
							<img src="<?php echo esc_url($wl_theme_options['what_is_up_image_3']); ?>" alt="<?php the_title_attribute(); ?>">
						</a>
					</div>
					<div style="padding-top:12px" class="col-lg-9 col-md-9 col-sm-9 pull-left scrollimation fade-right d1">
						<div>
							<font size="2px" color="#FFFFFF">////////////////////////////////////////////////////////////////////////////////////////////////////////////<br></font>
							<font size="4px" color="#FFFFFF">FINAL MEDAL FRENZY AT KIA WORLD EXTREME GAME<br><br></font>
							<font class="star_desc" size="2px">Shanghai, Saturday 3rd May...Final day of action at the Kia World Extre Game saw the athletes throw down some big moves...</font>
						</div>
					</div>
				</div>
				<div class="row">
					<div style="padding-top:20px" class="col-lg-3 col-md-3 col-sm-3 pull-left scrollimation fade-right d1">
						<a href="#">
							<img src="<?php echo esc_url($wl_theme_options['what_is_up_image_3']); ?>" alt="<?php the_title_attribute(); ?>">
						</a>
					</div>
					<div style="padding-top:12px" class="col-lg-9 col-md-9 col-sm-9 pull-left scrollimation fade-right d1">
						<div>
							<font size="2px" color="#FFFFFF">////////////////////////////////////////////////////////////////////////////////////////////////////////////<br></font>
							<font size="4px" color="#FFFFFF">FINAL MEDAL FRENZY AT KIA WORLD EXTREME GAME<br><br></font>
							<font class="star_desc" size="2px">Shanghai, Saturday 3rd May...Final day of action at the Kia World Extre Game saw the athletes throw down some big moves...</font>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 pull-left scrollimation fade-right d1">
				<div class="img-wrapper">
					<figure class="effect-lily">
						<img src="<?php echo esc_url($wl_theme_options['what_is_up_image_4']); ?>" alt="<?php the_title_attribute(); ?>">
						<div>
							<figcaption>
								<a href="#">
									<img src="<?php echo esc_url($wl_theme_options['what_is_up_image_5']); ?>" style="display:hidden">
								</a>
							</figcaption>
						</div>
					</figure>
				</div>
			</div>
		</div>
	</div>
</div>



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
			<div class="col-lg-5 col-md-5 col-sm-5 pull-left scrollimation fade-right d1"> 
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 pull-left scrollimation fade-right d1">
				<br>
				<br>
				<br>
				<div>
					<textarea rows="2" cols="50" style="opacity: 0.8"></textarea>
				</div>
			</div>
				
		</div>
	</div>
	
	<div class="row" style="padding-top:10px">
		<div id="enigma_portfolio_section" class="enima_photo_gallery">	
			<div class="col-lg-5 col-md-5 col-sm-5 pull-left scrollimation fade-right d1"> 
				<div style="text-align:right">
					<font class="star_desc" size="3px">China<br></font>
					<font class="star_desc" size="3px">Michael Wang<br></font>
					<font class="star_desc" size="3px">Email: yc.wang@wsgworld.com</font>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 pull-left scrollimation fade-right d1">
				<div style="margin-top:auto; margin-bottom:auto">
					<textarea rows="2" cols="50" style="opacity:0.8;"></textarea>
				</div>
			</div>
				
		</div>
	</div>
	
	<div class="row" style="padding-top:10px">
		<div id="enigma_portfolio_section" class="enima_photo_gallery">	
			<div class="col-lg-5 col-md-5 col-sm-5 pull-left scrollimation fade-right d1"> 
				<div style="text-align:right">
					<br>
					<font class="star_desc" size="3px">International<br></font>
					<font class="star_desc" size="3px">Adeline See<br></font>
					<font class="star_desc" size="3px">Email: a.see@wsgworld.com</font>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 pull-left scrollimation fade-right d1">
				<div>
					<textarea rows="5" cols="70" style="opacity: 0.8"></textarea>
				</div>
			</div>
				
		</div>
	</div>
	
	<div class="row" >
		<div id="enigma_portfolio_section" class="enima_photo_gallery">	
			<div class="col-lg-5 col-md-5 col-sm-5 pull-left scrollimation fade-right d1"> 
				<div style="text-align:right">
					
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 pull-left scrollimation fade-right d1">
				<div>
					<br>
					<button style="border:1px #ff0000 solid;width:100px;height:50px;display:block;background-image:url(<?php echo esc_url($wl_theme_options['get_in_touch_image_2']); ?>)" />
				</div>
			</div>
				
		</div>
	</div>
	
	<br>
		
</div>

<div class="container">
	<div class="row" style="overflow:hidden">
		<div id="enigma_portfolio_section" class="enima_photo_gallery">
				<img src="<?php echo esc_url($wl_theme_options['sponsor_image_1']); ?>" alt="<?php the_title_attribute(); ?>">
			</div>
		</div>				
</div>


<!-- /portfolio section -->
