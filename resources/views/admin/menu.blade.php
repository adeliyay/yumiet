@extends('layouts.admin')
@section('content')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Menu</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <!-- Column -->
                    <div class=" col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Name</label>
                                        <div class="col-md-12">
                                            <input type="text"  class="form-control form-control-line">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-12">Package</label>
                                        <div class="col-md-12">
                                            <input type="text"  class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Goals</label>
                                        <div class="col-sm-12 dropdown">
                                            <select class="form-control form-control-line">
                                                <option>Regular</option>
                                                <option>Weight Loss</option>
                                                <option>Special Needs</option>
                                                <option>Muscle Building</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Price</label>
                                        <div class="col-md-12">
                                            <input type="number" min="0" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Description</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                      <label class="col-md-12">Image</label>
                                      <div class="col-md-12">
                                   <label class="col-md-4 control-label form-control form-control-line" for="filebutton">Select Image</label>
                                  <div class="col-md-4">
                                 <input id="filebutton" name="filebutton" class="input-file" type="file">
                                  </div>
                               </div>
                             
                             <!-- File Button --> 
  
                                  <button type="submit" class="btn btn-success pull-right">Update Menu</button>
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
