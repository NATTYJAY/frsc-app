@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Renew Drivers License</h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-body">
                           
                            <div class="row">
                                <div class="col-md-4">
                               Plate Number :<h3 class="box-title">{{$drivers->plate_number}}</h3>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4" style="float:right;">
                                     <img src="/imagess/{{$drivers->image_path}}" alt="user" width="100">
                                </div>
                            </div>

                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">First Name:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$drivers->fname}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Last Name:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$drivers->lname}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Gender:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$drivers->gender}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Date of Birth:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$drivers->dob}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">NOK Phone</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$drivers->nok}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Height:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$drivers->height}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <h3 class="box-title">Address</h3>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Address:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$drivers->address}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row"> -->
                                <!-- <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">City:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> Bhavnagar </p>
                                        </div>
                                    </div>
                                </div> -->
                                <!--/span-->
                               <!--  <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">State:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> Gujarat </p>
                                        </div>
                                    </div>
                                </div> -->
                                <!--/span-->
                            <!-- </div> -->
                            <!--/row-->
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Post Code:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> 457890 </p>
                                        </div>
                                    </div>
                                </div> -->
                                <!--/span-->
                              <!--  -->
                                <!--/s  <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Country:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> India </p>
                                        </div>
                                    </div>
                                </div>pan-->
                            <!-- </div> -->
                        </div>
                        @include('includes.driverEditModal')
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="button" class="btn btn-danger updatedriver" id = "{{$drivers->id}}"> <i class="fa fa-pencil"></i> Edit</button>
                                            <button type="button" class="btn btn-inverse">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop