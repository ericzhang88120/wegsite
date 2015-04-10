<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/wordpress/wp-config.php' );
	global $wpdb;
	$url ="";
	$year = "";
	$categroy = "";
	$txt = "";
	if(isset($_POST['url'])){
		$url = $_POST['url'];
	}
	if(isset($_POST['year'])){
		$year= $_POST['year'];
	}
	if(isset($_POST['categroy'])){
		$categroy= $_POST['categroy'];
	}
	if(isset($_POST['txt'])){
		$txt= $_POST['txt'];
	}
	if(isset($_POST['name'])){
		$name= $_POST['name'];
	}
	$table = "whatisup";
	$data_array = array(
		'name' =>$name,
        'url'=> $url,
        'year'=>$year,
		'categroy'=>$categroy,
		'txt'=>$txt
	);
	$wpdb->insert($wpdb->prefix.$table,$data_array);
?>
