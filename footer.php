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
						<a  href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"><li class="facebook" data-placement="top" title="Facebook"></li></a>
					<?php } if($wl_theme_options['twitter_link']!='') { ?>
						<a href="<?php echo esc_url($wl_theme_options['twitter_link']) ; ?>"><li class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"></li></a>			
					<?php } if($wl_theme_options['instagram_link']!='') { ?>
						<a href="<?php echo esc_url($wl_theme_options['instagram_link']) ; ?>"><li class="linkedin" data-toggle="tooltip" data-placement="top" title="instagram"></li></a>
					<?php } if($wl_theme_options['weixin_link']!='') { ?>
						<a id="wechat-logo" href="<?php echo esc_url($wl_theme_options['weixin_link']) ; ?>"><li class="youtube" data-toggle="tooltip" data-placement="top" title="WeChat"></li></a>
	                <?php } if($wl_theme_options['webo_link']!='') { ?>
						<a href="<?php echo esc_url($wl_theme_options['webo_link']) ; ?>"><li class="webo" data-toggle="tooltip" data-placement="top" title="Weibo"></li></a>
					<?php } if($wl_theme_options['renren_link']!='') { ?>
						<a href="<?php echo esc_url($wl_theme_options['renren_link']) ; ?>"><li class="renren" data-toggle="tooltip" data-placement="top" title="Renren"></li></a>
	                <?php } ?>
				</ul>
			</div>
			<img src="<?php echo esc_url($wl_theme_options['wechat_scan_image']); ?>" id="wechat-scan-image" style="position:absolute;display:none;">
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

<script type="text/javascript">
	jQuery('#wechat-logo').hover(function() {
	    jQuery('#wechat-scan-image').show();
	  }, function() {
	    jQuery('#wechat-scan-image').hide();
	  });
</script>
</body>
</html>