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
                    <form class="form-horizontal" role="form" action="{{ route('category.store') }}" method="POST">
                      {{ csrf_field() }}
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6 col-md-6-offset">
                                    <h3 class="box-title">Vehicle License Information</h3>
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
                                                 @foreach($errors->get('desc') as $message)
                                                   <li>{{$message}}</li>
                                               @endforeach
                                    </span>
                                </div>
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