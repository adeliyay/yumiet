@extends('layouts.app')
@section('content')


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-01.jpg);">
    <h2 class="tit6 t-center">
      Confirm
    </h2>
  </section>

<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           
       <br>
<p class=" text-info"> </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
             <div class="panel panel-info">
            <div class="panel-heading">
              <span class="txt9">
                  <h2>Confirm Your Order</h2>
                </span>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/photo-gallery01.jpg" class=" img-responsive"> Regular A <br> Rp 50.000</div>
               <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><strong>Goals</strong></td>
                        <td>UI/UX</td>
                      </tr>
                      <tr>
                        <td><strong>Start</strong></td>
                        <td>06/23/2018</td>
                      </tr>
                      <tr>
                        <td><strong>End</strong> </td>
                        <td>06/14/2019</td>
                      </tr>
                      <tr>
                        <td><strong>Time</strong> </td>
                        <td>Breakfast</td>
                      </tr>
                          <tr>
                        <td><strong>Gender</strong></td>
                        <td>Male</td>
                      </tr>
                        <tr>
                        <td><strong>Address</strong></td>
                        <td>KMC flat.# 7 Nazimabad No.# 4 Near Hadi Market , Karachi, Sindh, Pakistan</td>
                      </tr>
                        <td><strong>Phone Number</strong></td>
                        <td>0812345678<br>(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                  <a href='{{url("history")}}' class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Confirm</a>
                </div>
              </div>
            </div>
                 
            
          </div>
        </div>
      </div>
    </div>

         @endsection