@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Info box -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Drivers</h4>
                    <div class="text-right"> <span class="text-muted">Total No Drivers</span>
                        <h1 class="font-light"><sup><i class="ti-arrow-up text-success"></i>{{(new \App\Http\Controllers\AdminDriverController)->total_driver()}}</sup></h1>
                    </div>
                    <span class="text-success"><button type="button" class="btn btn-outline-primary btn-xs">View</button></span>

                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Registered Vehicles</h4>
                    <div class="text-right"> <span class="text-muted">Total vehicles Registered</span>
                        <h1 class="font-light"><sup><i class="ti-arrow-up text-info"></i></sup> {{(new \App\Http\Controllers\AdminDriverController)->total_vehicle()}}</h1>
                    </div>
                    <span class="text-info"><button type="button" class="btn btn-outline-info btn-xs">View</button></span>

                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">FRSC Officers</h4>
                    <div class="text-right"> <span class="text-muted">Total Registered Officers</span>
                        <h1 class="font-light"><sup><i class="ti-arrow-down text-danger"></i></sup> {{(new \App\Http\Controllers\AdminDriverController)->total_users()}}</h1>
                    </div>
                    <span class="text-danger"> <button type="button" class="btn btn-outline-danger btn-xs">View</button></span>

                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Items</h4>
                    <div class="text-right"> <span class="text-muted">Registered Items</span>
                        <h1 class="font-light"><sup><i class="ti-arrow-up text-inverse"></i></sup> {{(new \App\Http\Controllers\AdminDriverController)->total_item()}}</h1>
                    </div>
                    <span class="text-inverse"><button type="button" class="btn btn-outline-primary btn-xs">View</button></span>

                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- End Info box -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Over Visitor, Our income , slaes different and  sales prediction -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Last 5 Registered Drivers</h4>

                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Plate Number</th>
                                <th>Picture</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Height</th>
                            </tr>
                            </thead>
                            <tbody>
                    @if($driver)
                       @foreach($driver as $drivers)
                            <tr>
                                <td>{{$drivers->fname}} {{$drivers->lname}}</td>
                                <td>{{$drivers->plate_number}}</td>
                                <td><span class="round"><img src="/imagess/{{$drivers->image_path}}" alt="user" width="50"></span></td>
                                
                                <td>{{$drivers->dob}}</td>
                                <td> @if($drivers->gender == 'FEMALE' )
                                                <span class="badge badge-warning">F</span></td>
                                                @elseif($drivers->gender == 'MALE')
                                                <span class="badge badge-success">M</span></td>
                                                @endif</td>
                                <td>{{$drivers->height}}</td>
                            </tr>
                        @endforeach
                    @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex m-b-30 no-block">
                        <h5 class="card-title m-b-0 align-self-center">System Analysis</h5>

                    </div>
                    <div id="visitor" style="height:260px; width:100%;"></div>
                    <ul class="list-inline m-t-30 text-center font-12">
                        <li><i class="fa fa-circle text-purple"></i> Tablet</li>
                        <li><i class="fa fa-circle text-success"></i> Desktops</li>
                        <li><i class="fa fa-circle text-info"></i> Mobile</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- Sales Chart and browser state-->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Sales Chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Projects of the Month -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Projects of the Month -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Comment - chats -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Comment - chats -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->

    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
@stop
