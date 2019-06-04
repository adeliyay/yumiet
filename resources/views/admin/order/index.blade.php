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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title d-md-flex align-items-center ">Order</h4>
                  <div class="ml-auto">
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Goals
                        </th>
                        <th>
                          Time
                        </th>
                        <th>
                          Start
                        </th>
                        <th>
                          End
                        </th>
                        <th>
                          Gender
                        </th>
                        <th>
                          Detail
                        </th>
                        <th>
                          Verify Status
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                     <tbody>
                     @foreach($transaction as $key=>$transaction)
                      <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $transaction->name }}</td>
                                <td>{{ $transaction->goals }}</td>
                                <td>{{ $transaction->time }}</td>
                                <td>{{ $transaction->start }}</td>
                                <td>{{ $transaction->days }}</td>
                                <td>{{ $transaction->gender }}</td>
                                <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/menu/'.$transaction->payment) }}" style="height: 100px; width: 100px" alt=""></td>
                      <td>
                                  @if($transaction->is_verified == "1" )
                                    <span class="label label-info">Confirmed</span>
                                  @else
                                    <span class="label label-danger">Not Confirmed Yet</span>
                                  @endif
                                </td>
                  
                                <td>
                                  @if($transaction->is_verified == "0")  
                                      <form id="status-form-{{ $transaction->id }}" 
                                      action="{{ route('order.status', $transaction->id)}}" style="" method="POST">
                                      @csrf
                                      </form>
                                    <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Are you sure verify this order?')){
                                      event.preventDefault();
                                      document.getElementById('status-form-{{ $transaction->id }}').submit();
                                    }else {
                                      event.preventDefault();}"><i class="material-icons">done</i></button>
                                  @endif
                                  <form id="delete-form-{{ $transaction->id }}" 
                                  action="{{ route('order.destroy', $transaction->id)}}" style="..." method="POST">
                                  @csrf
                                  @method('DELETE')
                                  </form>
                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{ $transaction->id }}').submit();
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
