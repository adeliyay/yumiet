@extends('layouts.admin')
@section('content')
      <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href='{{url("admin")}}' class="simple-text logo-normal">
          Admin page
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item   ">
            <a class="nav-link" href='{{url("admin/package")}}'>
              <i class="material-icons">dashboard</i>
              <p>Package</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href='{{url("admin/order")}}'>
              <i class="material-icons">content_paste</i>
              <p>Order List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href='{{url("admin/menu")}}'>
              <i class="material-icons">library_books</i>
              <p>Menu</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Order</h4>
                </div>
                <div class="card-body">
                <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/photo-gallery01.jpg" class=" img-responsive"> Regular A <br> Rp 50.000</div>
               <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                    <tr>
                        <td><strong>Name</strong></td>
                        <td>UI/UX</td>
                      </tr>
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
                        <td>0812345678
                        </td>  
                      </tr>
                     
                    </tbody>
                  </table>
                  <a href='{{url("history")}}' class="btn btn-success pull-right"><i class="glyphicon glyphicon-ok"></i> Accept</a>
                  <a href="#" class="btn btn-danger pull-right"><i class="glyphicon glyphicon-edit"></i> Decline</a>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
            
          </div>


        </div>
      </div>
            

           


     @endsection
