@extends('layouts.admin')
@section('content')
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
          <li class="nav-item active ">
            <a class="nav-link" href='{{url("admin/tables")}}'>
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
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

                                        <div class="dl col-md-3" >
                                            <select class="custom-select" >
                                                <option value="0" selected>Regular</option>
                                                <option value="1">Weight Loss</option>
                                                <option value="2">Muscle Building</option>
                                                <option value="3">Special Needs</option>
                                            </select>
                                        </div>
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
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td class="text-primary">
                            $36,738
                          </td>
                           </td>
                          <td> Female </td>
                          <td><a class="btn btn-info text-white">Detail</a> </td>
                          <td><a class="btn btn-success text-white">Accept</a>
                              <a class="btn btn-danger text-white">Decline</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td class="text-primary">
                            $23,789
                          </td>
                           <td> Female </td>
                          <td><a class="btn btn-info text-white">Detail</a> </td>
                          <td><a class="btn btn-success text-white">Accept</a>
                              <a class="btn btn-danger text-white">Decline</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td class="text-primary">
                            $56,142
                          </td>
                          <td> Male </td>
                          <td><a class="btn btn-info text-white">Detail</a> </td>
                          <td><a class="btn btn-success text-white">Accept</a>
                              <a class="btn btn-danger text-white">Decline</a>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            

            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Weight Loss</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
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
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td class="text-primary">
                            $36,738
                          </td>
                           </td>
                          <td> Female </td>
                          <td><a class="btn btn-info text-white">Detail</a> </td>
                          <td><a class="btn btn-success text-white">Accept</a>
                              <a class="btn btn-danger text-white">Decline</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td class="text-primary">
                            $23,789
                          </td>
                           <td> Female </td>
                          <td><a class="btn btn-info text-white">Detail</a> </td>
                          <td><a class="btn btn-success text-white">Accept</a>
                              <a class="btn btn-danger text-white">Decline</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td class="text-primary">
                            $56,142
                          </td>
                          <td> Male </td>
                          <td><a class="btn btn-info text-white">Detail</a> </td>
                          <td><a class="btn btn-success text-white">Accept</a>
                              <a class="btn btn-danger text-white">Decline</a>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

         <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Special Needs</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
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
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td class="text-primary">
                            $36,738
                          </td>
                           </td>
                          <td> Female </td>
                          <td><a class="btn btn-info text-white">Detail</a> </td>
                          <td><a class="btn btn-success text-white">Accept</a>
                              <a class="btn btn-danger text-white">Decline</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td class="text-primary">
                            $23,789
                          </td>
                           <td> Female </td>
                          <td><a class="btn btn-info text-white">Detail</a> </td>
                          <td><a class="btn btn-success text-white">Accept</a>
                              <a class="btn btn-danger text-white">Decline</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td class="text-primary">
                            $56,142
                          </td>
                          <td> Male </td>
                          <td><a class="btn btn-info text-white">Detail</a> </td>
                          <td><a class="btn btn-success text-white">Accept</a>
                              <a class="btn btn-danger text-white">Decline</a>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Muscle Buildings</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
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
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td class="text-primary">
                            $36,738
                          </td>
                           </td>
                          <td> Female </td>
                          <td><a class="btn btn-info text-white">Detail</a> </td>
                          <td><a class="btn btn-success text-white">Accept</a>
                              <a class="btn btn-danger text-white">Decline</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td class="text-primary">
                            $23,789
                          </td>
                           <td> Female </td>
                          <td><a class="btn btn-info text-white">Detail</a> </td>
                          <td><a class="btn btn-success text-white">Accept</a>
                              <a class="btn btn-danger text-white">Decline</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td class="text-primary">
                            $56,142
                          </td>
                          <td> Male </td>
                          <td><a class="btn btn-info text-white">Detail</a> </td>
                          <td><a class="btn btn-success text-white">Accept</a>
                              <a class="btn btn-danger text-white">Decline</a>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
        


     @endsection
