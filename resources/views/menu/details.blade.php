@extends('layouts.app')
@section('content')
<body class="animsition">


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
		<h2 class="tit6 t-center">
			Detail
		</h2>
	</section>



	<!-- Gallery -->
	<div class="section-gallery p-t-118 p-b-100">
		<div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
			<!-- <button class="label-gallery txt26 trans-0-4 is-actived" data-filter=".i">
				All Photo
			</button> -->

			<button class="label-gallery txt26 trans-0-4" data-filter=".re1">
				Regular 1
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".re2">
				Regular 2
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".re3">
				Regular 3
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".re4">
				Regular 4
			</button>
		</div>

		<div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25 ">
			
			<!-- - -->
			
			<div class=" isotope-item bo-rad-10 hov-img-zoom re1">
				<div class="list-group">
          	<div class="list-group-item  ">
          		<div class="t-center"> <span class="txt9">
                  <h4>Regular 1</h4><br>
                </span></div>
          	<table>	
			<tr>
			<td class="size30">
				<div class="col-md-12">
			 	<img src="images/photo-gallery-14.jpg" alt="placehold.it/350x250" >  
            	</div>
            </td>
        	<td>
                <div class="col-sm-12">
                    <h4 class="txt5"> List group heading </h4>
                    <p class="txt23"> Test
                    </p>
                </div>
         	</td>
            </tr>
             <tr>
            <td class="size30">
            </td>
        	<td>
            	<button type="button" class="btn btn-success btn-lg  pull-right ">Choose</button>
         	</td>
            </tr>
			</table>
          	</div>
			</div>
		</div>
		
			<!-- - -->
			<div class=" isotope-item bo-rad-10 hov-img-zoom re2">
			<div class="list-group">
          	<div class="list-group-item  ">
          		<div class="t-center"> <span class="txt9">
                  <h4>Regular 2</h4><br>
                </span></div>
          	<table>
			<tr>
			<td class="size30">
				<div class="col-md-12">
			 	<img src="images/photo-gallery-14.jpg" alt="placehold.it/350x250" >  
            	</div>
            </td>
        	<td>
                <div class="col-sm-12">
                    <h4 class="txt5"> List group heading </h4>
                    <p class="txt23"> Test
                    </p>
                </div>
         	</td>
            </tr>
            <tr>
            <td class="size30">
            </td>
        	<td>
            	<button type="button" class="btn btn-success btn-lg  pull-right ">Choose</button>
         	</td>
            </tr>
			</table>
          	</div>
			</div>	
			</div>

		

			<!-- - -->
			<div class=" center isotope-item bo-rad-10 hov-img-zoom re3">
				<div class="list-group">
          	<div class="list-group-item  ">
          		<div class="t-center"> <span class="txt9">
                  <h4>Regular 3</h4><br>
                </span></div>
          	<table>
			<tr>
			<td class="size30">
				<div class="col-md-12">
			 	<img src="images/photo-gallery-14.jpg" alt="placehold.it/350x250" >  
            	</div>
            </td>
        	<td>
                <div class="col-sm-12">
                    <h4 class="txt5"> List group heading </h4>
                    <p class="txt23"> Test
                    </p>
                </div>
         	</td>
            </tr>
             <tr>
            <td class="size30">
            </td>
        	<td>
            	<button type="button" class="btn btn-success btn-lg  pull-right ">Choose</button>
         	</td>
            </tr>
			</table>
          	</div>
			</div>
			</div>

	

			<!-- - -->
			<div class=" isotope-item bo-rad-10 hov-img-zoom re4">
				<div class=" center list-group ">
          	<div class="list-group-item ">
          		<div class="t-center"> <span class="txt9">
                  <h4>Regular 4</h4><br>
                </span></div>
          	<table >
			<tr>
			<td class="size30">
				<div class="col-md-12">
			 	<img src="images/photo-gallery-14.jpg" alt="placehold.it/350x250" >  
            	</div>
            </td>
        	<td>
                <div class="col-sm-12">
                    <h4 class="txt5"> List group heading </h4>
                    <p class="txt23"> Test
                    </p>
                </div>
         	</td>
            </tr>

            <tr>
			<td class="size30">
				<div class="col-md-12">
			 	<img src="images/photo-gallery-14.jpg" alt="placehold.it/350x250" >  
            	</div>
            </td>
        	<td>
                <div class="col-sm-12">
                    <h4 class="txt5"> List group heading </h4>
                    <p class="txt23"> Test
                    </p>
                </div>
         	</td>
            </tr>

            <tr>
            <td class="size30">
            </td>
        	<td>
            	<button type="button" class="btn btn-success btn-lg  pull-right ">Choose</button>
         	</td>
            </tr>

			</table>

          	</div>
          
			</div>
			</div>

		</div>		
			
       
      <br>

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
