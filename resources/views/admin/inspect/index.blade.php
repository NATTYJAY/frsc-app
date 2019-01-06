@extends('layouts.admin')

@section('content')

    <div class="row">
        <!-- Column -->
        <div class="col-lg-12 col-md-12">
            <div class="card" style="margin-left:150px; margin-right: 150px">
                <div class="card-body">

                      <div class="login-box card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="{{ url('/search') }}">
                                    <h3 class="box-title m-b-20">Search Plate Number</h3>
                                    <div class="form-group ">
                                        <div class="col-xs-12">
                                            <input class="form-control" type="search" name="query" required="" placeholder="Type in plate Number Here"> </div>
                                    </div>


                                    <div class="form-group text-center">
                                        <div class="col-xs-12 p-b-20">
                                            <button class="btn btn-outline-primary btn-block btn-rounded btn-lg">Search</button>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>

    @stop