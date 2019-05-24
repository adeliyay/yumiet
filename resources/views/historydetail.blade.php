@extends('layouts.app')
@section('content')

<head>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>

<!-- Title Page -->
  <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-01.jpg);">
    <h2 class="tit6 t-center">
      History
    </h2>
  </section>
  <br>
<div class="container">
<div class="row">
      <div class="col-xs-12 col-sm-9">
       
      @foreach($order as $orders)
        <!-- User info -->
        <div class="panel panel-default">
          <div class="panel-heading">
          <h4 class="panel-title"><span class="txt9">
                  <h3>Unverified</h3>
                </span></h4>
          </div>
          <div class="panel-body">
            <table class="table profile__table">
              <tbody>
                <tr>
                  <th><strong>Goals</strong></th>
                  <td>{{ $orders->goals }}</td>
                </tr>
                <tr>
                  <th><strong>Package</strong></th>
                  <td>{{ $orders->package }}</td>
                </tr>
                <tr>
                  <th><strong>Time</strong></th>
                  <td>{{ $orders->time }}</td>
                </tr>
                <tr>
                  <th><strong>Start</strong></th>
                  <td>{{ $orders->start }}</td>
                </tr>
                <tr>
                  <th><strong>Days</strong></th>
                  <td>{{ $orders->days }}</td>
                </tr>
               </tbody>
            </table>
          <form action="" method="post" action="{{ route('payment.store',$transaction) }}" enctype="multipart/form-data" id="js-upload-form">
          {{ csrf_field() }}
                <input type="file" name="payment" id="js-upload-files" multiple>
              <button type="submit" class="profile__contact-btn btn btn-lg btn-info col-md-3" id="js-upload-submit">Upload Invoice</button>
            </div>
          </form> 
                
              
          </div>
        </div>
  

      </div>
      <div class="col-xs-12 col-sm-3">
        @endforeach
        <!-- Contact user -->
        <p>
          <a href="#" class="profile__contact-btn btn btn-lg btn-block btn-info">
            Contact Admin
          </a>
        </p>

        <hr class="profile__contact-hr">
        
        <!-- Contact info -->
        <div class="profile__contact-info">
          <div class="profile__contact-info-item">
            <div class="profile__contact-info-icon">
              <i class="fa fa-phone"></i>
            </div>
            <div class="profile__contact-info-body">
              <h5 class="profile__contact-info-heading">Work number</h5>
              (000)987-65-43
            </div>
          </div>
          <div class="profile__contact-info-item">
            <div class="profile__contact-info-icon">
              <i class="fa fa-phone"></i>
            </div>
            <div class="profile__contact-info-body">
              <h5 class="profile__contact-info-heading">Mobile number</h5>
              (000)987-65-43
            </div>
          </div>
          <div class="profile__contact-info-item">
            <div class="profile__contact-info-icon">
              <i class="fa fa-envelope-square"></i>
            </div>
            <div class="profile__contact-info-body">
              <h5 class="profile__contact-info-heading">E-mail address</h5>
              <a href="mailto:admin@domain.com">admin@domain.com</a>
            </div>
          </div>
          <div class="profile__contact-info-item">
            <div class="profile__contact-info-icon">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="profile__contact-info-body">
              <h5 class="profile__contact-info-heading">Work address</h5>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

     @endsection