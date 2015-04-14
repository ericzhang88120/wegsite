<?php $wl_theme_options = weblizar_get_options(); ?>
<?php get_header(); ?>
<?php global $wpdb; ?>

<style>
#photo-gallery{

}
#photo-gallery ul li,
#video-gallery ul li{
	float: left;
	list-style: none;
	margin: 0 30px 0 0;
}
#photo-gallery ul li a,
#video-gallery ul li a{
	display: inline-block;
	color: white;
	text-transform: uppercase;
	font-weight: bold;
}
#photos ul,#photo-gallery ul,
#videos ul,#video-gallery ul{
	margin:0;
	padding: 0;
}

#photos li,
#videos li{
	width: 25%;
	float: left;
	list-style: none;
}
#photos li img,
#videos li img{
width: 290px;
height:290px;
}

/* This rule is read by Galleria to define the gallery height: */
#galleria{height:520px;width:100%;}
</style>

<div class="container">
	<div class="row" id="photo-part" style="background: #272727 url(wp-content/themes/wegsite/images/HallOfFame/photo-bg.png) no-repeat; height:800px;padding:140px 0 0 2px;">
		<div id="photo-gallery">
			<div class="col-lg-10 col-md-10 col-sm-10">
				<ul>
				<li>
					<a href="#" data-gallery-name="All">All</a>
				</li>
				<?php 
				
				$galleries = $wpdb->get_results("SELECT * FROM $wpdb->nggallery where galdesc='halloffame'");

				foreach ($galleries as $gallery) {
				?>
					<li>
						<a href="#" data-gallery-name="<?php echo $gallery->name ?>"><?php echo $gallery->name ?></a>
					</li>
				<?php
				}
				?>
				</ul>	
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2">
				<select id="photo-gallery-year" class="pull-right">
					<?PHP 
						$query="SELECT distinct b.name 
								FROM $wpdb->term_taxonomy a 
								INNER JOIN $wpdb->terms b ON a.term_id=b.term_id 
								WHERE a.taxonomy='ngg_tag'";
						$years = $wpdb->get_results($query);

						foreach ($years as $year) {
					?>
						<option value="<?php echo $year->name ?>"><?php echo $year->name ?></option>
					<?php
					}
					?>
				</select>
			</div>
		</div>
		<div id="photos" data-current-page="1" data-current-gallery="All"></div>
	</div>
	<!-- Templates -->
	<p style="display:none"><textarea id="template-photos" rows="0" cols="0">
	<!--<ul id="list-photo">
		{#foreach $T.Photos as photo}  
	     <li>
	     	<a href="#" class="gallery-photo" data-pid="{$T.photo.PhotoID}">
				<img src="{$T.photo.PhotoThumbURL}"/>
			</a>
		</li>
	    {#/for}
	</ul>
  	--></textarea></p>
	<!-- End Templates -->

	<div class="row" id="video-part" style="background: #272727 url(wp-content/themes/wegsite/images/HallOfFame/video-bg.png) no-repeat; height:755px;padding:140px 0 0 2px;">
		<div id="video-gallery">
			<div class="col-lg-10 col-md-10 col-sm-10">
				<ul>
				<li>
					<a href="#" data-gallery-name="All">All</a>
				</li>
				<?php 
				
				global $wpdb;

				$wpdb->videolist = $wpdb->prefix . 'videolist';

				$galleries = $wpdb->get_results("SELECT distinct categroy FROM $wpdb->videolist");

				foreach ($galleries as $gallery) {
				?>
					<li>
						<a href="#" data-gallery-name="<?php echo $gallery->categroy ?>"><?php echo $gallery->categroy ?></a>
					</li>
				<?php
				}
				?>
				</ul>	
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2">
				<select id="video-gallery-year" class="pull-right">
					<?PHP 
						$query="SELECT distinct a.year 
								FROM $wpdb->videolist a";

						$years = $wpdb->get_results($query);

						foreach ($years as $year) {
					?>
						<option value="<?php echo $year->year ?>"><?php echo $year->year ?></option>
					<?php
					}
					?>
				</select>
			</div>
		</div>
		<div id="videos" data-current-page="1" data-current-gallery="All"></div>
	</div>
	<!-- Templates -->
	<p style="display:none"><textarea id="template-videos" rows="0" cols="0">
	<!--<ul id="list-video">
		{#foreach $T.Videos as video}  
	     <li>
	     	<a href="#" class="gallery-video" data-vid="{$T.video.VideoID}" data-url="{$T.video.VideoURL}">
				<img src="{$T.video.VideoThumbURL}"/>
			</a>
		</li>
	    {#/for}
	</ul>
  	--></textarea></p>
	<!-- End Templates -->

</div>

 	<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModalPhoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg" style="z-index:1200">
  	  	<div class="modal-content">
         	<div id="galleria">
	           
	     	</div>
    	</div>
  	</div>
</div>


<div class="modal fade bs-example-modal" id="myModalVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog" style="z-index:1200">
  	  	<div class="modal-content">
         	<div>
	            <iframe id="video-frame"  height=498 width=100% src="" frameborder=0 allowfullscreen></iframe>
	     	</div>
    	</div>
  	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function() {
	 	

		var hallOfFame={
			photos:jQuery('#photos'),
			photogallery:jQuery('#photo-gallery'),
			photoyear:jQuery("#photo-gallery-year"),
			videos:jQuery("#videos"),
			videogallery:jQuery('#video-gallery'),
			videoyear:jQuery("#video-gallery-year")
		};

		GetPhotos("All",1,2015);
		GetVideos("All",1,2015);

		hallOfFame.photoyear.on('change',function(){
			var currentGallery,
				currentYear;

			currentGallery=hallOfFame.photos.data("current-gallery");
			currentYear=jQuery(this).val();

			GetPhotos(currentGallery,1,currentYear);
		});

		hallOfFame.videoyear.on('change',function(){
			var currentGallery,
				currentYear;

			currentGallery=hallOfFame.videos.data("current-gallery");
			currentYear=jQuery(this).val();

			GetVideos(currentGallery,1,currentYear);
		});

		hallOfFame.photogallery.on('click','a',function(event){
			
			event.preventDefault();
			
			var currentGallery,
				currentYear;

			currentGallery=jQuery(this).data("gallery-name");
			currentYear=hallOfFame.photoyear.val();
			
			if (currentGallery!=hallOfFame.photos.data("current-gallery")) {
				GetPhotos(currentGallery,1,currentYear);
				hallOfFame.photos.data("current-gallery",currentGallery);
			};

		});

		hallOfFame.videogallery.on('click','a',function(event){
			
			event.preventDefault();
			
			var currentGallery,
				currentYear;

			currentGallery=jQuery(this).data("gallery-name");
			currentYear=hallOfFame.videoyear.val();
			
			if (currentGallery!=hallOfFame.videos.data("current-gallery")) {
				GetVideos(currentGallery,1,currentYear);
				hallOfFame.videos.data("current-gallery",currentGallery);
			};

		});

		hallOfFame.photos.on('click','.gallery-photo',function(event){
			
			event.preventDefault();

			var currentPage,
				currentGallery,
				currentYear,
				pid;
			
			currentPage=hallOfFame.photos.data("current-page");
			currentGallery=hallOfFame.photos.data("current-gallery");
			currentYear=hallOfFame.photoyear.val();
			pid = jQuery(this).data("pid");

			switch(pid)
			{
				//next page
				case 0:
				currentPage++;
				hallOfFame.photos.data("current-page",currentPage);
				GetPhotos(currentGallery,currentPage,currentYear);
				break;

				//previous page
				case -1:
				currentPage--;
				hallOfFame.photos.data("current-page",currentPage);
				GetPhotos(currentGallery,currentPage,currentYear);
				break;

				default:
				GetGallery(currentGallery,currentPage,currentYear,pid);
				jQuery('#myModalPhoto').modal('show');
				break;
			}
		});	

		hallOfFame.videos.on('click','.gallery-video',function(event){
			event.preventDefault();
			var currentPage,
				currentGallery,
				currentYear,
				vid;
			
			currentPage=hallOfFame.videos.data("current-page");
			currentGallery=hallOfFame.videos.data("current-gallery");
			currentYear=hallOfFame.videoyear.val();
			vid = jQuery(this).data("vid");

			switch(vid)
			{
				//next page
				case 0:
				currentPage++;
				hallOfFame.videos.data("current-page",currentPage);
				GetVideos(currentGallery,currentPage,currentYear);
				break;

				//previous page
				case -1:
				currentPage--;
				hallOfFame.videos.data("current-page",currentPage);
				GetVideos(currentGallery,currentPage,currentYear);
				break;

				default:
				jQuery('#video-frame').attr('src',jQuery(this).data("url"));
				jQuery('#myModalVideo').modal('show');
				break;
			}
		});

		jQuery('#myModalVideo').on('hidden.bs.modal', function (event) {
			event.preventDefault();
		  	jQuery('#video-frame').attr('src',"");
		});
	});

	Galleria.loadTheme('wp-content/themes/wegsite/galleria/galleria.classic.min.js');

	function GetGallery(gallery,page,year,pid){
		jQuery.ajax({ 
	        type: "POST", 
	        url: "wp-content/themes/wegsite/get-photos.php", 
	        dataType: "json", 
	        data: {"gallery":gallery,"page":page,"year":year,"pid":pid},
	        success: function(json){

				var data=json.PhotosForGallery;
			    // Initialize Galleria
			    Galleria.run('#galleria',{dataSource: data});
	        }
	    });
	}

	function GetPhotos(gallery,page,year){
		
		jQuery.ajax({ 
	        type: "POST", 
	        url: "wp-content/themes/wegsite/get-photos.php", 
	        dataType: "json", 
	        data: {"gallery":gallery,"page":page,"year":year,"pid":0},
	        success: function(json){

	        	//document.write(JSON.stringify(json));
				jQuery("#photos").setTemplateElement("template-photos").processTemplate(json);
	        }
	    });
	}

	function GetVideos(gallery,page,year){
		
		jQuery.ajax({ 
	        type: "POST", 
	        url: "wp-content/themes/wegsite/get-videos.php", 
	        dataType: "json", 
	        data: {"gallery":gallery,"page":page,"year":year},
	        success: function(json){

	        	//document.write(JSON.stringify(json));
				jQuery("#videos").setTemplateElement("template-videos").processTemplate(json);

	        }
	    });
	}
</script>
<?php get_footer(); ?>