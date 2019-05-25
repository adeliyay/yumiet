@extends('layouts.app')
@section('content')


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{asset('images/bg-title-page-01.jpg')}});">
    <h2 class="tit6 t-center">
      History
    </h2>
  </section>
  <br>

<div class="container">
<div class="row">
      <div class="col-xs-12 col-sm-9">
        
        <!-- User info -->
        <div class="panel panel-default">
          <div class="panel-heading">
          <h4 class="panel-title"><span class="txt9">
                  <h3>Accepted</h3>
                </span></h4>
          </div>
          <div class="panel-body">
            @foreach($finish as $finish)
            <table class="table profile__table">
              <tbody>
                <tr>
                  <th><strong>Goals</strong></th>
                  <td>{{ $finish->goals }}</td>
                </tr>
                <tr>
                  <th><strong>Package</strong></th>
                  <td>{{ $finish->package }}</td>
                </tr>
                <tr>
                  <th><strong>Time</strong></th>
                  <td>{{ $finish->time }}</td>
                </tr>
                <tr>
                  <th><strong>Start</strong></th>
                  <td>{{ $finish->start }}</td>
                </tr>
                <tr>
                  <th><strong>Days</strong></th>
                  <td>{{ $finish->days }}</td>
                </tr>
                 <tr>
                  <th><strong>Status</strong></th>
                  <td>Accepted</td>
                </tr>
                <tr>
                  <th>
                   
                    
                    </th>
                    <td><a href='{{url("/review")}}' class=" btn btn-lg  btn-info col-md-7">
                    Add Review </a> </td>
                </tr>
              </tbody>
            </table>
             @endforeach
          </div>
        </div>
       
        
         <!-- User info -->
         <div class="panel panel-default">
          <div class="panel-heading">
          <h4 class="panel-title"><span class="txt9">
                  <h3>In progress</h3>
                </span></h4>
          </div>
          <div class="panel-body">
            @foreach($progress as $progress)
            <table class="table profile__table">
              <tbody>
                <tr>
                  <th><strong>Goals</strong></th>
                  <td>{{ $progress->goals }}</td>
                </tr>
                <tr>
                  <th><strong>Package</strong></th>
                  <td>{{ $progress->package }}</td>
                </tr>
                <tr>
                  <th><strong>Time</strong></th>
                  <td>{{ $progress->time }}</td>
                </tr>
                <tr>
                  <th><strong>Start</strong></th>
                  <td>{{ $progress->start }}</td>
                </tr>
                <tr>
                  <th><strong>Days</strong></th>
                  <td>{{ $progress->days }}</td>
                </tr>
                 <tr>
                  <th><strong>Status</strong></th>
                  <td>In progress</td>
                </tr>
                <tr>
                  <th>
                    <a href="#" class=" btn btn-lg btn-success col-md-4" > Received</a> 
                    <a href="#" class="profile__contact-btn btn btn-lg  btn-danger col-md-4" > Not Received</a> 
                    
                    </th>
                    
                </tr>
              </tbody>
            </table>
            @endforeach
          </div>
        </div>
        
        
        <!-- User info -->
        @foreach($unverified as $unverified)
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
                  <td>{{ $unverified->goals }}</td>
                </tr>
                <tr>
                  <th><strong>Package</strong></th>
                  <td>{{ $unverified->package }}</td>
                </tr>
                <tr>
                  <th><strong>Time</strong></th>
                  <td>{{ $unverified->time }}</td>
                </tr>
                <tr>
                  <th><strong>Start</strong></th>
                  <td>{{ $unverified->start }}</td>
                </tr>
                <tr>
                  <th><strong>Days</strong></th>
                  <td>{{ $unverified->days }}</td>
                </tr>
               </tbody>
            </table>
            @if($unverified->payment==null)
            <a href="{{ route('transaction.edit',$unverified->id) }}" class="btn btn-success pull-right">Pay Now</a>
            @else
            <a>Waiting Verify</a>
            @endif 
          </div>
        </div>
        @endforeach
      </div>
       
      <div class="col-xs-12 col-sm-3">
       
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