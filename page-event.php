<?php $wl_theme_options = weblizar_get_options(); ?>

<?php get_header(); ?>

<style>
.schedule-date{
	float: left;
	width: 20%;
}
.words-desc{
color: white;
padding-top: 15px;
overflow-x:hidden;
overflow-y:auto;
}
</style>
<div class="container">
	<div class="row" id="event-info" style="background: #272727 url(wp-content/themes/wegsite/images/event/bg1.jpg) no-repeat; height:660px;padding:140px 0 0 10px;">
		<div class="col-lg-8 col-md-8 col-sm-8" style="background: #272727 url(wp-content/themes/wegsite/images/event/image-bg.png);padding:5px;">
			<?php get_template_part('home','slideshow-event'); ?>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-8 words-desc" style="height:500px;">
			<?php echo $wl_theme_options["event_info_text"]; ?>
		</div>
	</div>
	<div class="row" id="schedule">
		<div class="col-lg-12 col-md-12 col-sm-12" style="background: #272727 url(wp-content/themes/wegsite/images/event/bg2.jpg) no-repeat; height:600px;padding:270px 8% 0;">
			<div class="schedule-date">
				<a href="#">
				<img src="wp-content/themes/wegsite/images/event/1.png" >
				</a>
			</div>
			<div class="schedule-date">
				<a href="#">
				<img src="wp-content/themes/wegsite/images/event/2.png" >
				</a>
			</div>
			<div class="schedule-date">
				<a href="#">
				<img src="wp-content/themes/wegsite/images/event/3.png">
				</a>
			</div>
			<div class="schedule-date">
				<a href="#">
				<img src="wp-content/themes/wegsite/images/event/4.png" >
				</a>
			</div>
			<div class="schedule-date">
				<a href="#">
				<img src="wp-content/themes/wegsite/images/event/5.png">
				</a>
			</div>
		</div>
	</div>
	<div class="row" id="broadcast" style="background: #272727 url(wp-content/themes/wegsite/images/event/bg3.png) no-repeat; height:570px;padding:140px 2% 0;">
		<div class="col-lg-6 col-md-6 col-sm-12 scrollimation d1"> 
				<div class="img-wrapper" style="margin:0">
					<figure class="effect-lily">
						<img src="<?php echo esc_url($wl_theme_options['event_image_6']); ?>" alt="<?php the_title_attribute(); ?>">
						<div>
							<figcaption>
								<a href="#">
									<img src="<?php echo esc_url($wl_theme_options['event_broadcast_mark']); ?>" style="display:hidden">
								</a>
							</figcaption>
						</div>
					</figure>
				</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 words-desc" style="height:400px;">
			<?php echo $wl_theme_options["event_broadcast_text"]; ?>
		</div>
	</div>
	<div class="row" id="ticketing">
		<div class="col-lg-12 col-md-12 col-sm-12" style="background: #272727 url(wp-content/themes/wegsite/images/event/bg4.png) no-repeat; height:720px;padding:150px 5% 0;">
				<img src="wp-content/themes/wegsite/images/event/table.png" style="width:100%">
		</div>
	</div>
	<div class="row" id="sponsor">
		<div class="col-lg-12 col-md-12 col-sm-12" style="background: #272727 url(wp-content/themes/wegsite/images/event/bg5.png) no-repeat; height:800px;padding:150px 8% 0;">
				<img src="wp-content/themes/wegsite/images/event/sponsor.png" style="width:100%">
				<img src="wp-content/themes/wegsite/images/event/sponsor-words.png" style="margin-top:20px;width:100%">
		</div>
	</div>
</div>
<?php get_footer(); ?>