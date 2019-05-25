@extends('layouts.admin')
@section('content')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href='{{url("admin/package")}}'>
              <i class="material-icons">dashboard</i>
              <p>Package</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href='{{url("admin/order")}}'>
              <i class="material-icons">content_paste</i>
              <p>Order List</p>
            </a>
          </li>
          <li class="nav-item">
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
                  <h4 class="card-title">Add Package</h4>
                </div>
                <div class="card-body">
                  <form enctype="multipart/form-data" method="POST" action="{{ route('package.store') }}">
                  @csrf
                    <div class="row">
                      <!-- Column -->
                    <div class=" col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Package Name</label>
                                        <div class="col-md-12">
                                            <input type="number" class="form-control form-control-line" name="package" required="required">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-12">Total Price</label>
                                        <div class="col-md-12">
                                            <input type="number" min="0"  class="form-control form-control-line" name="total_price" required="required">
                                        </div>
                                    </div>                                  
                                  </div>
                             <!-- File Button --> 
                             <button type="submit" class="btn btn-success pull-right">Save</button>
                             <a href="{{ route('package.index') }}" class="btn btn-danger pull-right">Back</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                      </div>  
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection