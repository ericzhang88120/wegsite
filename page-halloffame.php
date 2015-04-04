<?php $wl_theme_options = weblizar_get_options(); ?>
<?php get_header(); ?>
<?php global $wpdb; ?>

<style>
#photo-gallery{

}
#photo-gallery ul li{
	float: left;
	list-style: none;
	margin: 0 30px 0 0;
}
#photo-gallery ul li a{
	display: inline-block;
	color: white;
	text-transform: uppercase;
	font-weight: bold;
}
#photos ul,#photo-gallery ul{
	margin:0;
	padding: 0;
}

#photos li{
	width: 25%;
	float: left;
	list-style: none;
}
#photos li img{
width: 290px;
height:250px;

}
</style>

<div class="container">
	<div class="row" id="event-info" style="background: #272727 url(wp-content/themes/wegsite/images/halloffame/photo-bg.png) no-repeat; height:660px;padding:140px 0 0 0;">
		<div id="photo-gallery">
			<div class="col-lg-10 col-md-10 col-sm-10">
				<ul>
				<li>
					<a href="#" data-gallery-name="all">All</a>
				</li>
				<?php 
				
				$galleries = $wpdb->get_results("SELECT * FROM $wpdb->nggallery");

				foreach ($galleries as $gallery) {
				?>
					<li>
						<a href="#" data-gallery-name="<?php echo $gallery->name ?>"><?php echo $gallery->name ?></a>
					</li>
				<?php
				}
				?>
				</ul>	
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2">
				<select class="pull-right">
					<?PHP 
						$query="SELECT distinct b.name 
								FROM $wpdb->term_taxonomy a 
								INNER JOIN $wpdb->terms b ON a.term_id=b.term_id 
								WHERE a.taxonomy='ngg_tag'";
						$years = $wpdb->get_results($query);

						foreach ($years as $year) {
					?>
						<option value="<?php echo $year->name ?>"><?php echo $year->name ?></option>
					<?php
					}
					?>
				</select>
			</div>
		</div>
		<div id="photos">
			<ul>
				<?php 

				$query="SELECT b.path,a.filename,a.pid FROM WP_NGG_PICTURES a
						INNER JOIN WP_NGG_GALLERY b ON a.galleryid=b.gid
						LIMIT 0,7";

				$photos = $wpdb->get_results($query);

				foreach ($photos as $photo) {
					$rowIndex++
				?>
					<li>
						<a href="#" data-image-id="<?php echo $photo->path ?>">
							<img src="<?php echo str_replace("\\","/",ltrim($photo->path,"\\"))."/".$photo->filename ?>"/>
						</a>
					</li>
				<?php
				}

				$query="SELECT COUNT(*) FROM WP_NGG_PICTURES a
						INNER JOIN WP_NGG_GALLERY b ON a.galleryid=b.gid"; 
				$image_count = $wpdb->get_var($query);
				if ($image_count>7) {
				?>
					<li>
						<a href="#" data-image-id="next">
							<img src="wp-content/themes/wegsite/images/halloffame/p-next.png"/>
						</a>
					</li>
				<?php
				}
				?>


			</ul>
		</div>
	</div>

	<div class="row" id="event-info" style="background: #272727 url(wp-content/themes/wegsite/images/halloffame/video-bg.png) no-repeat; height:660px;padding:140px 0 0 10px;">
		<div class="col-lg-12 col-md-12 col-sm-12">
		</div>
	</div>
</div>


<?php get_footer(); ?>