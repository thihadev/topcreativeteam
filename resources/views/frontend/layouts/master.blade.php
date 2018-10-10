<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Top Creative Team</title>

	<!-- Meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" >
	<meta name="keywords" content="Top Creative Team Construction Company" />
	<link rel="icon" href="../img/tct.jpg" type="image/jpg" sizes="96x96"> 
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-tags -->
	<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- //Bootstrap Css -->
	<link href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet">
	<!-- //Font-awesome Css -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style7.css')}}" />
	<!--//menu slider -->
	<link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}" type="text/css" media="screen" />
	<!--// Flexslider-CSS -->
	<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- //Required Css -->
	<!--//menu slider -->
	<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- //Required Css -->
	<link rel="stylesheet" href="{{asset('frontend/css/chocolat.css')}}" type="text/css" media="screen">
	<!-- //Gallery Css -->
		<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Cabin:400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<!--//fonts-->
</head>
<body>
	@include('frontend.layouts.slider')


	@yield('content')


	@include('frontend.layouts.footer')


<!-- js -->
<script type="text/javascript" src="{{asset('frontend/js/jquery-2.2.3.min.js')}}"></script>
<!-- //menu -->
<script src="{{asset('frontend/js/modernizr-2.6.2.min.js')}}"></script>
<script src="{{asset('frontend/js/classie.js')}}"></script>
<script src="{{asset('frontend/js/demo7.js')}}"></script>
<!-- //menu -->
<!--gallery -->
<script src="{{asset('frontend/js/jquery.chocolat.js')}}"></script>
<!--light-box-files -->
<script type="text/javascript">
	$(function () {
		$('.gallery-grid1 a').Chocolat();
	});
</script>
<!-- //gallery -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('frontend/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function ($) {
		$(".scroll").click(function (event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- stats -->
<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.countup.js')}}"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<script src="{{asset('frontend/js/responsiveslides.min.js')}}"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function () {
		// Slideshow 3
		$("#slider3").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function () {
				$('.events').append("<li>after event fired.</li>");
			}
		});

	});
</script>
<!-- FlexSlider -->
<script defer src="{{asset('frontend/js/jquery.flexslider.js')}}"></script>
<script type="text/javascript">
	$(function () {

	});
	$(window).load(function () {
		$('.flexslider').flexslider({
			animation: "slide",
			start: function (slider) {
				$('body').removeClass('loading');
			}
		});
	});
</script>
<!-- FlexSlider -->
<!-- smooth scrolling -->
<script type="text/javascript">
	$(document).ready(function () {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/
		$().UItoTop({
			easingType: 'easeOutQuart'
		});
	});
</script>

<a href="#home" id="toTop" style="display: block;">
	<span id="toTopHover" style="opacity: 1;"> </span>
</a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.js')}}"></script>

</body>
</html>