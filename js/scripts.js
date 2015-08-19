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
			slideCount = 0;
			changeSlideFirst();
		}else{
			slideCount++;
			changeSliderNext();
		}
		
		console.log(slideCount);
		console.log(slides);
		
	});

	$('.slideshow .arrow-left').click(function(){
		event.preventDefault();
		if(slideCount == 0){
			slideCount = slides;
			changeSlideLast();
		}else{
			slideCount--;
			changeSliderPrev();
		}
		console.log(slideCount);
		console.log(slides);
		
	});

	

});