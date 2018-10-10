@extends('frontend.layouts.master')

@section('content')
	<!--Breadcrumb-->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="{{url('/')}}">Home</a>
					<span>| |</span>
				</li>
				<li>About</li>
			</ul>
		</div>
	</div>
	<!--//Breadcrumb-->
	<!-- Choose Us -->
	<div class="advantages">
		<div class="container">
			<h3 class="tittle-w3layouts">Why choose us</h3>
		</div>
		<div class="advntge-main">
			<div class="advntge-left-sctn">
				<div class="advntge-inner-info">
					<h6>Natural Materials</h6>
					<p class="paragraph-w3-agile">Maecenas ut purus tempus urna posuere facilisis eu nec metus. In in lacinia libero. Class aptent taciti sociosqu ad
						litora torquent per conubia nostra, per inceptos himenaeos.</p>
				</div>
				<div class="advntge-inner-info">
					<p class="paragraph-w3-agile text-right">Maecenas ut purus tempus urna posuere facilisis eu nec metus. In in lacinia libero. Class aptent taciti sociosqu ad
						litora torquent per conubia nostra, per inceptos himenaeos.</p>
					<h6 class="text-right">Premium-grade Quality</h6>
				</div>
			</div>
			<div class="advntge-right-sctn">
				<div class="advntge-inner-info">
					<h6>Affordable Pricing</h6>
					<p class="paragraph-w3-agile">Maecenas ut purus tempus urna posuere facilisis eu nec metus. In in lacinia libero. Class aptent taciti sociosqu ad
						litora torquent per conubia nostra, per inceptos himenaeos.</p>
				</div>
				<div class="advntge-inner-info">
					<p class="paragraph-w3-agile text-right">Maecenas ut purus tempus urna posuere facilisis eu nec metus. In in lacinia libero. Class aptent taciti sociosqu ad
						litora torquent per conubia nostra, per inceptos himenaeos.</p>
					<h6 class="text-right">Best Sellers</h6>
				</div>
			</div>
		</div>
	</div>
	<!--// Choose Us -->
	<!-- What-we-do -->
	<div class="what-wedo-w3ls">
		<div class="container">
			<h3 class="tittle-w3layouts">What We Do</h3>
			<div class="wedo-main">
				<div class="wedo-left">
					<h4 class="sub-hdng">Our Collections</h4>
					<p class="paragraph-w3-agile">
						<span class="fa fa-check" aria-hidden="true"></span>Benches</p>
					<p class="paragraph-w3-agile">
						<span class="fa fa-check" aria-hidden="true"></span>Beds</p>
					<p class="paragraph-w3-agile">
						<span class="fa fa-check" aria-hidden="true"></span>Sofas</p>
					<p class="paragraph-w3-agile">
						<span class="fa fa-check" aria-hidden="true"></span>Chairs</p>
					<h4 class="sub-hdng top-mrgn">consulting service for all types of furnitures</h4>
					<p class="paragraph-w3-agile">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
						eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				</div>
				<div class="wedo-right inn-img-margn">
					<img src="{{asset('frontend/images/bb2.jpg')}}" alt=" " class="img-responsive second-img">
				</div>
			</div>
		</div>
	</div>
	<!--// What-we-do -->
	{{-- <!-- stats -->
	<div class="stats">
		<div class="container-fluid">
			<h3 class="tittle-w3layouts white-clr">Immaculate Best Sellers</h3>
			<div class="stats-inner-agileits-w3layouts">
				<div class="col-md-3 col-sm-6 stat-grids">
					<div class="stats-text">
						<p class="counter">1,546</p>
						<h3>Tables</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 stat-grids">
					<div class="stats-text">
						<p class="counter">2,879</p>
						<h3>Chairs & Armchairs</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 stat-grids">
					<div class="stats-text">
						<p class="counter">1,546</p>
						<h3>Sofas & Couches</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 stat-grids">
					<div class="stats-text">
						<p class="counter">953</p>
						<h3>Outdoor Furniture</h3>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //stats --> --}}
	<!-- Team -->
	<div class="team" id="team">
		<div class="container">
			<h3 class="tittle-w3layouts">Meet our Team</h3>
			<div class="col-md-6 team-left">
				<div class="team1">
					<div class="col-md-4 team-img1">
						<img src="{{asset('frontend/images/team1.jpg')}}" alt="">
					</div>
					<div class="col-md-4 team-info">
						<h4>Carl Haddon</h4>
						<p>Lorem Ipsum</p>
						<div class="social-icons">
							<a href="#">
								<span class="fa fa-facebook" aria-hidden="true"></span>
							</a>
							<a href="#">
								<span class="fa fa-linkedin" aria-hidden="true"></span>
							</a>
							<a href="#">
								<span class="fa fa-google-plus" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="team2">
					<div class="col-md-4 team-img2">
						<img src="{{asset('frontend/images/team2.jpg')}}" alt="">
					</div>
					<div class="col-md-4 team-info">
						<h4>Nessa Peters</h4>
						<p>Lorem Ipsum</p>
						<div class="social-icons">
							<a href="#">
								<span class="fa fa-facebook" aria-hidden="true"></span>
							</a>
							<a href="#">
								<span class="fa fa-linkedin" aria-hidden="true"></span>
							</a>
							<a href="#">
								<span class="fa fa-google-plus" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-6 team-right">
				<div class="team3">
					<div class="col-md-4 team-img1">
						<img src="{{asset('frontend/images/team3.jpg')}}" alt="">
					</div>
					<div class="col-md-4 team-info">
						<h4>Mark Johnson</h4>
						<p>Lorem Ipsum</p>
						<div class="social-icons">
							<a href="#">
								<span class="fa fa-facebook" aria-hidden="true"></span>
							</a>
							<a href="#">
								<span class="fa fa-linkedin" aria-hidden="true"></span>
							</a>
							<a href="#">
								<span class="fa fa-google-plus" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="team4">
					<div class="col-md-4 team-img2">
						<img src="{{url('frontend/images/team4.jpg')}}" alt="">
					</div>
					<div class="col-md-4 team-info">
						<h4>Alice Puse</h4>
						<p>Lorem Ipsum</p>
						<div class="social-icons">
							<a href="#">
								<span class="fa fa-facebook" aria-hidden="true"></span>
							</a>
							<a href="#">
								<span class="fa fa-linkedin" aria-hidden="true"></span>
							</a>
							<a href="#">
								<span class="fa fa-google-plus" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--// Team -->

@endsection