<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/wordpress/wp-config.php' );
	global $wpdb;
	$url ="";
	$categroy = "";
	$txt = "";
	if(isset($_POST['url'])){
		$url = $_POST['url'];
	}
	if(isset($_POST['categroy'])){
		$categroy= $_POST['categroy'];
	}
	if(isset($_POST['star_desc'])){
		$txt= $_POST['star_desc'];
	}
	if(isset($_POST['thumbnail_url'])){
		$thumbnail_url= $_POST['thumbnail_url'];
	}
	if(isset($_POST['name'])){
		$name= $_POST['name'];
	}
	$table = "thestars";
	$data_array = array(
        'url'=> $url,
        'categroy'=>$categroy,
        'thumbnail_url' =>$thumbnail_url,
        'name' =>$name,
        'txt'=>$txt
	);
	$wpdb->insert($wpdb->prefix.$table,$data_array);
	echo 'OK';
?>
