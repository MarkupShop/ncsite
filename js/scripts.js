$( document ).ready(function(){



	function changeSliderNext(){


		$('.slideshow.active').removeClass('active').next().addClass('active');
		return false;
		
	}

	function changeSliderPrev(){

		$('.slideshow.active').removeClass('active').prev().addClass('active');
		return false;

	}

	function changeSlideFirst(){
		$('.slideshow.active').removeClass('active');
		$('.slideshow:first').addClass('active');
	}

	function changeSlideLast(){
		$('.slideshow.active').removeClass('active');
		$('.slideshow:last').addClass('active');
	}

	var slideCount = 0;
	var slides = $('.slideshow').length;

	$('.slideshow .arrow-right').click(function(){
		event.preventDefault();
		if(slideCount == slides){
			changeSlideFirst();
			slideCount = 0;
		}else{
			changeSliderNext();
			slideCount++;
		}
		
		
	});

	$('.slideshow .arrow-left').click(function(){
		event.preventDefault();
		if(slideCount == 0){
			changeSlideLast();
			slideCount = slides;
		}else{
			changeSliderPrev();
			slideCount--;
		}
		
	});

	

});