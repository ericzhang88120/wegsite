
<?php 
	/**
	* 
	*/
	class HallOfFameVideo
	{
		public  $VideoID;
		public  $VideoThumbURL;
		public  $VideoURL;

		public function __construct($VideoID,$VideoThumbURL,$VideoURL) {  
	        $this->VideoID=$VideoID;  
	        $this->VideoThumbURL=$VideoThumbURL;  
	        $this->VideoURL=$VideoURL;  
    	} 
	}

	/**
	* 
	*/
	class VideoForGallery
	{
	    public $video;
        public $title;
        public $description;
		
		function __construct($video)
		{
	        $this->video=$video;  
	        $this->title="";
	        $this->description="";
		}
	}


	include('../../../wp-config.php' );

	global $wpdb;

 	$gallery = stripslashes(trim($_POST['gallery'])); 
    $page = stripslashes(trim($_POST['page'])); 
    $year = stripslashes(trim($_POST['year']));
	$photo_begin=($page-1)*7;

    $queryCount = " SELECT COUNT(*) FROM wp_videolist a
					WHERE a.year='".$year."' "; 
	
	$query = "SELECT * FROM wp_videolist a
		 	  WHERE a.year='".$year."' "; 
			

	if ($gallery!="All") {
		
		$queryCount=$queryCount." AND a.categroy='".$gallery."'";
		$query=$query. " AND a.categroy='".$gallery."'";	
	}

	//$videos_for_gallery=$wpdb->get_results($query);

	$query=$query." LIMIT ".$photo_begin.",7 ";

	//echo $query;

	$photo_total_page = ceil($wpdb->get_var($queryCount)/7);
	
	
	if ($page<$photo_total_page & $photo_total_page>1) {
		$query=$query."union select 'wp-content/themes/wegsite/images/halloffame','v-next.png',0";
	}
	if ($page==$photo_total_page & $photo_total_page>1) {
		$query=$query."union select 'wp-content/themes/wegsite/images/halloffame','v-previous.png',-1";
	}

	$videos = $wpdb->get_results($query);

	$ArrayVideo=array();
	foreach ($videos as $key => $value) {
		
		$p=new HallOfFameVideo($value->pid,$value->url,$value->video_url);
		$ArrayVideo[]=$p;
	}

	/*$ArrayVideoForGallery= array();

	foreach ($videos_for_gallery as $key => $value) {
		$a = $value->pid;
		$video_path = "";
		
		$p=new VideoForGallery("http://v.youku.com/v_show/id_XOTI4NzM4MDg4.html?f=23643299");
		$ArrayVideoForGallery[]=$p;
	}*/

	//echo "{\"Videos\":".json_encode($ArrayVideo).",\"VideosForGallery\":".json_encode($ArrayVideoForGallery)."}";
	echo "{\"Videos\":".json_encode($ArrayVideo)."}";
 ?>