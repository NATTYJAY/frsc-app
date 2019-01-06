@extends('layouts.admin')

@section('content')

	<div class="card card-outline-success">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Vehicle Inspection for <b>ADAMU ADAMU</b></h4>
                </div>
                <div class="card-body">
                	 {{--Register drivers license item--}}
                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                <div class="ribbon-wrapper-reverse card" style="box-shadow: 5px 5px 5px 5px #888888">
                                                    <div class="ribbon ribbon-bookmark ribbon-right ribbon-danger">Please Select Item to be added to this driver License</div>
                                                    <form class="form-horizontal" role="form" action="{{url('/registerItem')}}" method="POST">
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
                                                                <div class="col-md-4">

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="control-label col-md-12"><b>Select Item</b></label><br>
                                                                    <select class="form-control" name="items">
                                                                @foreach($categories as $category)
                                                                        <option value="{{$category->id}}">{{strtoupper($category->name)}}</option>
                                                                    @endforeach


                                                                    </select>
                                                                </div>
                                                               
                                            <div class="col-md-4" hidden="hidden">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3"></label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Registration Number" value="{{$driver_id}}" name="driver_id">
                                                    </div>
                                                </div>
                                            </div>
                                                            </div><br>

                                                            <hr class="m-t-0 m-b-40">
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Barcode </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="Barcode" name="barcode">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Serial Number</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="Serial Number" name="serial_number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Date Registered</label>
                                                                        <div class="col-md-9">
                                                                            <input type="date" class="form-control" placeholder="MM/DD/YYYY" name="date_reg">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Expiry Date</label>
                                                                        <div class="col-md-9">
                                                                            <input type="date" class="form-control" placeholder="MM/DD/YYYY" name="item_expiry_date">
                                                                        </div>
                                                                    </div>
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
                                </div>
                                {{--Register drivers lincese item ends here--}}
                </div>
    </div>


	@stop