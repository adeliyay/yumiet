@extends('layouts.app')
@section('content')
<body class="animsition">

	


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
		<h2 class="tit6 t-center">
			Weight Loss
		</h2>
	</section>



	<!-- Gallery -->
	<div class="section-gallery p-t-118 p-b-100">
		<div class="t-center">
						<span class="tit2 t-center">
							Choose
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							Menu
						</h3>
					</div>

		<div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
			<!-- - -->
			@foreach($menus as $key=>$menu)
			@if($menu->goals=="Weight Loss")
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events guests">
				<img src="{{ asset('uploads/menu/'.$menu->image) }}" alt="IMG-GALLERY">

				
					<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								{{ $menu->name }}
								</h4></a>

								<p class="m-b-20">
								{{ $menu->description }}
								</p>
								<p class="txt18">
								Rp. {{ $menu->price }}
							</p>
								<a href="#" class="txt4">
									See Details
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
			</div>
			@endif
			@endforeach	
		</div>

		<div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
			<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
			<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
			<a href="#" class="item-pagination flex-c-m trans-0-4">3</a>
		</div>
	</div>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>


</body>

@endsection