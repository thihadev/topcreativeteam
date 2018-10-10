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
				<li>Services</li>
			</ul>
		</div>
	</div>
	<!--//Breadcrumb-->
	<!-- Services -->
	<div class="services">
		<div class="container">
			<h3 class="tittle-w3layouts">Our services</h3>
			<div class="services-left-sctn">
				<div class="services-left-sctn-grid">
					<div class="col-md-4 services-icon">
						<div class="services-icon-info">
							<i class="fa fa-wrench" aria-hidden="true"></i>
						</div>
						<div class="services-icon-text">
							<h4>Furniture Repair</h4>
							<p class="paragraph-w3-agile">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
						</div>
					</div>
					<div class="col-md-4 services-icon">
						<div class="services-icon-info">
							<i class="fa fa-undo" aria-hidden="true"></i>
						</div>
						<div class="services-icon-text">
							<h4>Antique & Art Restoration</h4>
							<p class="paragraph-w3-agile">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
						</div>
					</div>
					<div class="col-md-4 services-icon">
						<div class="services-icon-info">
							<i class="fa fa-magic" aria-hidden="true"></i>
						</div>
						<div class="services-icon-text">
							<h4>Refinishing & Painting</h4>
							<p class="paragraph-w3-agile">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="services-left-sctn-grid">
					<div class="col-md-4 services-icon">
						<div class="services-icon-info">
							<i class="fa fa-angellist" aria-hidden="true"></i>
						</div>
						<div class="services-icon-text">
							<h4>Leather & Vinyl Repair</h4>
							<p class="paragraph-w3-agile">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
						</div>
					</div>
					<div class="col-md-4 services-icon">
						<div class="services-icon-info">
							<i class="fa fa-cogs" aria-hidden="true"></i>
						</div>
						<div class="services-icon-text">
							<h4>Mechanisms & Parts</h4>
							<p class="paragraph-w3-agile">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
						</div>
					</div>
					<div class="col-md-4 services-icon">
						<div class="services-icon-info">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
						</div>
						<div class="services-icon-text">
							<h4>Cardboard Plane Interior</h4>
							<p class="paragraph-w3-agile">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<!--// Services -->

@endsection