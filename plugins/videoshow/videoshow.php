<?php
/*
Plugin Name: video show
Plugin URI: http://cesever.cn/
Description: add video link
Version: 1.0
Author: eric zhang
Author URI: http://cesever.cn/
*/
register_activation_hook(__FILE__,'table_new');
register_deactivation_hook(__FILE__,'table_drop');

function table_new () {
   global $wpdb;

   $table_name = $wpdb->prefix . "videolist";

      $sql = "CREATE TABLE " . $table_name . " (
	  id mediumint(9) NOT NULL AUTO_INCREMENT,
	  name VARCHAR(20) NOT NULL unique, 
	  year VARCHAR(10) NOT NULL,
	  categroy VARCHAR(10) NOT NULL,
	  url VARCHAR(80) NOT NULL,
	  video_url VARCHAR(80) NOT NULL,
	  primary key (id)
	);";
	$wpdb->query($sql);
  
}
function table_drop(){
	global $wpdb;
	$table_name = $wpdb->prefix . "videolist";
	$sql = "drop table ".$table_name;
	$wpdb->query($sql);
}

function wp_video_options(){
?>
<script type="text/javascript" src="../wp-content/plugins/videoshow/plupload.full.min.js"></script>

<div class=wrap>
	<h1>Video show</h1>
	<br/>
	<div id="container">
		<h3>Upload thumbs</h3>
	    <a id="pickfiles" href="javascript:;">[Select files]</a> 
	    <a id="uploadfiles" href="javascript:;">[Upload files]</a>
	</div>
	<div id="filelist"></div>

	<form method="post" id="videoinfo" name="myform"action="">
		<p>Name:<input type="text" name="name"value=""></p>
		<p>Year:<input type="text" name="year"value=""></p>
		<p>URL(Auto generate):<input type="text" readonly name="url" size="80" data-home-url="<?php echo  (home_url()."/wp-content/plugins/videoshow/uploads/");?>"></p>
		<p>Video_URL:<input type="text" name="video_url" size="80" value=""></p>
		<p>Category:<input type="text" name="categroy"value=""></p>
		<p><input type="button" name="wp_video_options" value="Update Options &raquo;" onclick="savevideoinfo()"/></p>
	</form>

</div>
<script type="text/javascript">
var uploader = new plupload.Uploader({
	runtimes : 'html5,flash,silverlight,html4',
	browse_button : 'pickfiles', // you can pass in id...
	container: document.getElementById('container'), // ... or DOM Element itself
	url : '../wp-content/plugins/videoshow/upload.php',
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
				file.name=myform.year.value+"_"+myform.categroy.value+"_"+file.name,
				myform.url.value = myform.url.getAttribute('data-home-url')+file.name;
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
		if (jQuery.trim(myform.url.value)==="" 
			||jQuery.trim(myform.year.value)==="" 
			||jQuery.trim(myform.categroy.value)==="" 
			||jQuery.trim(myform.video_url.value)===""
			) {
			alert("please complete video info");
			return false;
		};

		jQuery.ajax({
			url:'../wp-content/plugins/videoshow/video.php',
			type:'post',
			data : jQuery("#videoinfo").serialize(),
			success : function(data)
			{ 
				alert("Success");
			}			
		});
	}
</script>
<?php
}
function wp_video_show_options_admin(){
	add_options_page('wp_video', 'video_show', 5,  __FILE__, 'wp_video_options');	
}
add_action("admin_menu","wp_video_show_options_admin");
?>
