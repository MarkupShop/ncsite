var $ = jQuery.noConflict();

$( document ).ready(function(){



	function changeSliderNext(){


		$('.slideshow.active').removeClass('active').next().addClass('active');
		return false;
		
	}

	function changeSliderPrev(){

		$('.slideshow.active').removeClass('active').prev().addClass('active');
		return false;

	}

	

	$('.slideshow .next-arrow').click(function(){
		console.log('clicked');
		changeSliderNext();
		return false;
	});

	

	//j('.slideshow').removeClass('active');

});