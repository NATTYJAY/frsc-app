@extends('layouts.vendor')

@section('content22')

<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               

                    <div class="row">
                        <div class="col-lg-6">

                         <div class="row m-t-40">
                                    <!-- Column -->
                                    <div class="col-md-12 col-lg-12 col-xlg-12">
                                        <div class="card">
                                            <div class="box bg-info text-center">
                                                <h1 class="font-light text-white">{{(new \App\Http\Controllers\VendorController)->count_product()}}</h1>
                                                <h6 class="text-white">Of Your Total Product is Added</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-12 col-lg-12 col-xlg-12">
                                        <div class="card">
                                            <div class="box bg-primary text-center">
                                                <h1 class="font-light text-white">{{(new \App\Http\Controllers\VendorController)->driver_with_product()}}</h1>
                                                <h6 class="text-white">Total No Drivers assigned to Products</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <div class="card" style="box-shadow: 5px 5px 5px 5px #888888">
                <div class="card-body">
                     
                      @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p>{{ session('success') }}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                      @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p>{{ session('error') }}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                     <div class="col-md-12 col-lg-12 col-xlg-12">
                                    <a href="{{url('product/1')}}">
                                        <div class="card">
                                            <div class="box bg-warning text-center">
                                                <h6 class="text-white"><b>View/Edit Your Product</b></h6>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                    <form class="form-horizontal" role="form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6 col-md-6-offset">
                                    <h4 class="box-title">Add Product </h4>
                                </div>

                            </div>
                            <hr class="m-t-0 m-b-40">
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Item Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Item Name">
                                    </div>
                                    <span style="color:red">
                                                 @foreach($errors->get('name') as $message)
                                                   <li>{{$message}}</li>
                                               @endforeach
                                    </span>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <input type="text" id="Description" class="form-control form-control" name="description" placeholder="Description" >
                                    </div>
                                    <span style="color:red">
                                                 @foreach($errors->get('description') as $message)
                                                   <li>{{$message}}</li>
                                               @endforeach
                                    </span>
                                </div>

                                 <input type="file" id="input-file-now-custom-2" class="dropify" data-height="100" name="image_path" />
                                <!--/span-->
                            </div>
                            <br>
                            <div class="form-actions">
                                <button type="submit" name="submit" class="btn btn-outline-success col-lg-12"> <i class="fa fa-check"></i> Save</button>

                            </div>

                            <!--/row-->

                            <!--/row-->

                            <!--/row-->

                        </div>

                    </form>

                </div>

            </div>
                                <!-- <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Add Product</h4>
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname2" placeholder="Enter Product Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter Product Description">
                                            </div>
                                             <div class="form-group">
                                                <div class="col-md-9">
                                                    <input type="file" id="input-file-now-custom-2" class="dropify" data-height="100" name="image_path" />
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-info">Save</button>
                                        </form>
                                    </div>
                                </div> -->
                            </div>
                          
                            
                    </div>
                            </div>
                                
                        </div>
                    </div>
            </div>

@stop
