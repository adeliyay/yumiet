@extends('layouts.admin')

@section('title','Menu')

@push('css')
    
@endpush 
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
            <a class="nav-link" href='{{url("admin/menu")}}' >
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title d-md-flex align-items-center ">Package</h4>
                  <a href='{{url("admin/package/create")}}' class="btn btn-info text-white pull-right">Add Package</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Package Name
                        </th>
                        <th>
                          Total Price
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      @foreach($packages as $key=>$package)
                      <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $package->package }}</td>
                                <td>{{ $package->total_price }}</td>
                      <td>
                                <a href="{{ route('package.edit',$package->id) }}" class="btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                                  <form id="delete-form-{{ $package->id }}" action="{{ route('package.destroy',$package->id) }}" style="display: none;" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  </form>
                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{ $package->id }}').submit();
                                }else {
                                  event.preventDefault();
                                }"><i class="material-icons">delete</i></button>
                              </td>
                      </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
       @endsection
