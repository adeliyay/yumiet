

@extends('layouts.app')
@section('content')

	<!-- Title Page -->
<!-- Lunch -->
<section class="section-lunch bgwhite">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Reguler
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
				@foreach($menus as $key=>$menu)
				@if($menu->goals=="Regular")
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<img src="{{ asset('uploads/menu/'.$menu->image) }}" alt="IMG-MENU">
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<span class="txt21 m-b-3">
								{{ $menu->name }}
							</span>

							<span class="txt23">
								{{ $menu->description }}
							</span>

							<span class="txt25">
								Rp. {{ $menu->price }}
							</span>
						</div>
					</div>
					@endif
					@endforeach	
				</div>
			</div>
		</div>
	</section>


	<section class="section-lunch bgwhite">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Weight Loss
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
				@foreach($menus as $key=>$menu)
				@if($menu->goals=="Weight Loss")
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<img src="{{ asset('uploads/menu/'.$menu->image) }}" alt="IMG-MENU">
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<span class="txt21 m-b-3">
								{{ $menu->name }}
							</span>

							<span class="txt23">
								{{ $menu->description }}
							</span>

							<span class="txt25">
								Rp. {{ $menu->price }}
							</span>
						</div>
					</div>
					@endif
					@endforeach	
				</div>
			</div>
		</div>
	</section>

	<!-- Lunch -->
	<section class="section-lunch bgwhite">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Muscle Building
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
				@foreach($menus as $key=>$menu)
				@if($menu->goals=="Muscle Building")
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<img src="{{ asset('uploads/menu/'.$menu->image) }}" alt="IMG-MENU">
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<span class="txt21 m-b-3">
								{{ $menu->name }}
							</span>

							<span class="txt23">
								{{ $menu->description }}
							</span>

							<span class="txt25">
								Rp. {{ $menu->price }}
							</span>
						</div>
					</div>
					@endif
					@endforeach	
				</div>
			</div>
		</div>
	</section>


	<!-- Dinner -->
	<section class="section-dinner bgwhite">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(images/header-menu-02.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Special Needs
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
				@foreach($menus as $key=>$menu)
				@if($menu->goals=="Special Needs")
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<img src="{{ asset('uploads/menu/'.$menu->image) }}" alt="IMG-MENU">
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<span class="txt21 m-b-3">
								{{ $menu->name }}
							</span>

							<span class="txt23">
								{{ $menu->description }}
							</span>

							<span class="txt25">
								Rp. {{ $menu->price }}
							</span>
						</div>
					</div>
					@endif
					@endforeach	
				</div>
			</div>
		</div>
	</section>


	<!-- Sign up -->
		<div class="section-signup bg1-pattern p-t-85 p-b-85">
		<form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
			<span class="txt5 m-10">
				ORDER NOW
			</span>

			<!-- Button3 -->
			@guest
			<button class=" social btn3 flex-c-m size18 txt11 trans-0-4 m-10">
				<a href ='{{url("/login")}}'> ORDER
			</button>

            @else
          <button class=" social btn3 flex-c-m size18 txt11 trans-0-4 m-10">
				<a href ='{{url("/booking")}}'> ORDER
			</button>
           @endguest

		</form>
	</div>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>


@endsection
