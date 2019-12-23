<div class="modal fade" id="driverrenew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Driver's Details</h5>

            </div>
            <div class="modal-body">
            {{--Edit form goes here--}}

                <div class="card">
                    <div class="card-body p-b-0">
                         </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Update Details</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Update Image</span></a> </li>
                        </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home2" role="tabpanel">
                            <div class="p-20">
                                <form class="form-horizontal" id="renewDriverForm" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <input type="hidden" class="form-control" id="_token" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" class="form-control" id="ffy" name="_method" value="POST">

                                        <input type="text" class="form-control data_id" name="id" hidden="hidden">

                                        <div class="row">

                                        {{--<div class="col-md-6">--}}

                                        {{--<div class="alert alert-primary" role="alert">--}}
                                        {{--<h3 class="box-title">Renew Drivers License for </h3>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-6">--}}
                                        {{--<div class="form-group row">--}}
                                        {{--<label class="control-label text-right col-md-3">Picture</label>--}}
                                        {{--<div class="col-md-9">--}}
                                        {{--<input type="file" id="input-file" class="dropify" data-height="100" name="image_path" />--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}

                                        <!-- <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}"> -->
                                            <!--  <input type="hidden" class="form-control" id="ffy" name="_method" value="POST"> -->


                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Plate Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="plate_number" id="plateNo" >
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->

                                            <!--/span-->
                                        </div>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">First Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="fname" id="dfname" >
                                                        <small class="form-control-feedback"> This is inline help </small> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Last Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control form-control-danger" name="lname" id="dlname">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Height</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="10^0.0 Meters"  name="height" id="dheight">
                                                        <small class="form-control-feedback"> Driver's Height. </small> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Date of Birth</label>
                                                    <div class="col-md-9">
                                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy"  name="dob" id="ddob">
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
                                                        <input type="text" class="form-control" placeholder="Next Of King Phone Number"   name="nok" id="dnok">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Gender</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="gender" id="dgender" >

                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <h3 class="box-title">Address</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Address 1</label>
                                                    <div class="col-md-9">
                                        <textarea class="form-control" cols="5" rows="5" name="address" id="daddress" >
                                        </textarea>
                                                        <!--  <small class="form-control-feedback">
                                                         <span style="color:red">

                                                     </span>
                                                         </small> -->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    <!--  <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">City</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="city"  value="{{ old('city') }}">
                                         <small class="form-control-feedback">
                                        <span style="color:red">

                                    </span>
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">State</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="state" value="{{ old('state') }}">
                                         <small class="form-control-feedback">
                                        <span style="color:red">
                                             @foreach($errors->get('state') as $message)
                                        <li>{{$message}}</li>
                                           @endforeach
                                            </span>
                                                </small>
                                            </div>
                                        </div>
                                    </div>

                                </div> -->
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
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy"  name="license_issue_date" id="dlicense_issue_date">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Expiry Date</label>
                                                <div class="col-md-9">
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy"  name="license_expiry_date" id="dlicense_expiry_date">
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
                                                        <button type="button" id="renew" class="btn btn-info">Re-New</button>
                                                        <button type="button" class="btn btn-inverse" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">  <div id="msgg_update" role="alert"></div> </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane  p-20" id="profile2" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group row">
                                <label class="control-label text-right col-md-3">Picture</label>
                                <div class="col-md-9">
                                <input type="file" id="input-file" class="dropify" data-height="100" name="image_path" />
                                </div>
                                </div>
                                </div>
                            </div>
                            <form class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-body">
                                    <input type="hidden" class="form-control" id="_token" name="_token" value="{{csrf_token()}}">
                                    <input type="hidden" class="form-control" id="ffy" name="_method" value="POST">

                                    <input type="text" class="form-control data_id" name="id" hidden="hidden" >

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="button" id="renewImage" class="btn btn-info">Upload</button>
                                            <button type="button" class="btn btn-inverse" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">  <div id="msggs_update" role="alert"></div> </div>
                            </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                {{--Edit form ends here please--}}
            </div>
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
            {{--</div>--}}
        </div>
    </div>
</div>


{{--MODAL FOR CATEGORIES--}}