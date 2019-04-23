
@extends('layouts.app')
@section('content')

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
		<h2 class="tit6 t-center">
			Order
		</h2>
	</section>


	<!-- Reservation -->
	

					<!-- Booking -->
	<section class="section-booking bg1-pattern p-t-100 p-b-110">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Order
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							Catering
						</h3>
					</div>

					<form class="wrap-form-booking">

						<div class="row">
							<div class="col-md-6">
								<!-- Goals -->
								<span class="txt9">
									Goals
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="Goals">
										<option>Regular</option>
										<option>Weight Loss</option>
										<option>Muscle Building</option>
										<option>Special Needs</option>
									</select>
								</div>

								<!-- Start -->
								<span class="txt9">
									Start
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="date">
									<i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
								</div>

								<!-- Gender -->
								<span class="txt9">
									Gender
								</span>

								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="time">
										<option>Male</option>
										<option>Female</option>
										
									</select>
								</div>

					
							</div>

							<div class="col-md-6">
									<!-- Time -->
								<span class="txt9">
									Time
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="Time">
										<option>All Time</option>
										<option>Breakfast</option>
										<option>Lunch</option>
										<option>Dinner</option>
										<option>Breakfast and Lunch</option>
										<option>Lunch and Dinner</option>
										<option>Breakfast and Dinner</option>
									</select>
								</div>

								<!-- End -->
								<span class="txt9">
									End
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="date">
									<i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
								</div>

								<!-- Phone -->
								<span class="txt9">
									Phone
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Phone">
								</div>
									</div>
								
							<!-- Address -->
							
						<span class="txt9">
							Address
						</span>
						<textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="Address" placeholder="Address"></textarea>
					</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
								Book Table
							</button>
						</div>
					</form>
				</div>
				

				<div class="col-lg-6 p-b-30 p-t-18">
					<div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="images/booking-01.jpg" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>
				</div>
			</div>

		
		</div>
	</section>


	

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



@endsection
