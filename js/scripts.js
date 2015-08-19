var $ = jQuery.noConflict();

$( document ).ready(function(){



	function changeSliderNext(){


		$('.slideshow.active').removeClass('active').next().addClass('active');
		
	}

	function changeSliderPrev(){

		$('.slideshow.active').removeClass('active').prev().addClass('active');

	}

	

	$('.slideshow .next-arrow').click(function(){
		changeSliderNext();
	});

	

	//j('.slideshow').removeClass('active');

});