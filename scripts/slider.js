jQuery(document).ready(function ($) {
	var _SlideshowTransitions = [
		//Shift LR
		{$Duration:1200,x:1,$Easing:{$Left:$JssorEasing$.$EaseInOutQuart,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2,$Brother:{$Duration:1200,x:-1,$Easing:{$Left:$JssorEasing$.$EaseInOutQuart,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}}
	];

	var _CaptionTransitions = [
		{$Duration:900,y:-0.6,$Easing:{$Bottom:$JssorEasing$.$EaseInOutSine},$Opacity:2}
	];

	var options = {
		$AutoPlay: true,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
		$AutoPlayInterval: 5000,                           //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
		$PauseOnHover: 1,                                  //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
		$DragOrientation: 0,                               //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
		$SlideshowOptions: {                               //[Optional] Options to specify and enable slideshow or not
			$Class: $JssorSlideshowRunner$,                //[Required] Class to create instance of slideshow
			$Transitions: _SlideshowTransitions,           //[Required] An array of slideshow transitions to play slideshow
			$TransitionsOrder: 1,                          //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
			$ShowLink: true                                //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
		},
		$ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
			$Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
			$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
			$AutoCenter: 0,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
			$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
		},
		$CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
			$Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
			$CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
			$PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
			$PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
		}
	};

	var jssor_slider1 = new $JssorSlider$('active-projects', options);

	function ScaleSlider() {
		var parentWidth = $('#active-projects').parent().width();
		if (parentWidth) {
			jssor_slider1.$ScaleWidth(parentWidth);
		}
		else
			window.setTimeout(ScaleSlider, 30);
	}

	ScaleSlider();

	$(window).bind("load", ScaleSlider);
	$(window).bind("resize", ScaleSlider);
	$(window).bind("orientationchange", ScaleSlider);
});