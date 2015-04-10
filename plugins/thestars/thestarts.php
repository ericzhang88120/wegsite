<?php
/*
Plugin Name: the stars
Plugin URI: http://cesever.cn/
Description: add the stars
Version: 1.0
Author: clare wang
Author URI: http://cesever.cn/
*/
register_activation_hook(__FILE__,'table_new_star');
register_deactivation_hook(__FILE__,'table_drop_star');

function table_new_star () {
   global $wpdb;

   $table_name = $wpdb->prefix . "thestars";

      $sql = "CREATE TABLE " . $table_name . " (
	  id mediumint(9) NOT NULL AUTO_INCREMENT,
	  url VARCHAR(80) NOT NULL,
	  thumbnail_url VARCHAR(80) NOT NULL,
	  categroy VARCHAR(20) NOT NULL,
	  name VARCHAR(20) NOT NULL unique,
	  txt TEXT,
	  primary key (id)
	);";
	$wpdb->query($sql);
  
}
function table_drop_star(){
	global $wpdb;
	$table_name = $wpdb->prefix . "thestars";
	$sql = "drop table ".$table_name;
	$wpdb->query($sql);
}

function wp_the_starts_options(){
?>

<div class=wrap>
	<form method="post" id="starinfo" name="myform"action="">
		<h2>The Star</h2>
		<p>NAME:<input type="text" id="name" name="name" size="80" value=""></p>
		<span><p>data name unique</p></span>
		<p>URL:<input type="text" id="url" name="url" size="80" value=""></p>
		<p>Thumbnail URL:<input type="text" id="thumbnail_url" name="thumbnail_url" size="80" value=""></p>
		<span><p>If your file named a.png the thumbnail_url is a-160x187.png</p></span>
		<p>Category:<input type="text" name="categroy"value=""></p>	
		<span><p>skateboard,bmx,speedclimbing,motocross,jamdemo</p></span>	
		<h3><?php _e('Description','weblizar'); ?></h3>
		<?php $settings = array( "tinymce" => array( "plugins" => "" ) ); ?> 
		<?php wp_editor( '', 'star_desc' ,$settings ); ?>
	</form>
	<p><input type="button" name="wp_the_starts_options" value="Update Options &raquo;" onclick="savevideoinfo()"/></p>
</div>

</script>
<script type="text/javascript">

	function savevideoinfo(){
		tinyMCE.triggerSave();
		jQuery.ajax({
			url:'../wp-content/plugins/thestars/dbhandler.php',
			type:'post',
			data : jQuery("#starinfo").serialize(),
			success : function(data)
			{ 
				alert("Success");
			}			
		});
	}
</script>
<?php
}
function wp_the_stars_options_admin(){
	add_options_page('wp_the_stars', 'the_stars', 5,  __FILE__, 'wp_the_starts_options');	
}
add_action("admin_menu","wp_the_stars_options_admin");
?>
