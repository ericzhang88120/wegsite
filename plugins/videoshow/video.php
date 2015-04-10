<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/wordpress/wp-config.php' );
	global $wpdb;
	$url ="";
	$year = "";
	$categroy = "";
	if(isset($_POST['url'])){
		$url = $_POST['url'];
	}
	if(isset($_POST['year'])){
		$year= $_POST['year'];
	}
	if(isset($_POST['categroy'])){
		$categroy= $_POST['categroy'];
	}
	if(isset($_POST['video_url'])){
		$video_url= $_POST['video_url'];
	}
	if(isset($_POST['name'])){
		$name= $_POST['name'];
	}
	$table = "videolist";
	$data_array = array(
		'name' =>$name,
        'url'=> $url,
        'year'=> $year,
        'categroy'=>$categroy,
        'video_url'=>$video_url
	);
	$wpdb->insert($wpdb->prefix.$table,$data_array);
?>
