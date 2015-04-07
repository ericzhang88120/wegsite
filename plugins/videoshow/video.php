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
	$table = "videolist";
	$data_array = array(
        'url'=> $url,
        'year'=> $year,
        'categroy'=>$categroy
	);
	$wpdb->insert($wpdb->prefix.$table,$data_array);
?>