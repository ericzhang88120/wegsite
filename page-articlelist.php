<?php
$wl_theme_options = weblizar_get_options();

wp_enqueue_style( 'articleList', get_template_directory_uri() . '/css/articlelist.css');
get_header(); 

$order_by = 'date'; 

$order = 'DESC';

$posts_per_page = 10;

/**
 * 只显示或不显示某些目录下的文章,目录ID用逗号分隔，排除目录前面加-
 * 例如排除目录29和30下的文章, $cat = '-29,-30';
 * 只显示目录29和30下的文章, $cat = '29, 30';
 */
$cat = '';

global $post;
$post_title = $post->post_title;
if( $show_content || $paged == 1  ) $post_content = apply_filters('the_content', $post->post_content);

/** 当前显示的是第几页 */
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$post_list = new WP_Query(
	"posts_per_page=" . $posts_per_page .
	"&orderby=" . $order_by .
	"&order=" . $order .
	"&cat=" . $cat .
	"&paged=" . $paged
);

?>
		<div class="container" style="background: #272727;min-height:600px">
			<div class="row" style="" id="return-link">
				<div class="col-lg-12 col-md-12 col-sm-12">	
					<a href='<?php echo get_permalink( get_page_by_title( 'whatisup' ) );?>#media-release'>&lt;&nbsp; return</a>
				</div>
			</div>

			<div class="row article-list" >
			<?php if ( $post_list->have_posts() ) : ?>
				
				<?php while ( $post_list->have_posts() ) : $post_list->the_post(); ?>

					<div class="single-post">
						<div class="col-lg-3 col-md-3 col-sm-12">			
							<?php echo the_post_thumbnail(array(300, 196));?>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12 post-words-part">		
							<a href="<?php the_permalink() ?>" target="_blank" >
								<?php the_title(); ?>
							</a>
							<p class="post-content">
								<?php
									$short_content =  preg_replace("'[\n\r\s\t]'","",strip_tags( get_the_content() )); 
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

				<?php endwhile; ?>
			</div>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">			
					<?php if ( function_exists('wp_pagenavi') ) wp_pagenavi( array('query' => $post_list) );  ?>
					<?php endif; ?>
				</div>
			</div>
				
		</div><!-- #content -->

<?php get_footer(); ?>