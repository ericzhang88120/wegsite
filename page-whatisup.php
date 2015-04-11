<?php $wl_theme_options = weblizar_get_options(); ?>

<?php get_header(); ?>
<?php global $wpdb; 

wp_enqueue_style( 'articleList', get_template_directory_uri() . '/css/articlelist.css');

?>

<div class="container" style="background-image:url(<?php echo esc_url($wl_theme_options['page_what_is_up_background_1']); ?>);background-repeat:no-repeat;height:550px;">
	<div id="pre-events" class="row" style="padding-top:160px;text-align:right">
	<?php 
			$query="SELECT a.gid,a.path,a.title,a.name,b.filename 
					FROM $wpdb->nggallery a inner join $wpdb->nggpictures b on a.gid=b.galleryid 
					WHERE a.galdesc='whatisup'
					order by a.gid desc limit 0,1";
				
			$galleries = $wpdb->get_results($query);

			foreach ($galleries as $gallery) {

			$path=str_replace("\\","/",ltrim($gallery->path,"\\"));
	?>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<a href="#">
				<img src="<?php echo $path.'/'.$gallery->filename; ?>" style="width:100%">
			</a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6" style="overflow:hidden;text-align:left;">
			<a href='<?php echo get_permalink( get_page_by_title( 'preevent' ) );?>&gid=<?php echo $gallery->gid ?>'>
				<?php echo $gallery->title ?>
			</a>
		</div>
	<?php
	}
	?>
	</div>
</div>
<div id="media-release" class="container" style="background-image:url(<?php echo esc_url($wl_theme_options['page_what_is_up_background_2']); ?>);background-repeat:no-repeat;height:685px;padding:160px 30px 0 0;">

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<a class="pull-right" href="<?php echo get_permalink( get_page_by_title( 'articlelist' ) ) ?>#media-release" target="_blank" style="margin:0 0 10px 0;">
				<img src="<?php echo $wl_theme_options["page_what_is_up_more"];?>" alt="more"/>
			</a>
		</div>
	</div>
	
	<div class="row article-list" >
			<?php 
				if ( have_posts()): 
					$args = array( 'post_type' => 'post','posts_per_page' => 3);
					$post_type_data = new WP_Query( $args );
					while ( $post_type_data->have_posts()): $post_type_data->the_post();
					global $post;
				?>

					<div class="single-post">
						<div class="col-lg-3 col-md-3 col-sm-12">			
							<?php echo the_post_thumbnail(array(300, 196));?>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12 post-words-part">		
							<a href="<?php the_permalink() ?>" target="_blank" >
								<?php echo the_title(); ?>
							</a>
							<p class="post-content">
								<?php
									$short_content = preg_replace("'[\n\r\s\t]'","",strip_tags($post->post_content)); 
									$short_content = mb_strimwidth( $short_content, 0, 160, ' ...');
									echo $short_content;
								?>
							</p>
							<p class="pull-right">
								<a href="<?php the_permalink() ?>" target="_blank" >
								<img src="<?php echo $wl_theme_options["page_what_is_up_read"];?>" alt="read"/>
								</a>
							</p>
						</div>
					</div>

				<?php
				endwhile; 
				wp_reset_query();
				endif; 
				?>
			</div>

</div>
<div class="container" id="results" style="background-image:url(<?php echo esc_url($wl_theme_options['page_what_is_up_background_3']); ?>);background-repeat:no-repeat;height:746px;">
	<div class="row" style="padding-top:140px;text-align:right;padding-right:10px">
		<a href="#">
			<img  src="<?php echo esc_url($wl_theme_options['page_what_is_up_year']); ?>" style="border:0px solid;width:48px;height:18px; overflow-y:auto;">
			</img>
		</a>
	</div>
	<div class="row" style="padding-top:5px;padding-right:10px">
		<div class="col-lg-2 col-md-2 col-sm-2">
			<div class="row" style="margin-left:30px;">
				<img src="<?php echo esc_url($wl_theme_options['page_what_is_up_image_5']);?>" onclick="javascript:funbmx();">
			</div>
			<div class="row" style="padding-top:5px; margin-left:30px;">
				<img src="<?php echo esc_url($wl_theme_options['page_what_is_up_image_6']);?>">
			</div>
			<div class="row" style="padding-top:5px; margin-left:30px;">
				<img src="<?php echo esc_url($wl_theme_options['page_what_is_up_image_7']);?>">
			</div>
		</div>
		<div class="col-lg-10 col-md-10 col-sm-10" style="height:500px; overflow-x:hidden; overflow-y:auto;">
			<img id="img" src="<?php echo esc_url($wl_theme_options['page_what_is_up_image_11']);?>">
		</div>
	</div>
</div>
<?php 
echo '<script type="text/javascript">';
echo 'function funbmx(){';

global $wpdb;
$table_name = $wpdb->prefix . "whatisup";
$sql_query = "select * from ".$table_name." where year='2015' and categroy='1'";
$res_query=$wpdb->get_results($sql_query);


echo 'document.getElementById("img").src="'.$res_query[0]->url.'";';
echo '}';
echo '</script>';
?>
<?php get_footer(); ?>
