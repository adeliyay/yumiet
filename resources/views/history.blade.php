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
        
       

        <!-- User info -->
        <div class="panel panel-default">
          <div class="panel-heading">
          <h4 class="panel-title">Accepted</h4>
          </div>
          <div class="panel-body">
            <table class="table profile__table">
              <tbody>
                <tr>
                  <th><strong>Goals</strong></th>
                  <td>Weight Loss</td>
                </tr>
                <tr>
                  <th><strong>Menu</strong></th>
                  <td>A</td>
                </tr>
                <tr>
                  <th><strong>Time</strong></th>
                  <td>Breakfast</td>
                </tr>
                <tr>
                  <th><strong>Start</strong></th>
                  <td>28-08-2019</td>
                </tr>
                <tr>
                  <th><strong>End</strong></th>
                  <td>28-09-2019</td>
                </tr>
                 <tr>
                  <th><strong>Status</strong></th>
                  <td>Accepted</td>
                </tr>
                <tr>
                  <th>
                    <a href="#" class=" btn btn-lg btn-success col-md-4" data-toggle="modal" data-target="#profile__contact-form"> Received</a> 
                    <a href="#" class="profile__contact-btn btn btn-lg  btn-danger col-md-4" data-toggle="modal" data-target="#profile__contact-form"> Not Received</a> 
                    
                    </th>
                    <td><a href="#" class="profile__contact-btn btn btn-lg  btn-info col-md-7" data-toggle="modal" data-target="#profile__contact-form">
                    Add Review </a> </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- User info -->
        <div class="panel panel-default">
          <div class="panel-heading">
          <h4 class="panel-title">Not Accepted</h4>
          </div>
          <div class="panel-body">
            <table class="table profile__table">
              <tbody>
                <tr>
                  <th><strong>Goals</strong></th>
                  <td>Weight Loss</td>
                </tr>
                <tr>
                  <th><strong>Menu</strong></th>
                  <td>A</td>
                </tr>
                <tr>
                  <th><strong>Time</strong></th>
                  <td>Breakfast</td>
                </tr>
                <tr>
                  <th><strong>Start</strong></th>
                  <td>28-08-2019</td>
                </tr>
                <tr>
                  <th><strong>End</strong></th>
                  <td>28-09-2019</td>
                </tr>
              
                    <th><a href="#" class="profile__contact-btn btn btn-lg  btn-info col-md-7" data-toggle="modal" data-target="#profile__contact-form">
                    Upload Invoice </a> </th>
                    <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
  

      </div>
      <div class="col-xs-12 col-sm-3">
        
        <!-- Contact user -->
        <p>
          <a href="#" class="profile__contact-btn btn btn-lg btn-block btn-info" data-toggle="modal" data-target="#profile__contact-form">
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