@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12" >
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
                    <form class="form-horizontal" role="form" action="{{url('/registerole')}}"method="POST">
                      {{ csrf_field() }}
                       @if(session('success_item_msgs2'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <p>{{ session('success_item_msgs2') }}</p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>@if(session('alert_item_reg2'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <p>{{ session('alert_item_reg2') }}</p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                     @if(session('error_item_msgs2'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <p>{{ session('error_item_msgs2') }}</p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    @endif

                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6 col-md-6-offset">
                                    <h3 class="box-title">Add Vendors Here</h3>
                                </div>

                            </div>
                            <hr class="m-t-0 m-b-40">
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        <input type="text" name="fname" class="form-control" placeholder="First Name" required="required">
                                    </div>
                                    
                                                <!--  @if ($errors->has('fname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                                @endif -->
                                    
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Last Name</label>
                                        <input type="text"  class="form-control form-control" name="lname" placeholder="Last Name" required="required" >
                                    </div>
                                     <!-- @if ($errors->has('lname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                                @endif -->
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" required="required">
                                    </div>
                                    <!--  @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif -->
                                </div>
                                <!--/span-->
                                
                                <!--/span-->
                            </div>

                             <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input type="password" name="Password" class="form-control" placeholder="Password" required="required">
                                    </div>
                                   <!--   @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif -->
                                </div>
                                <!--/span-->
                                
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
        </div>
    </div>

    @stop