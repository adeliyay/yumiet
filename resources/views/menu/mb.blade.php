@extends('layouts.app')
@section('content')
<body class="animsition">


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
		<h2 class="tit6 t-center">
		Muscle Building
		</h2>
		
	</section>



	<!-- Gallery -->
	<div class="section-gallery p-t-118 p-b-100">
		<div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
			<button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
				Muscle Building
			</button>
			@foreach($packages as $key=>$package)
			<button class="label-gallery trans-0-4 txt25" data-filter=".{{$package->package}}">
				Package {{$package->package}} <br> ( Rp {{$package->total_price}} )
			</button>
		@endforeach
		</div>
		<div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25 ">
			
			<!-- - -->
			@foreach($menus as $key=>$menu)
		@if($menu->goals=="Muscle Building" )
			<div class=" isotope-item bo-rad-10 hov-img-zoom {{$menu->package}}">
			
				<div class="list-group">

          	<div class="list-group-item  ">

			  <table>
			  <tr>
			  <td
          		<div class="t-center"> <span class="txt9">
                  <!--<h4>{{ $menu->name }}</h4><br>-->
                </span></div>
	          </tr>
			<tr>
			<td class="size30">
				<div class="col-md-12">

			 	<img src="images/photo-gallery-14.jpg" alt="placehold.it/350x250" >  
            	</div>
            </td>
        	<td>
                <div class="col-sm-12">
					<h4 class="txt5">{{ $menu->name }}</h4>
                    <p class="txt23"> {{ $menu->description }}
                    </p>
                </div>
         	</td>
            </tr>
			</table>
          	</div>
			</div>
		</div>
		@endif
		@endforeach
			
       
      <br>

		
		<div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
			<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
			<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
			<a href="#" class="item-pagination flex-c-m trans-0-4">3</a>
		</div>
	</div>

	<!-- Sign up -->
	<div class="section-signup bg1-pattern p-t-85 p-b-85">
		<form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5" method="post" action="{{ route('order.saveorder') }}">
		{{ csrf_field() }}
			<span class="txt5 m-10">
				Choose Package 
			</span>
			<input name="goals" type="hidden" value="{{$order['goals']}}">
			<input name="start" type="hidden" value="{{$order['start']}}">
			<input name="days" type="hidden" value="{{$order['days']}}">
			<input name="time" type="hidden" value="{{$order['time']}}">
			<input name="gender" type="hidden" value="{{$order['gender']}}">
			<input name="address" type="hidden" value="{{$order['address']}}">
			<input name="phone" type="hidden" value="{{$order['phone']}}">
			
			<select class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10" name="package" required="required">
			@foreach($packages as $key=>$package)
												<option>{{$package->package}}</option>
			@endforeach
                                            </select>
			
			<!-- Button3 -->
			<button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
				Choose
			</button>
		</form>
	</div>

	


	

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
@endsection
