jQuery(function() {

	var starsPics = jQuery('.the-stars-pic');
	var starsAs=jQuery('.the-stars-a');

	starsPics.each(function(index){
			var src=jQuery(this).data('pic-root')+(index*2+1)+".jpg";
			jQuery(this).attr('src',src);
	});

	starsAs.hover(
	  function() {

		var index=(jQuery(this).data('index')-1)/2;
		var targetPic=jQuery(starsPics[index]);
		var src=targetPic.data('pic-root')+(targetPic.data('index')+1)+".jpg";
	    targetPic.attr('src',src);
	  }, function() {

		var index=(jQuery(this).data('index')-1)/2;
		var targetPic=jQuery(starsPics[index]);
		var src=targetPic.data('pic-root')+targetPic.data('index')+".jpg";
	    targetPic.attr('src',src);
	  }
);
});