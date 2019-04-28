
@extends('layouts.app')
@section('content')
	


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-03.jpg);">
		<h2 class="tit6 t-center">
			About Us
		</h2>
	</section>


	<!-- Our Story -->
	<section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
		<span class="tit2 t-center">
			Yumiet Catering
		</span>

		<h3 class="tit3 t-center m-b-35 m-t-5">
			Our Story
		</h3>

		<p class="t-center size32 m-l-r-auto">
			Fusce at risus eget mi auctor pulvinar. Suspendisse maximus venenatis pretium. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam purus purus, lacinia a scelerisque in, luctus vel felis. Donec odio diam, dignissim a efficitur at, efficitur et est. Pellentesque semper est ut pulvinar ullamcorper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla et leo accumsan, egestas velit ac, fringilla tortor. Sed varius justo sed luctus mattis.
		</p>
	</section>


	<!-- Chef -->
	<section class="section-chef bgwhite p-t-115 p-b-95">
		<div class="container t-center">
			<span class="tit2 t-center">
				Meet Our
			</span>

			<h3 class="tit5 t-center m-b-50 m-t-5">
				Chef
			</h3>

			<div class="row">
				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="images/avatar-02.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Peter Hart
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								Chef
							</span>

							<p class="t-center">
								Donec porta eleifend mauris ut effici-tur. Quisque non velit vestibulum, lob-ortis mi eget, rhoncus nunc
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="images/avatar-03.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Joyce Bowman
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								Chef
							</span>

							<p class="t-center">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultricies felis a sem tempus tempus.
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="images/avatar-05.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Peter Hart
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								Chef
							</span>

							<p class="t-center">
								Phasellus aliquam libero a nisi varius, vitae placerat sem aliquet. Ut at velit nec ipsum iaculis posuere quis in sapien
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
		<h2 class="tit6 t-center">
			Contact
		</h2>
	</section>



	<!-- Contact form -->
	<section class="section-contact bg1-pattern p-t-90 p-b-113">
		<!-- Map -->

		<div class="container">
			<h3 class="tit7 t-center p-b-62 p-t-105">
				Send us a Message
			</h3>

			<form class="wrap-form-reservation size22 m-l-r-auto">
				<div class="row">
					<div class="col-md-4">
						<!-- Name -->
						<span class="txt9">
							Name
						</span>

						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Name">
						</div>
					</div>

					<div class="col-md-4">
						<!-- Email -->
						<span class="txt9">
							Email
						</span>

						<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
						</div>
					</div>

					<div class="col-md-4">
						<!-- Phone -->
						<span class="txt9">
							Phone
						</span>

						<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Phone">
						</div>
					</div>

					<div class="col-12">
						<!-- Message -->
						<span class="txt9">
							Message
						</span>
						<textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="message" placeholder="Message"></textarea>
					</div>
				</div>

				<div class="wrap-btn-booking flex-c-m m-t-13">
					<!-- Button3 -->
					<button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
						Submit
					</button>
				</div>
			</form>

			<div class="row p-t-135">
				<div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/map-icon.png" alt="IMG-ICON">
						</div>

						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Location
							</span>

							<span class="txt23 size38">
								8th floor, 379 Hudson St, New York, NY 10018
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/phone-icon.png" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Call Us
							</span>

							<span class="txt23 size38">
								(+1) 96 716 6879
							</span>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
					<div class="dis-flex m-l-23">
						<div class="p-r-40 p-t-6">
							<img src="images/icons/clock-icon.png" alt="IMG-ICON">
						</div>


						<div class="flex-col-l">
							<span class="txt5 p-b-10">
								Opening Hours
							</span>

							<span class="txt23 size38">
								09:30 AM – 11:00 PM <br/>Every Day
							</span>
						</div>
					</div>
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
			<button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
				ORDER
			</button>
		</form>
	</div>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>



@endsection
