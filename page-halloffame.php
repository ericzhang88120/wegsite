<?php $wl_theme_options = weblizar_get_options(); ?>
<?php get_header(); ?>
<?php global $wpdb; ?>

<style>
#photo-gallery{

}
#photo-gallery ul li{
	float: left;
	list-style: none;
	margin: 0 30px 0 0;
}
#photo-gallery ul li a{
	display: inline-block;
	color: white;
	text-transform: uppercase;
	font-weight: bold;
}
#photos ul,#photo-gallery ul{
	margin:0;
	padding: 0;
}

#photos li{
	width: 25%;
	float: left;
	list-style: none;
}
#photos li img{
width: 290px;
height:290px;
}

/* This rule is read by Galleria to define the gallery height: */
#galleria{height:520px;width:100%;}
</style>

<div class="container">
	<div class="row" id="event-info" style="background: #272727 url(wp-content/themes/wegsite/images/halloffame/photo-bg.png) no-repeat; height:800px;padding:140px 0 0 0;">
		<div id="photo-gallery">
			<div class="col-lg-10 col-md-10 col-sm-10">
				<ul>
				<li>
					<a href="#" data-gallery-name="All">All</a>
				</li>
				<?php 
				
				$galleries = $wpdb->get_results("SELECT * FROM $wpdb->nggallery");

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
	     	<a href="#" class="gallery-photo" data-pid="{$T.photo.PhotoID}" data-toggle="modal" data-target="#myModal">
				<img src="{$T.photo.PhotoThumbURL}"/>
			</a>
		</li>
	    {#/for}
	</ul>
  	--></textarea></p>
	<!-- End Templates -->

	<div class="row" id="event-info" style="background: #272727 url(wp-content/themes/wegsite/images/halloffame/video-bg.png) no-repeat; height:660px;padding:140px 0 0 10px;">
		<div class="col-lg-12 col-md-12 col-sm-12">
		</div>
	</div>
</div>

 	<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg" style="z-index:1200">
  	  	<div class="modal-content">
         	<div id="galleria">
	           
	     	</div>
    	</div>
  	</div>
</div>

<!-- Templates -->
	<p style="display:none">
	<textarea id="template-photos-gallery" rows="0" cols="0">
	<!--
		{#foreach $T.PhotosForGallery as photo}  
			<a href="{$T.photo.PhotoURL}">
	                <img src="{$T.photo.PhotoThumbURL}"/>
	        </a>
	    {#/for}
  	-->
  	</textarea></p>
	<!-- End Templates -->

<script type="text/javascript">
	jQuery(document).ready(function() {
	 	

		var hallOfFame={
			photos:jQuery('#photos'),
			gallery:jQuery('#photo-gallery'),
			year:jQuery("#photo-gallery-year")
		};

		GetPhotos("All",1,2015);

		hallOfFame.year.on('change',function(){
			var currentGallery,
				currentYear;

			currentGallery=hallOfFame.photos.data("current-gallery");
			currentYear=jQuery(this).val();

			GetPhotos(currentGallery,1,currentYear);
		});

		hallOfFame.gallery.on('click','a',function(event){
			
			event.preventDefault();
			
			var currentGallery,
				currentYear;

			currentGallery=jQuery(this).data("gallery-name");
			currentYear=hallOfFame.year.val();
			
			if (currentGallery!=hallOfFame.photos.data("current-gallery")) {
				GetPhotos(currentGallery,1,currentYear);
				hallOfFame.photos.data("current-gallery",currentGallery);
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
			currentYear=hallOfFame.year.val();
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
				break;

			}
		});	
	});

	Galleria.loadTheme('wp-content/themes/wegsite/galleria/galleria.classic.min.js');

	function GetPhotos(gallery,page,year){
		
		jQuery.ajax({ 
	        type: "POST", 
	        url: "wp-content/themes/wegsite/get-photos.php", 
	        dataType: "json", 
	        data: {"gallery":gallery,"page":page,"year":year},
	        success: function(json){

	        	//document.write(JSON.stringify(json));
				jQuery("#photos").setTemplateElement("template-photos").processTemplate(json);

				var data=json.PhotosForGallery;
			    // Initialize Galleria
			    Galleria.run('#galleria',{dataSource: data});
	        }
	    });
	}
</script>
<?php get_footer(); ?>