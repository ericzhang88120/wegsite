<div id="post-<?php the_ID(); ?>" <?php post_class('enigma_blog_full'); ?>>

	<div class="post-content-wrap">
		<?php if(has_post_thumbnail()): 
		$img = array('class' => 'enigma_img_responsive'); ?>
		<div class="enigma_blog_thumb_wrapper_showcase">						

			<?php if (is_home()) : ?>
			<div class="enigma_blog_thumb_wrapper_showcase_overlay">
			<div class="enigma_blog_thumb_wrapper_showcase_overlay_inner ">
				<div class="enigma_blog_thumb_wrapper_showcase_icons">
					<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
				</div>
			</div>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<div class="enigma_fuul_blog_detail_padding">
		<h2><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><?php the_title(); ?></a></h2>
		<div class="row">
		<div class="col-md-6 col-sm-3">
		<?php if(get_the_tag_list() != '') { ?>
		<p class="enigma_tags"><?php the_tags( __('Tags : ','weblizar'), '', '<br />'); ?></p>
		<?php } ?>
		</div>

		</div>
		<?php the_content( __( 'Read More' , 'weblizar' ) ); 
		$defaults = array(
              'before'           => '<div class="enigma_blog_pagination"><div class="enigma_blog_pagi">' . __( 'Pages:','weblizar'  ),
              'after'            => '</div></div>',
	          'link_before'      => '',
	          'link_after'       => '',
	          'next_or_number'   => 'number',
	          'separator'        => ' ',
	          'nextpagelink'     => __( 'Next page'  ,'weblizar' ),
	          'previouspagelink' => __( 'Previous page' ,'weblizar'),
	          'pagelink'         => '%',
	          'echo'             => 1
	          );
	          wp_link_pages( $defaults ); ?>
		</div>
	</div>
</div>	
<div class="push-right">
<hr class="blog-sep header-sep">
</div>