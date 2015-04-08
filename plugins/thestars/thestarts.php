<?php
/*
Plugin Name: the stars
Plugin URI: http://cesever.cn/
Description: add the stars
Version: 1.0
Author: clare wang
Author URI: http://cesever.cn/
*/
register_activation_hook(__FILE__,'table_new');
register_deactivation_hook(__FILE__,'table_drop');

function table_new () {
   global $wpdb;

   $table_name = $wpdb->prefix . "thestars";

      $sql = "CREATE TABLE " . $table_name . " (
	  id mediumint(9) NOT NULL AUTO_INCREMENT,
	  url VARCHAR(80) NOT NULL,
	  categroy VARCHAR(10) NOT NULL,
	  txt TEXT,
	  primary key (id)
	);";
	$wpdb->query($sql);
  
}
function table_drop(){
	global $wpdb;
	$table_name = $wpdb->prefix . "thestars";
	$sql = "drop table ".$table_name;
	$wpdb->query($sql);
}

function wp_the_starts_options(){
?>
<script type="text/javascript" src="../wp-content/plugins/thestars/plupload.full.min.js"></script>

<div class=wrap>
	<form method="post" id="starinfo" name="myform"action="">
		<h2>The Star</h2>
		<p>URL:<input type="text" name="url" size="80" value="<?php echo  (home_url()."/wp-content/plugins/uploads/");?>"></p>
		<p>Category:<input type="text" name="categroy"value=""></p>
			
			<h3><?php _e('Description','weblizar'); ?></h3>
			<?php $settings = array( "media_buttons" => false,"quicktags" => false, "tinymce" => array( "plugins" => "wordpress" ) ); ?>
			<textarea name="txt" id="txt" rows="10" cols="30"></textarea>
		<p><input type="button" name="wp_the_starts_options" value="Update Options &raquo;" onclick="savevideoinfo()"/></p>
	</form>
	<div id="container">
		<h2>Upload img</h2>
	    <a id="pickfiles" href="javascript:;">[Select files]</a> 
	    <a id="uploadfiles" href="javascript:;">[Upload files]</a>
	</div>
	<div id="filelist"></div>
</div>
<script type="text/javascript">
var uploader = new plupload.Uploader({
	runtimes : 'html5,flash,silverlight,html4',
	browse_button : 'pickfiles', // you can pass in id...
	container: document.getElementById('container'), // ... or DOM Element itself
	url : '../wp-content/plugins/thestars/upload.php',
	flash_swf_url : '../js/Moxie.swf',
	silverlight_xap_url : '../js/Moxie.xap',
	
	filters : {
		max_file_size : '10mb',
		mime_types: [
			{title : "Image files", extensions : "jpg,gif,png"},
			{title : "Zip files", extensions : "zip"}
		]
	},

	init: {
		PostInit: function() {
			document.getElementById('filelist').innerHTML = '';

			document.getElementById('uploadfiles').onclick = function() {
				uploader.start();
				return false;
			};
		},

		FilesAdded: function(up, files) {
			if(files.length !=1){
				alert("Please choose one file");
				return;
			}
			plupload.each(files, function(file) {
				myform.url.value = myform.url.value+file.name;
				document.getElementById('filelist').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
			});
		},

		UploadProgress: function(up, file) {
			document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";

		},

		Error: function(up, err) {
			document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
		}

	}
});
uploader.init();

</script>
<script type="text/javascript">

	function savevideoinfo(){
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
