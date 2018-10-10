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
				<li>Gallery</li>
			</ul>
		</div>
	</div>
	<!--//Breadcrumb-->
	<!--Gallery-->
	<div class="gallery" id="gallery">
		<div class="container">
			<h3 class="tittle-w3layouts">Gallery</h3>
			<div class="main_gallery_sctn demo">
				<div class="col-md-4 col-sm-4 col-xs-4 gal-sec">
					<div class="gallery-grid1">
						<a title="Attractive home purchase offers." href="{{asset('frontend/images/g1.jpg')}}">
						<img src="{{url('frontend/images/g1.jpg')}}" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>
								<span>T</span>op
								<span>C</span>reative
								<span>T</span>eam
							</h4>
							<p>Aliquam sit amet</p>
						</div>
					</div>
					<div class="gallery-grid1">
						<a title="Attractive home purchase offers." href="{{asset('frontend/images/g2.jpg')}}">
						<img src="{{url('frontend/images/g2.jpg')}}" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>
								<span>T</span>op
								<span>C</span>reative
								<span>T</span>eam
							<p>Aliquam sit amet</p>
						</div>
					</div>
					<div class="gallery-grid1">
						<a title="Attractive home purchase offers." href="{{asset('frontend/images/g4.jpg')}}">
						<img src="{{url('frontend/images/g4.jpg')}}" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>
								<span>T</span>op
								<span>C</span>reative
								<span>T</span>eam
							</h4>
							<p>Aliquam sit amet</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 gal-sec">
					<div class="gallery-grid1">
						<a title="Attractive home purchase offers." href="{{asset('frontend/images/g3.jpg')}}">
						<img src="{{url('frontend/images/g3.jpg')}}" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>
								<span>T</span>op
								<span>C</span>reative
								<span>T</span>eam
							</h4>
							<p>Aliquam sit amet</p>
						</div>
					</div>
					<div class="gallery-grid1">
						<a title="Attractive home purchase offers." href="{{asset('frontend/images/g6.jpg')}}">
						<img src="{{url('frontend/images/g6.jpg')}}" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>
								<span>T</span>op
								<span>C</span>reative
								<span>T</span>eam
							</h4>
							<p>Aliquam sit amet</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 gal-sec">
					<div class="gallery-grid1">
						<a title="Attractive home purchase offers." href="{{asset('frontend/images/g3s.jpg')}}">
						<img src="{{url('frontend/images/g3s.jpg')}}" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>
								<span>T</span>op
								<span>C</span>reative
								<span>T</span>eam
							</h4>
							<p>Aliquam sit amet</p>
						</div>
					</div>
					<div class="gallery-grid1">
						<a title="Attractive home purchase offers." href="{{asset('frontend/images/g1.jpg')}}">
						<img src="{{url('frontend/images/g1.jpg')}}" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>
								<span>T</span>op
								<span>C</span>reative
								<span>T</span>eam
							</h4>
							<p>Aliquam sit amet</p>
						</div>
					</div>
					<div class="gallery-grid1">
						<a title="Attractive home purchase offers." href="{{asset('frontend/images/g7.jpg')}}">
						<img src="{{url('frontend/images/g7.jpg')}}" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4>
								<span>T</span>op
								<span>C</span>reative
								<span>T</span>eam
							</h4>
							<p>Aliquam sit amet</p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="grid_3 grid_5 contentmkits">
				<div class="col-md-6">
					<nav>
						<ul class="pagination pagination-lg">
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">«</span>
								</a>
							</li>
							<li>
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li>
								<a href="#">5</a>
							</li>
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true">»</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!--//Gallery-->

@endsection