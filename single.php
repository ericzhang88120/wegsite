<?php get_header(); ?>
<div class="container">	
	<div class="col-md-8">	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
		<?php get_template_part('post','content'); 
		endwhile; 
		else : 
		get_template_part('nocontent');
		endif;?>
	</div>
</div><!-- container div end here -->
<?php get_footer(); ?>