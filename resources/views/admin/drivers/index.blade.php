@extends('layouts.admin')
@include('includes.modals')
@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12">
                        <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-bookmark  ribbon-default">DRIVER'S MODULE</div>
                            <p class="ribbon-content">
                            <div class="alert alert-primary" role="alert">
                                This is where FRSC Officer can Register, View and Renew Driver's License
                            </div></p>
                            {{--This where the tap begins please mbokm abasi--}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="vtabs">
                                                <ul class="nav nav-tabs tabs-vertical" role="tablist">

                                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile4" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down"><b>Register Driver</b></span></a> </li>
                                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home4" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"><b>View/Edit Driver</b></span> </a> </li>
                                                   <!--  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages4" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Driver Profile</span></a> </li> -->
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="home4" role="tabpanel">
                <div class="row">

                    <div style="width:900px; margin-top:-80px;" class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                @if(count($errors) > 0)
                                    <div class="alert alert-danger" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>
                                           <h5>You have One or More Error Messages</h5>
                                        </strong>
                                    </div>
                                @endif
                                @if(session('success_msg'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <p>{{ session('success_msg') }}</p>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                @if(session('error_msg'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <p>{{ session('error_msg') }}</p>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                @if(session('img_error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <p>{{ session('img_error') }}</p>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Picture</th>
                                            <th>Plate Number</th>
                                            <th>DOB</th>
                                            <th>Gender</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($driver as $key => $drivers)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$drivers->fname ." ".$drivers->lname}}</td>
                                            <td><span class="round"><img src="/imagess/{{$drivers->image_path}}" alt="user" width="50"></span></td>
                                            <td>{{$drivers->plate_number}}</td>
                                            <td>{{$drivers->dob}}</td>
                                            <td>
                                                @if($drivers->gender == 'FEMALE' )
                                                <span class="badge badge-warning">F</span></td>
                                                @elseif($drivers->gender == 'MALE')
                                                <span class="badge badge-success">M</span></td>
                                                @endif
                                            <td>
                                                <a class="btn btn-outline-info btn-xs " href="{{route('driver.edit',$drivers->id)}}" >Renew</a>
                                                <button type="button" class="btn btn-outline-danger btn-xs">Delete</button>
                                            </td>
                                        </tr>
                                       @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12"></div>
                </div>
                                                    </div>
                                                    <div class="tab-pane p-20" id="profile4" role="tabpanel">
                                                        {{--Form wizard start here please--}}

                    <div class="row">
                        <div class="col-lg-12" style="width:900px; margin-top:-80px;">
                            <div class="card ">
                                  
                                <div class="card-body">
                                    <form action="{{route('driver.store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                         {{ csrf_field() }}
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h3 class="box-title">Person Info</h3>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="control-label text-right col-md-3">Picture</label>
                                                        <div class="col-md-9">
                                                            <input type="file" id="input-file-now-custom-2" class="dropify" data-height="100" name="image_path" />
                                                        </div>
                                                        <span style="color:red">
                                                                 @foreach($errors->get('image_path') as $message)
                                                                   <li>{{$message}}</li>
                                                               @endforeach
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>

                                            <hr class="m-t-0 m-b-40">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="control-label text-right col-md-3">First Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="First Name" name="fname" value="{{ old('fname') }}">
                                                            <small class="form-control-feedback">
                                                            <span style="color:red">
                                                                 @foreach($errors->get('fname') as $message)
                                                                   <li>{{$message}}</li>
                                                               @endforeach
                                                        </span> 
                                                            </small> </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="control-label text-right col-md-3">Last Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control form-control-danger" placeholder="Last Name" name="lname" value="{{ old('lname') }}">
                                                            <small class="form-control-feedback">
                                                            <span style="color:red">
                                                                 @foreach($errors->get('lname') as $message)
                                                                   <li>{{$message}}</li>
                                                               @endforeach
                                                        </span> 
                                                            </small> </div>
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
                                                            <input type="text" class="form-control" placeholder="10^0.0 Meters" name="height" value="{{ old('height') }}">
                                                            <small class="form-control-feedback">
                                                            <span style="color:red">
                                                                 @foreach($errors->get('height') as $message)
                                                                   <li>{{$message}}</li>
                                                               @endforeach
                                                        </span> 
                                                            </small></div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="control-label text-right col-md-3">Date of Birth</label>
                                                        <div class="col-md-9">
                                                            <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="dob" value="{{ old('dob') }}" >
                                                            <small class="form-control-feedback">
                                                            <span style="color:red">
                                                                 @foreach($errors->get('dob') as $message)
                                                                   <li>{{$message}}</li>
                                                               @endforeach
                                                        </span> 
                                                            </small>
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
                                                            <input type="text" class="form-control" placeholder="Next Of King Phone Number" name="nok" value="{{ old('nok') }}">
                                                             <small class="form-control-feedback">
                                                            <span style="color:red">
                                                                 @foreach($errors->get('nok') as $message)
                                                                   <li>{{$message}}</li>
                                                               @endforeach
                                                        </span> 
                                                            </small>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="control-label text-right col-md-3">Gender</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="gender" value="{{ old('gender') }}">
                                                        <option selected="selected" disabled="disabled">Choose Gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                            </select>
                                                            <small class="form-control-feedback">
                                                            <span style="color:red">
                                                                 @foreach($errors->get('gender') as $message)
                                                                   <li>{{$message}}</li>
                                                               @endforeach
                                                        </span> 
                                                            </small>
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
                                                            <textarea class="form-control" cols="5" rows="5" name="address" value="{{ old('address') }}">
                                                                
                                                            </textarea>
                                                            <small class="form-control-feedback">
                                                            <span style="color:red">
                                                                 @foreach($errors->get('address') as $message)
                                                                   <li>{{$message}}</li>
                                                               @endforeach
                                                        </span> 
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                          <!--   <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="control-label text-right col-md-3">City</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="city"  value="{{ old('city') }}">
                                                             <small class="form-control-feedback">
                                                            <span style="color:red">
                                                                 @foreach($errors->get('city') as $message)
                                                                   <li>{{$message}}</li>
                                                               @endforeach
                                                        </span> 
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
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
                                                <!--/span-->
                                           <!--  </div>  -->
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
                                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="license_issue_date" value="{{ old('license_issue_date') }}" >
                                                    </div>
                                                    <small class="form-control-feedback">
                                                            <span style="color:red">
                                                                 @foreach($errors->get('license_issue_date') as $message)
                                                                   <li>{{$message}}</li>
                                                               @endforeach
                                                        </span> 
                                                            </small>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Expiry Date</label>
                                                    <div class="col-md-9">
                                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="license_expiry_date" value="{{ old('license_expiry_date') }}">
                                                         <small class="form-control-feedback">
                                                            <span style="color:red">
                                                                 @foreach($errors->get('license_expiry_date') as $message)
                                                                   <li>{{$message}}</li>
                                                               @endforeach
                                                        </span> 
                                                            </small>
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
                                </div>
                            </div>
                        </div>
                    </div>

                                                        {{--Form wizard ends here please--}}
                                                    </div>
                                                    <!-- <div class="tab-pane p-20" id="messages4" role="tabpanel">3</div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{--This where the tap ends please mbokm abasi--}}
                        </div>


        </div>
    </div>




    @stop