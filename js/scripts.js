$( document ).ready(function(){



	function changeSliderNext(){


		$('.slideshow.active').removeClass('active').next().addClass('active');
		return false;
		
	}

	function changeSliderPrev(){

		$('.slideshow.active').removeClass('active').prev().addClass('active');
		return false;

	}

	

	$('.slideshow .arrow-right').click(function(){
		event.preventDefault();
		console.log('clicked');
		changeSliderNext();
	});

	

	//j('.slideshow').removeClass('active');

});