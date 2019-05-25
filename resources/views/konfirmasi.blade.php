@extends('layouts.app')
@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
              
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/photo-gallery01.jpg" class=" img-responsive"><?php echo "Package ".$package['package']; ?><br> Rp 50.000</div>
              
               <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><strong>Goals</strong></td>
                        <td><?php echo "".$order['goals']; ?></td>
                      </tr>
                      <tr>
                        <td><strong>Start</strong></td>
                        <td><?php echo "".$order['start']; ?></td>
                      </tr>
                      <tr>
                        <td><strong>Days</strong> </td>
                        <td><?php echo "".$order['days']; ?></td>
                      </tr>
                      <tr>
                        <td><strong>Time</strong> </td>
                        <td><?php echo "".$order['time']; ?></td>
                      </tr>
                          <tr>
                        <td><strong>Gender</strong></td>
                        <td><?php echo "".$order['gender']; ?></td>
                      </tr>
                        <tr>
                        <td><strong>Address</strong></td>
                        <td><?php echo "".$order['address']; ?></td>
                      </tr>
                        <td><strong>Phone Number</strong></td>
                        <td><?php echo "".$order['phone']; ?><br>
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
          <form action="{{ route('order.ordered') }}" method="post" style="display: inline-block;">
          @csrf
            <input type="hidden" id="goals" name="goals" value=<?php echo $order['goals']; ?>>
            <input type="hidden" id="package" name="package" value=<?php echo $package['package']; ?>>
            <input type="hidden" id="time" name="time" value=<?php echo $order['time']; ?>>
            <input type="hidden" id="start" name="start" value=<?php echo $order['start']; ?>>
            <input type="hidden" id="days" name="days" value=<?php echo $order['days']; ?>>
            <input type="hidden" id="gender" name="gender" value=<?php echo $order['gender']; ?>>
            <input type="hidden" id="phone" name="phone" value=<?php echo $order['phone']; ?>>
            <input type="hidden" id="address" name="address" value=<?php echo $order['address']; ?>>
        <!-- <button type="button" href='/edit?>' class="btn btn-primary">Edit</button> -->
        <button type="submit" class="btn btn-success">Confirm</button>

      </form>
                 
                  <!-- <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                  <a href='{{url("history")}}' class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Confirm</a> -->
                 
                </div>
              </div>
            </div>
           
            
          </div>
        </div>
      </div>
    </div>
         @endsection