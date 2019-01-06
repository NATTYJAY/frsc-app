@extends('layouts.admin')

@section('content')

	<div class="card card-outline-success">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Vehicle Inspection for <b>ADAMU ADAMU</b></h4>
                </div>
                <div class="card-body">
                	 {{--Register Vehicle Here--}}

                                <form action="{{url('/registerVehicle')}}" class="form-horizontal" method="POST"> 
                                	  {{ csrf_field() }}

                                	@if(session('success_msgs'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <p>{{ session('success_msgs') }}</p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                    @if(session('already_reg'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <p>{{ session('already_reg') }}</p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                     @if(session('error_msgs'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <p>{{ session('error_msgs') }}</p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                	  <input type="hidden" name="_method" value="POST">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3 class="box-title">Vehicle License Registration</h3>
                                            </div>
                                        </div>

                                        <hr class="m-t-0 m-b-40">
                                        
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6" hidden="hidden">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3"></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Registration Number" value="{{$driver_id}}" name="driver_id">
                                                    </div>
        											
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Engine Capacity</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Engine Capacity" name="engine_capacity" value="{{old('engine_capacity')}}">
                                                          <span style="color:red">
                                                         @foreach($errors->get('engine_capacity') as $message)
                                                           <li>{{$message}}</li>
                                                       @endforeach
                                                    </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Engine Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Engine Number" name="engine_number" value="{{old('engine_number')}}">

                                                         <span style="color:red">
                                                         @foreach($errors->get('engine_number') as $message)
                                                           <li>{{$message}}</li>
                                                       @endforeach
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Chasis Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Chasis Number" name="chasis_number" value="{{old('chasis_number')}}">
                                                         <span style="color:red">
                                                         @foreach($errors->get('chasis_number') as $message)
                                                           <li>{{$message}}</li>
                                                       @endforeach
                                                    	</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        {{--<h3 class="box-title"></h3>--}}
                                        <hr class="m-t-0 m-b-40">
                                        <!--/row-->
                                        <div class="row">
                                           
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Vehicle Make</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Vehicle Make" name="vehicle_make" value="{{old('vehicle_make')}}">
                                                        <span style="color:red">
                                                         @foreach($errors->get('vehicle_make') as $message)
                                                           <li>{{$message}}</li>
                                                       @endforeach
                                                    	</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Vehicle Colour</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Vehicle Colour" name="vehicle_color" value="{{old('vehicle_color')}}">
                                                        <span style="color:red">
                                                         @foreach($errors->get('vehicle_color') as $message)
                                                           <li>{{$message}}</li>
                                                       @endforeach
                                                    	</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">License Fee</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="License Fee" name="license_fee" value="{{old('license_fee')}}">
                                                        <span style="color:red">
                                                         @foreach($errors->get('license_fee') as $message)
                                                           <li>{{$message}}</li>
                                                       @endforeach
                                                    	</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->

                                        <!--/row-->
                                    </div>

                                    <h3 class="box-title">License</h3>
                                    <hr class="m-t-0 m-b-40">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Issued Date</label>
                                                <div class="col-md-9">
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="license_date" value="{{old('license_date')}}">
                                                    <span style="color:red">
                                                         @foreach($errors->get('license_date') as $message)
                                                           <li>{{$message}}</li>
                                                       @endforeach
                                                    	</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Expiry Date</label>
                                                <div class="col-md-9">
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="license_expiry_date" value="{{old('license_expiry_date')}}">
                                                     <span style="color:red">
                                                         @foreach($errors->get('license_expiry_date') as $message)
                                                           <li>{{$message}}</li>
                                                       @endforeach
                                                    	</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> </div>
                                        </div>
                                    </div>
                                </form>

                                {{--Register Vehicle Ends Here--}}
                </div>
    </div>


	@stop