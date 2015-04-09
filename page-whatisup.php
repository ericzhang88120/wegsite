<?php $wl_theme_options = weblizar_get_options(); ?>

<?php get_header(); ?>
<?php global $wpdb; ?>

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
<div id="media-release" class="container" style="background-image:url(<?php echo esc_url($wl_theme_options['page_what_is_up_background_2']); ?>);background-repeat:no-repeat;height:685px;">

	<div class="row" style="padding-top:140px;text-align:right">
		<div class="col-lg-1 col-md-1 col-sm-1">
		</div>
		<div class="col-lg-10 col-md-10 col-sm-10">
			<a href="#">
				<button style="border:0px solid;width:100px;height:30px;background-image:url(<?php echo esc_url($wl_theme_options['page_what_is_up_more']); ?>)">
				</button>
			</a>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1">
		</div>
	</div>
	
	<div class="row" style="padding-top:0px">
		<div class="col-lg-1 col-md-1 col-sm-1">
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2" style="overflow:hidden">
			<img src="<?php echo esc_url($wl_theme_options['page_what_is_up_image_2']); ?>" style="padding-top:10px">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8">
			<div class="row" style="overflow:hidden">
				<img src="<?php echo esc_url($wl_theme_options['page_what_is_up_line']); ?>">
			</div>
			<div class="row" style="overflow:hidden">
				<font class="star_desc" size="5px"><b>NEW SPORTS, MULTIPLE VENUES,WORLD-CLASS ATHLETES; BMX AND SKATEBOARD LEGENDS DENNIS...<br></b></font>
				<font size="3px" color="#d0d0d0">Shanghai to Host the World’s Best Action Sports Athletes at the Kia World Extreme Games Including Mat Hoffman...</font>
			</div>
			<div class="row" style="overflow:hidden;text-align:right">
				<a href='<?php echo get_permalink( get_page_by_title( 'media1' ) );?>'>
					<button style="border:0px solid;width:100px;height:30px;background-image:url(<?php echo esc_url($wl_theme_options['page_what_is_up_read']); ?>)">
					</button>
				</a>
			</div>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1">
		</div>
	</div>
	<div class="row" style="padding-top:10px">
		<div class="col-lg-1 col-md-1 col-sm-1">
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2" style="overflow:hidden">
			<img src="<?php echo esc_url($wl_theme_options['page_what_is_up_image_3']); ?>" style="padding-top:10px">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8">
			<div class="row" style="overflow:hidden">
				<img src="<?php echo esc_url($wl_theme_options['page_what_is_up_line']); ?>">
			</div>
			<div class="row" style="overflow:hidden">
				<font class="star_desc" size="5px"><b>PRESTIGIOUS GLOBAL ACTION SPORTS COMPETITION STAGED IN SHANGHAI FOR THE NINTH CONSECUTIVE YEAR...<br></b></font>
				<font size="3px" color="#d0d0d0">New Sports, Multiple Venues and World-Class Athletes; Mat Hoffman, Trey Wood, Jimmy Wilkins and Filipe Gustavo..</font>
			</div>
			<div class="row" style="overflow:hidden;text-align:right">
				<a href='<?php echo get_permalink( get_page_by_title( 'media2' ) );?>'>
					<button style="border:0px solid;width:100px;height:30px;background-image:url(<?php echo esc_url($wl_theme_options['page_what_is_up_read']); ?>)">
					</button>
				</a>
			</div>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1">
		</div>
	</div>
	<div class="row" style="padding-top:10px">
		<div class="col-lg-1 col-md-1 col-sm-1">
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2" style="overflow:hidden">
			<img src="<?php echo esc_url($wl_theme_options['page_what_is_up_image_4']); ?>" style="padding-top:10px">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8">
			<div class="row" style="overflow:hidden">
				<img src="<?php echo esc_url($wl_theme_options['page_what_is_up_line']); ?>">
			</div>
			<div class="row" style="overflow:hidden">
				<font class="star_desc" size="4px"><b>HAND IN THERE...<br></b></font>
			</div>
			<div class="row" style="overflow:hidden;text-align:right">
			</div>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1">
		</div>
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
