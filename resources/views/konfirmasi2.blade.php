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
                  <h2>Thanks for your order</h2>
                </span>
            </div>
            <div class="panel-body">
              <div class="row">
              
              
               <div class=" col-md-9 col-lg-9 "> 
          <form action="{{ route('transaction.create') }}" method="post" style="display: inline-block;">
          @csrf
            <input type="hidden" id="order_id" name="order_id" value="$order_id">
        <!-- <button type="button" href='/edit?>' class="btn btn-primary">Edit</button> -->
        <button type="submit" class="btn btn-success">Next</button>

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