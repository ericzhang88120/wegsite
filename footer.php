<!-- enigma Callout Section -->
<?php $wl_theme_options = weblizar_get_options(); ?>
<!-- Footer Widget Secton -->
<div class="enigma_footer_area">
		<div class="container">
			<div class="col-md-12">
			<span><p class="enigma_footer_copyright_info wl_rtl" ></span>
			<?php if($wl_theme_options['footer_customizations']) { echo esc_attr($wl_theme_options['footer_customizations']); }?>
			</p>
			<?php if($wl_theme_options['footer_section_social_media_enbled'] == 'on') { ?>
			<span><div class="enigma_footer_social_div">
				<ul class="social">
					<?php if($wl_theme_options['fb_link']!='') { ?>
					   <li class="facebook" data-placement="top" title="Facebook"><a  href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"></a></li>
					<?php } if($wl_theme_options['twitter_link']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="<?php echo esc_url($wl_theme_options['twitter_link']) ; ?>"></a></li>				
					<?php } if($wl_theme_options['instagram_link']!='') { ?>
					<li class="linkedin" data-toggle="tooltip" data-placement="top" title="instagram"><a href="<?php echo esc_url($wl_theme_options['instagram_link']) ; ?>"></a></li>
					<?php } if($wl_theme_options['weixin_link']!='') { ?>
					<li class="youtube" data-toggle="tooltip" data-placement="top" title="WeChat"><a href="<?php echo esc_url($wl_theme_options['weixin_link']) ; ?>"></a></li>
	                <?php } if($wl_theme_options['webo_link']!='') { ?>
					<li class="webo" data-toggle="tooltip" data-placement="top" title="Weibo"><a href="<?php echo esc_url($wl_theme_options['webo_link']) ; ?>"></a></li>
	                <?php } ?>
				</ul>
			</div>
			</span>
			<?php } ?>			
			</div>		
		</div>		
</div>	
<!-- /Footer Widget Secton -->
</div>
<a href="#" title="Go Top" class="enigma_scrollup" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>
</body>
</html>