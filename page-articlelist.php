<?php get_header(); ?>
<style type="text/css">
	#content p{
		color: #ffffff;
	}
</style>
<div class="container" style="background: #272727;height:900px">
	<div class="row">
		<div class="col-sm-12">
			<div class="enigma_heading_title">
				<h3 style="color: #ffffff;">Article List</h3>		
			</div>
		</div>
	</div>
	<?php 
	if ( have_posts()): 
		$args = array( 'post_type' => 'post','posts_per_page' => 10);
		$post_type_data = new WP_Query( $args );
		while ( $post_type_data->have_posts()): $post_type_data->the_post();
		global $post;
	?>
	<div class="row post">
		<div class="col-lg-1">
		</div>
		<div class="col-lg-3">
			<?php echo the_post_thumbnail('thumbnail');?>
		</div>
		<div class="col-lg-8">
			<div class="row" >
				<h2 style="color: #ffffff;"><?php echo the_title();?></h2>
			</div>
			<div class="row" id="content">
				<p><?php echo mb_strimwidth(strip_tags(apply_filters("the_content",$post->post_content)),0,150,'<a href="'.get_permalink().'">......[detail]</a>');?></p>
			</div>
		</div>
	</div>


	<?php
	endwhile; 
	wp_reset_query();
	endif; 
	?>
</div>

<?php get_footer(); ?>