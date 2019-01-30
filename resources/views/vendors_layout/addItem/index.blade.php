@extends('layouts.vendor')

@section('content22')

	<div class="card card-outline-success">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Add Products to<b>Driver</b></h4>
                </div>
                <div class="card-body">
                	 {{--Register drivers license item--}}
                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                                                <div class="ribbon-wrapper-reverse card" style="box-shadow: 5px 5px 5px 5px #888888">
                                                    <div class="ribbon ribbon-bookmark ribbon-right ribbon-danger">Please Select Item to be added to this driver License</div>
                                                    <form class="form-horizontal" role="form" action="{{url('/admin/save')}}" method="POST">
                                                         {{ csrf_field() }}
                                    @if(session('success_item_msgs'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <p>{{ session('success_item_msgs') }}</p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                     @if(session('alert_item_reg'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <p>{{ session('alert_item_reg') }}</p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                     @if(session('error_item_msgs'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <p>{{ session('error_item_msgs') }}</p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="control-label col-md-12"><b>Select Item</b></label><br>
                        <select class="form-control" name="item_id">
                            @foreach($category as $categories)
                            <option value="{{$categories->id}}">{{strtoupper($categories->name)}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                            <label class="control-label text-right col-md-12"><b>Select Driver</b></label>
                                <select class="form-control" name="driver_id">
                                    @foreach($drivers as $driver_id)
                            <option value="{{$driver_id->id}}">{{strtoupper($driver_id->fname)}} {{strtoupper($driver_id->lname)}}</option>
                        @endforeach
                                </select>
                    </div>
                </div>
            <br>

                <hr class="m-t-0 m-b-40">
                <!--/row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">Barcode </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Barcode" name="barcode">
                            </div>
                             
                        </div>
                            <span style="color:red">
                                     @foreach($errors->get('barcode') as $message)
                                       <li>{{$message}}</li>
                                   @endforeach
                            </span>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">Serial Number</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Serial Number" name="serial_number">
                            </div>
                        </div>
                            <span style="color:red">
                                     @foreach($errors->get('serial_number') as $message)
                                       <li>{{$message}}</li>
                                   @endforeach
                            </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">Date Registered</label>
                            <div class="col-md-9">
                                <input type="date" class="form-control" placeholder="MM/DD/YYYY" name="date_reg">
                            </div>
                        </div>
                            <span style="color:red">
                                     @foreach($errors->get('date_reg') as $message)
                                       <li>{{$message}}</li>
                                   @endforeach
                            </span>
                    </div>
                    <!--/span-->
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">Expiry Date</label>
                            <div class="col-md-9">
                                <input type="date" class="form-control" placeholder="MM/DD/YYYY" name="item_expiry_date">
                            </div>
                        </div>
                            <span style="color:red">
                                     @foreach($errors->get('item_expiry_date') as $message)
                                       <li>{{$message}}</li>
                                   @endforeach
                            </span>
                    </div>
                    <!--/span-->
                </div>
                <hr class="m-t-0 m-b-40">

                <div class="form-actions">
                    <button class="btn btn-outline-success col-lg-12"> <i class="fa fa-check"></i><b>Add Item</b></button>

                </div>

            </div>



        </form>
    </div>




</div>
<!-- View Register Item with products -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="ribbon-wrapper-reverse card" style="box-shadow: 5px 5px 5px 5px #888888">
        <div class="ribbon ribbon-bookmark ribbon-right ribbon-default">View /Renew Product Added to Driver</div>

            <div class="row m-t-40">
                                    <!-- Column -->
                                    <div class="col-md-12 col-lg-12 col-xlg-12">
                                        <a href="{{url('admin/view')}}">
                                        <div class="card">
                                            <div class="box bg-warning text-center">
                                                <h1 class="font-light text-white">{{(new \App\Http\Controllers\VendorController)->driver_with_product()}}</h1>
                                                <h6 class="text-white">View /Renew Product Added to Driver</h6>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                    <!-- Column -->
                                    <!-- <div class="col-md-12 col-lg-12 col-xlg-12">
                                        <div class="card">
                                            <div class="box bg-primary text-center">
                                                <h1 class="font-light text-white">1,738</h1>
                                                <h6 class="text-white">Total No Drivers assigned to Products</h6>
                                            </div>
                                        </div>
                                    </div> -->
                         </div>
        
    </div>
</div>
<!-- Ends register Item with Products --> 
</div>
{{--Register drivers lincese item ends here--}}

                                



                                
                </div>
    </div>


@stop