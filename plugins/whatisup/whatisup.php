<?php
/*
Plugin Name: what is up
Plugin URI: http://cesever.cn/
Description: add the stars
Version: 1.0
Author: clare wang
Author URI: http://cesever.cn/
*/
register_activation_hook(__FILE__,'table_new_whatisup');
register_deactivation_hook(__FILE__,'table_drop_whatisup');

function table_new_whatisup () {
   global $wpdb;

   $table_name = $wpdb->prefix . "whatisup";

      $sql = "CREATE TABLE " . $table_name . " (
	  id mediumint(9) NOT NULL AUTO_INCREMENT,
	  url VARCHAR(80) NOT NULL,
	  year VARCHAR(10) NOT NULL,
	  categroy VARCHAR(10) NOT NULL,
	  txt VARCHAR(255),
	  primary key (id)
	);";
	$wpdb->query($sql);
  
}
function table_drop_whatisup(){
	global $wpdb;
	$table_name = $wpdb->prefix . "whatisup";
	$sql = "drop table ".$table_name;
	$wpdb->query($sql);
}

function wp_what_is_up_options(){
?>

<div class=wrap>
	<form method="post" id="whatisupinfo" name="myform"action="">
		<h2>What's Up</h2>
		<p>URL:<input type="text" id="url" name="url" size="80" value=""></p>
		<p>year:<input type="text" name="year"value=""></p>
		<p>categroy:<input type="text" name="categroy"value=""></p>				
		<h3><?php _e('Description','weblizar'); ?></h3>
		<?php $settings = array( "tinymce" => array( "plugins" => "" ) ); ?> 
		<?php wp_editor( '', 'txt' ,$settings ); ?>
	</form>
	<p><input type="button" name="wp_what_is_up_options" value="Update Options &raquo;" onclick="savevideoinfo()"/></p>
</div>

</script>
<script type="text/javascript">

	function savevideoinfo(){
		tinyMCE.triggerSave();
		jQuery.ajax({
			url:'../wp-content/plugins/whatisup/dbhandler.php',
			type:'post',
			data : jQuery("#whatisupinfo").serialize(),
			success : function(data)
			{ 
				alert("Success");
			}			
		});
	}
</script>
<?php
}
function wp_what_is_up_options_admin(){
	add_options_page('wp_what_is_up', 'what_is_up', 5,  __FILE__, 'wp_what_is_up_options');	
}
add_action("admin_menu","wp_what_is_up_options_admin");
?>
