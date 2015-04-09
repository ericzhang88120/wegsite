
<?php 
	/**
	* 
	*/
	class HallOfFamePhoto
	{
		public  $PhotoID;
		public  $PhotoURL;
		public  $PhotoThumbURL;

		public function __construct($PhotoID,$PhotoURL,$PhotoThumbURL) {  
	        $this->PhotoID=$PhotoID;  
	        $this->PhotoURL=$PhotoURL;  
	        $this->PhotoThumbURL=$PhotoThumbURL;  
    	} 
	}

	/**
	* 
	*/
	class PhotoForGallery
	{
	    public $image;
        public $thumb;
        public $big;
        public $title;
        public $description;
        public $link;
		
		function __construct($image,$thumb)
		{
	        $this->image=$image;  
	        $this->thumb=$thumb; 
	        $this->big="";
	        $this->title="";
	        $this->description="";
	        $this->link="";
		}
	}


	include('../../../wp-config.php' );

	global $wpdb;

 	$gallery = stripslashes(trim($_POST['gallery'])); 
    $page = stripslashes(trim($_POST['page'])); 
    $year = stripslashes(trim($_POST['year']));
    $pid = stripslashes(trim($_POST['pid']));

	$photo_begin=($page-1)*7;

    $queryCount = " SELECT COUNT(*) FROM WP_NGG_PICTURES a
					INNER JOIN WP_NGG_GALLERY b ON a.galleryid=b.gid and b.galdesc='halloffame'
					INNER JOIN wp_term_relationships c on a.pid=c.object_id 
					INNER JOIN wp_terms d on c.term_taxonomy_id=d.term_id
					INNER JOIN wp_term_taxonomy e on e.term_id=d.term_id and e.taxonomy='ngg_tag'
					WHERE d.name='".$year."' "; 
	
	$query = "SELECT b.path,a.filename,a.pid FROM WP_NGG_PICTURES a
		 	  INNER JOIN WP_NGG_GALLERY b ON a.galleryid=b.gid and b.galdesc='halloffame'
		 	  INNER JOIN wp_term_relationships c on a.pid=c.object_id 
		 	  INNER JOIN wp_terms d on c.term_taxonomy_id=d.term_id
		 	  INNER JOIN wp_term_taxonomy e on e.term_id=d.term_id and e.taxonomy='ngg_tag'
		 	  WHERE d.name='".$year."' "; 
			

	if ($gallery!="All") {
		
		$queryCount=$queryCount." AND b.name='".$gallery."'";
		$query=$query. " AND b.name='".$gallery."'";	
	}

	$photos_for_gallery=$wpdb->get_results($query);

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

	$ArrayPhoto=array();
	foreach ($photos as $key => $value) {
		$a = $value->pid;
		$path=str_replace("\\","/",ltrim($value->path,"\\"));
		$photo_path=$path."/".$value->filename;
		$thumb_path=$photo_path;

		if ($a>0) {
			$thumb_path = $path."/thumbs/thumbs_".$value->filename;
		}

		$p=new HallOfFamePhoto($a,$photo_path,$thumb_path);

		$ArrayPhoto[]=$p;
	}

	$ArrayPhotoForGallery= array();

	foreach ($photos_for_gallery as $key => $value) {
		$a = $value->pid;
		$path=str_replace("\\","/",ltrim($value->path,"\\"));
		$photo_path=$path."/".$value->filename;
		$thumb_path = $path."/thumbs/thumbs_".$value->filename;
		
		$p=new PhotoForGallery($photo_path,$thumb_path);

		if ($a==$pid) {
			array_unshift($ArrayPhotoForGallery,$p);
		}else{
			$ArrayPhotoForGallery[]=$p;
		}
	}

	echo "{\"Photos\":".json_encode($ArrayPhoto).",\"PhotosForGallery\":".json_encode($ArrayPhotoForGallery)."}";
 ?>