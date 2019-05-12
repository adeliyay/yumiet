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
          <li class="nav-item   ">
            <a class="nav-link" href='{{url("admin")}}'>
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href='{{url("admin/tables")}}'>
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item ">
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
                  <h4 class="card-title d-md-flex align-items-center ">Order</h4>
                  <a href='{{url("admin/menu/create")}}' class="btn btn-info text-white pull-right">Add Menu</a>
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
                          Package
                        </th>
                        <th>
                          Price
                        <th>
                          Description
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      @foreach($menus as $key=>$menu)
                      <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $menu->name }}</td>
                                <td>{{ $menu->package }}</td>
                                <td>{{ $menu->goals }}</td>
                                <td>{{ $menu->price }}</td>
                                <td>{{ $menu->description }}</td>
                                <td>{{ $menu->image }}</td>
                      </tr>
                      <td>
                                <a href="{{ route('menu.edit',$menu->id) }}" class="btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                  <form id="delete-form-{{ $menu->id }}" action="{{ route('menu.destroy',$menu->id) }}" style="display: none;" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  </form>
                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{ $menu->id }}').submit();
                                }else {
                                  event.preventDefault();
                                }"><i class="material-icons">delete</i></button>
                              </td>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            


        

       @endsection
