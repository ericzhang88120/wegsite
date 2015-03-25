<?php get_header(); ?>
<style>
.schedule-date{
	float: left;
	width: 20%;
}
</style>
<div class="container">
	<div class="row" id="event-info" style="background: #272727 url(wp-content/themes/wegsite/images/event/bg1.jpg) no-repeat; height:660px;padding:140px 0 0;">
		<div class="col-lg-8 col-md-8 col-sm-8" >
			<?php get_template_part('home','slideshow-event'); ?>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-8">
			<?php echo $wl_theme_options["event_info_text"]; ?>
		</div>
	</div>
	<div class="row" id="schedule">
		<div class="col-lg-12 col-md-12 col-sm-12" style="background: #272727 url(wp-content/themes/wegsite/images/event/bg2.jpg) no-repeat; height:600px;">
			
			<div class="row" style="padding:270px 0 0 0;margin:0 auto;width:90%;">
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
	</div>
	<div class="row" id="broadcast">
		<div class="col-lg-12 col-md-12 col-sm-12" style="background: #272727 url(wp-content/themes/wegsite/images/event/bg3.png) no-repeat; height:570px;">
			<div class="row" style="padding:150px 0 0 0;margin:0 auto;width:95%;">
				
			</div>
			
		</div>
	</div>
	<div class="row" id="ticketing">
		<div class="col-lg-12 col-md-12 col-sm-12" style="background: #272727 url(wp-content/themes/wegsite/images/event/bg4.png) no-repeat; height:720px;">
			<div class="row" style="padding:150px 0 0 0;margin:0 auto;width:95%;">
				<img src="wp-content/themes/wegsite/images/event/table.png" style="width:100%">
			</div>
			
		</div>
	</div>
	<div class="row" id="sponsor">
		<div class="col-lg-12 col-md-12 col-sm-12" style="background: #272727 url(wp-content/themes/wegsite/images/event/bg5.png) no-repeat; height:800px;">
			<div class="row" style="padding:150px 0 0 0;margin:0 auto;width:85%;">
				<img src="wp-content/themes/wegsite/images/event/sponsor.png" style="width:100%">
				<img src="wp-content/themes/wegsite/images/event/sponsor-words.png" style="margin-top:20px;width:100%">
			</div>
			
		</div>
	</div>
</div>
<?php get_footer(); ?>