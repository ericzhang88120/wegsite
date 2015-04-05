
<?php 
	include('C:\xampp\htdocs\wordpress\wp-config.php' );

	global $wpdb;

 	$gallery = stripslashes(trim($_POST['gallery'])); 
    $page = stripslashes(trim($_POST['page'])); 
    $year = stripslashes(trim($_POST['year']));
	$photo_begin=($page-1)*7;

    $queryCount = " SELECT COUNT(*) FROM WP_NGG_PICTURES a
					INNER JOIN WP_NGG_GALLERY b ON a.galleryid=b.gid
					INNER JOIN wp_term_relationships c on a.pid=c.object_id 
					INNER JOIN wp_terms d on c.term_taxonomy_id=d.term_id
					INNER JOIN wp_term_taxonomy e on e.term_id=d.term_id and e.taxonomy='ngg_tag'
					WHERE d.name='".$year."' "; 
	
	$query = "SELECT b.path,a.filename,a.pid FROM WP_NGG_PICTURES a
		 	  INNER JOIN WP_NGG_GALLERY b ON a.galleryid=b.gid
		 	  INNER JOIN wp_term_relationships c on a.pid=c.object_id 
		 	  INNER JOIN wp_terms d on c.term_taxonomy_id=d.term_id
		 	  INNER JOIN wp_term_taxonomy e on e.term_id=d.term_id and e.taxonomy='ngg_tag'
		 	  WHERE d.name='".$year."' "; 
			

	if ($gallery!="All") {
		
		$queryCount=$queryCount." AND b.name='".$gallery."'";
		$query=$query. " AND b.name='".$gallery."'";	
	}

	$query=$query." LIMIT ".$photo_begin.",7 ";

	//echo $query;

	$photo_total_page = ceil($wpdb->get_var($queryCount)/7);
	
	
	if ($page<$photo_total_page & $photo_total_page>1) {
		$query=$query."union select 'wp-content/themes/wegsite/images/halloffame','p-next.png',0";
	}
	if ($page==$photo_total_page & $photo_total_page>1) {
		$query=$query."union select 'wp-content/themes/wegsite/images/halloffame','p-previous.png',-1";
	}

	$photos = $wpdb->get_results($query);

	foreach ($photos as $key => $value) {
		$photos[$key]->path = str_replace("\\","/",ltrim($value->path,"\\"));
	}

	echo "{\"Items\":".json_encode($photos)."}";
 ?>