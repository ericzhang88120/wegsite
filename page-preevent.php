<?php $wl_theme_options = weblizar_get_options(); ?>
<?php get_header(); ?>
<?php global $wpdb; ?>

<div class="container" style="background-color: black;padding:0 10%">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12" style="border-bottom:1px solid #EA1952;">
		<?php 
				$gid=$_GET['gid'];
						
				$gallery = $wpdb->get_results("SELECT title,path FROM $wpdb->nggallery where gid=$gid");
		?>
		<h1 style="color:white;"><?php echo $gallery[0]->title?></h1>
		</div>
	</div>
<div class="row"> 
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="galleria" style="width:100%;height:500px;">
		<?php 

			$pictures = $wpdb->get_results("SELECT * FROM $wpdb->nggpictures where galleryid=$gid");

			foreach ($pictures as $picture) {
			$path=str_replace("\\","/",ltrim($gallery[0]->path,"\\"));
		?>
	    	<a href="<?php echo $path.'/'.$picture->filename; ?>">
	    	<img src="<?php echo $path."/thumbs/thumbs_".$picture->filename?>" data-title="My title" data-description="My description">
	    	</a>

	    <?php
		}
		?>
		</div>
	</div>
</div>

	<script type="text/javascript">
	jQuery(document).ready(function() {
		Galleria.loadTheme('wp-content/themes/wegsite/galleria/galleria.classic.min.js');
		Galleria.run('.galleria');
	});
	</script>
<?php get_footer(); ?>