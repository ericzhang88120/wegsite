<?php $wl_theme_options = weblizar_get_options(); ?>
<?php get_header(); ?>
<?php
	global $wpdb;
	$table_name = $wpdb->prefix . "thestars";
	$sql_skateboard = "select * from ".$table_name." where categroy='skateboard'";
	$res_skateboard=$wpdb->get_results($sql_skateboard);
	$len_skateboard = count($res_skateboard);
	if($len_skateboard != 0){
		$firstvalue_skateboard = $res_skateboard[0];
	}
	$sql_bmx = "select * from ".$table_name." where categroy='bmx'";
	$res_bmx=$wpdb->get_results($sql_bmx);
	$len_bmx = count($res_bmx);
	if($len_bmx != 0){
		$firstvalue_bmx = $res_bmx[0];
	}	
	$sql_speedclimbing = "select * from ".$table_name." where categroy='speedclimbing'";
	$res_speedclimbing=$wpdb->get_results($sql_speedclimbing);
	$len_speedclimbing = count($res_speedclimbing);
	if($len_speedclimbing != 0){
		$firstvalue_speedclimbing = $res_speedclimbing[0];
	}
	$sql_motocross = "select * from ".$table_name." where categroy='motocross'";
	$res_motocross=$wpdb->get_results($sql_motocross);
	$len_motocross = count($res_motocross);
	if($len_motocross != 0){
		$firstvalue_motocross = $res_motocross[0];
	}
	$sql_jamdemo = "select * from ".$table_name." where categroy='jamdemo'";
	$res_jamdemo=$wpdb->get_results($sql_jamdemo);
	$len_jamdemo = count($res_jamdemo);
	if($len_jamdemo != 0){
		$firstvalue_jamdemo = $res_jamdemo[0];
	}
?>
<style>
    /* jssor slider arrow navigator skin 03 css */
    /*
    .jssora03l                  (normal)
    .jssora03r                  (normal)
    .jssora03l:hover            (normal mouseover)
    .jssora03r:hover            (normal mouseover)
    .jssora03l.jssora03ldn      (mousedown)
    .jssora03r.jssora03rdn      (mousedown)
    */
    .jssora03l, .jssora03r {
        display: block;
        position: absolute;
        /* size of arrow element */
        width: 55px;
        height: 55px;
        cursor: pointer;
        background: url(wp-content/themes/wegsite/images/a03.png) no-repeat;
        overflow: hidden;
    }
    .jssora03l { background-position: -3px -33px; }
    .jssora03r { background-position: -63px -33px; }
    .jssora03l:hover { background-position: -123px -33px; }
    .jssora03r:hover { background-position: -183px -33px; }
    .jssora03l.jssora03ldn { background-position: -243px -33px; }
    .jssora03r.jssora03rdn { background-position: -303px -33px; }
</style>
<div class="container">
	<div class="row" id="skateboard"style="background: #272727 url(wp-content/themes/wegsite/images/stars/skateboard.jpg) no-repeat; height:920px;padding:140px 0 0 0;">
		<div id="content">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-2"></div>
				<div class="col-lg-10 col-md-10 col-sm-10" style="background: url(wp-content/themes/wegsite/images/stars/bg.png) no-repeat; height:562px;padding:0px 0 0 0;">
					<div class="col-lg-7" >
						<img id="skateboard_img"src=<?php if(isset($firstvalue_skateboard->url)){echo "\"".$firstvalue_skateboard->url."\"";}?>>
					</div>
					<div class="col-lg-5" id="skateboard_desc" style="overflow: scroll;overflow-x: hidden;">
						<?php if(isset($firstvalue_skateboard->txt)){echo $firstvalue_skateboard->txt;}?>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-2"></div>				
			</div>

			<div class="row" style="margin-top:10px">
				<div class="col-lg-1 col-md-1 col-sm-2"></div>
				<div class="col-lg-10 col-md-10 col-sm-10">
					<div id="slider1_container" style="width: 975px; height: 187px; overflow: hidden; ">
		        		<div u="loading" style="position: absolute; top: 0px; left: 0px;">
			            	<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
			                        background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
			            	</div>
				            <div style="position: absolute; display: block; background: url(wp-content/themes/wegsite/images/loading.gif) no-repeat center center;
				                        top: 0px; left: 0px;width: 100%;height:100%;">
				            </div>
		        		</div>

				        <!-- Slides Container -->
				        <div u="slides" style="cursor: move;width: 975px; height: 187px; overflow: hidden;">
				        	<?php
				        		foreach ($res_skateboard as $key => $value) {
				        			echo $str = "<div><a href=\"javascript:void(0)\" txt=\"".$value->txt."\"imgurl=\"".$value->url."\"><img src=\"".$value->thumbnail_url."\"/></a></div>";
				        		}
				        	?>
				            
				        </div>
		        		<!-- Arrow Left -->
				        <span u="arrowleft" class="jssora03l" style="top: 123px; left: -80px;">
				        </span>
				        <!-- Arrow Right -->
				        <span u="arrowright" class="jssora03r" style="top: 123px; right: -80px;">
				        </span>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-2"></div>
			</div>
		</div>
	</div>

	<div class="row" id="bmx"style="background: #272727 url(wp-content/themes/wegsite/images/stars/bmx.jpg) no-repeat; height:920px;padding:140px 0 0 0;">
		<div id="content">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-2"></div>
				<div class="col-lg-10 col-md-10 col-sm-10" style="background: url(wp-content/themes/wegsite/images/stars/bg.png) no-repeat; height:562px;padding:0px 0 0 0;">
					<div class="col-lg-7" >
						<img id="bmx_img"src=<?php if(isset($firstvalue_bmx->url)){echo "\"".$firstvalue_bmx->url."\"";}?>>
					</div>
					<div class="col-lg-5" id="bmx_desc" style="overflow: scroll;overflow-x: hidden;">
						<?php if(isset($firstvalue_bmx->txt)){echo $firstvalue_bmx->txt;}?>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-2"></div>				
			</div>

			<div class="row" style="margin-top:10px">
				<div class="col-lg-1 col-md-1 col-sm-2"></div>
				<div class="col-lg-10 col-md-10 col-sm-10">
					<div id="slider2_container" style="width: 975px; height: 187px; overflow: hidden; ">
		        		<div u="loading" style="position: absolute; top: 0px; left: 0px;">
			            	<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
			                        background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
			            	</div>
				            <div style="position: absolute; display: block; background: url(wp-content/themes/wegsite/images/loading.gif) no-repeat center center;
				                        top: 0px; left: 0px;width: 100%;height:100%;">
				            </div>
		        		</div>

				        <!-- Slides Container -->
				        <div u="slides" style="cursor: move;width: 975px; height: 187px; overflow: hidden;">
				        	<?php
				        		foreach ($res_bmx as $key => $value) {
				        			echo $str = "<div><a href=\"javascript:void(0)\" txt=\"".$value->txt."\"imgurl=\"".$value->url."\"><img src=\"".$value->thumbnail_url."\"/></a></div>";
				        		}
				        	?>
				            
				        </div>
		        		<!-- Arrow Left -->
				        <span u="arrowleft" class="jssora03l" style="top: 123px; left: -80px;">
				        </span>
				        <!-- Arrow Right -->
				        <span u="arrowright" class="jssora03r" style="top: 123px; right: -80px;">
				        </span>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-2"></div>
			</div>
		</div>
	</div>
	<div class="row" id="speedclimbing"style="background: #272727 url(wp-content/themes/wegsite/images/stars/speedclimbing.jpg) no-repeat; height:920px;padding:140px 0 0 0;">
			<div id="content">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-2"></div>
				<div class="col-lg-10 col-md-10 col-sm-10" style="background: url(wp-content/themes/wegsite/images/stars/bg.png) no-repeat; height:562px;padding:0px 0 0 0;">
					<div class="col-lg-7" >
						<img id="speedclimbing_img"src=<?php if(isset($firstvalue_speedclimbing->url)){echo "\"".$firstvalue_speedclimbing->url."\"";}?>>
					</div>
					<div class="col-lg-5" id="speedclimbing_desc" style="overflow: scroll;overflow-x: hidden;">
						<?php if(isset($firstvalue_speedclimbing->txt)){echo $firstvalue_speedclimbing->txt;}?>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-2"></div>				
			</div>

			<div class="row" style="margin-top:10px">
				<div class="col-lg-1 col-md-1 col-sm-2"></div>
				<div class="col-lg-10 col-md-10 col-sm-10">
					<div id="slider3_container" style="width: 975px; height: 187px; overflow: hidden; ">
		        		<div u="loading" style="position: absolute; top: 0px; left: 0px;">
			            	<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
			                        background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
			            	</div>
				            <div style="position: absolute; display: block; background: url(wp-content/themes/wegsite/images/loading.gif) no-repeat center center;
				                        top: 0px; left: 0px;width: 100%;height:100%;">
				            </div>
		        		</div>

				        <!-- Slides Container -->
				        <div u="slides" style="cursor: move;width: 975px; height: 187px; overflow: hidden;">
				        	<?php
				        		foreach ($res_speedclimbing as $key => $value) {
				        			echo $str = "<div><a href=\"javascript:void(0)\" txt=\"".$value->txt."\"imgurl=\"".$value->url."\"><img src=\"".$value->thumbnail_url."\"/></a></div>";
				        		}
				        	?>
				            
				        </div>
		        		<!-- Arrow Left -->
				        <span u="arrowleft" class="jssora03l" style="top: 123px; left: -80px;">
				        </span>
				        <!-- Arrow Right -->
				        <span u="arrowright" class="jssora03r" style="top: 123px; right: -80px;">
				        </span>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-2"></div>
			</div>
		</div>
	</div>
	<div class="row" id="motocross"style="background: #272727 url(wp-content/themes/wegsite/images/stars/moto.jpg) no-repeat; height:920px;padding:140px 0 0 0;">
		<div id="content">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-2"></div>
				<div class="col-lg-10 col-md-10 col-sm-10" style="background: url(wp-content/themes/wegsite/images/stars/bg.png) no-repeat; height:562px;padding:0px 0 0 0;">
					<div class="col-lg-7" >
						<img id="motocross_img"src=<?php if(isset($firstvalue_motocross->url)){echo "\"".$firstvalue_motocross->url."\"";}?>>
					</div>
					<div class="col-lg-5" id="motocross_desc" style="overflow: scroll;overflow-x: hidden;">
						<?php if(isset($firstvalue_motocross->txt)){echo $firstvalue_motocross->txt;}?>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-2"></div>				
			</div>

			<div class="row" style="margin-top:10px">
				<div class="col-lg-1 col-md-1 col-sm-2"></div>
				<div class="col-lg-10 col-md-10 col-sm-10">
					<div id="slider4_container" style="width: 975px; height: 187px; overflow: hidden; ">
		        		<div u="loading" style="position: absolute; top: 0px; left: 0px;">
			            	<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
			                        background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
			            	</div>
				            <div style="position: absolute; display: block; background: url(wp-content/themes/wegsite/images/loading.gif) no-repeat center center;
				                        top: 0px; left: 0px;width: 100%;height:100%;">
				            </div>
		        		</div>

				        <!-- Slides Container -->
				        <div u="slides" style="cursor: move;width: 975px; height: 187px; overflow: hidden;">
				        	<?php
				        		foreach ($res_motocross as $key => $value) {
				        			echo $str = "<div><a href=\"javascript:void(0)\" txt=\"".$value->txt."\"imgurl=\"".$value->url."\"><img src=\"".$value->thumbnail_url."\"/></a></div>";
				        		}
				        	?>
				            
				        </div>
		        		<!-- Arrow Left -->
				        <span u="arrowleft" class="jssora03l" style="top: 123px; left: -80px;">
				        </span>
				        <!-- Arrow Right -->
				        <span u="arrowright" class="jssora03r" style="top: 123px; right: -80px;">
				        </span>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-2"></div>
			</div>
		</div>
	</div>
	<div class="row" id="jamdemo"style="background: #272727 url(wp-content/themes/wegsite/images/stars/demo.jpg) no-repeat; height:920px;padding:140px 0 0 0;">
		<div id="content">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-2"></div>
				<div class="col-lg-10 col-md-10 col-sm-10" style="background: url(wp-content/themes/wegsite/images/stars/bg.png) no-repeat; height:562px;padding:0px 0 0 0;">
					<div class="col-lg-7" >
						<img id="jamdemo_img"src=<?php if(isset($firstvalue_jamdemo->url)){echo "\"".$firstvalue_jamdemo->url."\"";}?>>
					</div>
					<div class="col-lg-5" id="jamdemo_desc" style="overflow: scroll;overflow-x: hidden;">
						<?php if(isset($firstvalue_jamdemo->txt)){echo $firstvalue_jamdemo->txt;}?>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-2"></div>				
			</div>

			<div class="row" style="margin-top:10px">
				<div class="col-lg-1 col-md-1 col-sm-2"></div>
				<div class="col-lg-10 col-md-10 col-sm-10">
					<div id="slider5_container" style="width: 975px; height: 187px; overflow: hidden; ">
		        		<div u="loading" style="position: absolute; top: 0px; left: 0px;">
			            	<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
			                        background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
			            	</div>
				            <div style="position: absolute; display: block; background: url(wp-content/themes/wegsite/images/loading.gif) no-repeat center center;
				                        top: 0px; left: 0px;width: 100%;height:100%;">
				            </div>
		        		</div>

				        <!-- Slides Container -->
				        <div u="slides" style="cursor: move;width: 975px; height: 187px; overflow: hidden;">
				        	<?php
				        		foreach ($res_jamdemo as $key => $value) {
				        			echo $str = "<div><a href=\"javascript:void(0)\" txt=\"".$value->txt."\"imgurl=\"".$value->url."\"><img src=\"".$value->thumbnail_url."\"/></a></div>";
				        		}
				        	?>
				            
				        </div>
		        		<!-- Arrow Left -->
				        <span u="arrowleft" class="jssora03l" style="top: 123px; left: -80px;">
				        </span>
				        <!-- Arrow Right -->
				        <span u="arrowright" class="jssora03r" style="top: 123px; right: -80px;">
				        </span>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-2"></div>
			</div>
		</div>
	</div>
    <script>
        jssor_slider1_starter = function (containerId) {
            var options = {
                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 160,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 160,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 3, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 6,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                 //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 6                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 975));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);

            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            ////responsive code end
        };
    </script>
    <script>
    	jssor_slider1_starter('slider1_container');
        jssor_slider1_starter('slider2_container');
        jssor_slider1_starter('slider3_container');
        jssor_slider1_starter('slider4_container');
        jssor_slider1_starter('slider5_container');

    </script>
    <script type="text/javascript">
    	var handle_skateboard = jQuery('#skateboard');
    	handle_skateboard.on('click','a',function(event){

    		event.preventDefault();
    		jQuery('#skateboard_img').attr("src",jQuery(this).attr('imgurl'));
    		document.getElementById("skateboard_desc").innerHTML = jQuery(this).attr('txt');
    	})
    	var handle_bmx = jQuery('#bmx');
    	handle_bmx.on('click','a',function(event){

    		event.preventDefault();
    		jQuery('#bmx_img').attr("src",jQuery(this).attr('imgurl'));
    		document.getElementById("bmx_desc").innerHTML = jQuery(this).attr('txt');
    	})
    	var handle_speedclimbing = jQuery('#speedclimbing');
    	handle_speedclimbing.on('click','a',function(event){

    		event.preventDefault();
    		jQuery('#speedclimbing_img').attr("src",jQuery(this).attr('imgurl'));
    		document.getElementById("speedclimbing_desc").innerHTML = jQuery(this).attr('txt');
    	})
    	var handle_motocross = jQuery('#motocross');
    	handle_motocross.on('click','a',function(event){

    		event.preventDefault();
    		jQuery('#motocross_img').attr("src",jQuery(this).attr('imgurl'));
    		document.getElementById("motocross_desc").innerHTML = jQuery(this).attr('txt');
    	})
    	var handle_jamdemo = jQuery('#jamdemo');
    	handle_jamdemo.on('click','a',function(event){

    		event.preventDefault();
    		jQuery('#jamdemo_img').attr("src",jQuery(this).attr('imgurl'));
    		document.getElementById("jamdemo_desc").innerHTML = jQuery(this).attr('txt');
    	})

    </script>
</div>
<?php get_footer(); ?>