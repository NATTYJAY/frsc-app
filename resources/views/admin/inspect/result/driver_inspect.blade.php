@extends('layouts.admin')

@section('content')

{{--HTML inspect lincese--}}
 <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
       

                                <div class="row">
                                    <div class="col-md-12" >
                                        <div class="card" style="box-shadow: 5px 5px 5px 5px #888888">
                                            <div class="card-body">

                                                <form class="form-horizontal" role="form">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h3 class="box-title">Vehicle License Information for <b> {{$driver->fname}} {{$driver->lname}} </b></h3>
                                                            </div>
                                                            
                                                        </div><br>
                                                        <hr class="m-t-0 m-b-40">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                               <img src="/imagess/{{$driver->image_path}}" alt="user" width="150">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="row">
                                                                    <!--/span-->
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="control-label text-right col-md-6" style="font-size: 20px; font-weight: bold">DRIVERS LICENSE:</label>
                                                                            <div class="col-md-6">

                                                                            	@if($expired == 1)
                                                                                <p class="form-control-static"> <span class="badge badge-danger btn-sm"> EXPIRED</span>  </p>
                                                                                @elseif($expired == 0)
                                                                                 <p class="form-control-static"> <span class="badge badge-success btn-sm">NOT EXPIRED</span>  </p>
                                                                                  @elseif($expired == 4)
                                                                                   <p class="form-control-static"> <span class="badge badge-danger btn-sm">DRIVER NOT REGISTERED</span>  </p>
                                                                                 @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row">
                                                                    <!--/span-->
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="control-label text-right col-md-6" style="font-size: 20px; font-weight: bold">VEHICLE LICENSE</label>
                                                                            <div class="col-md-6">
                                                                            	@if($vexpired == 1)
                                                                                <p class="form-control-static"> <span class="badge badge-danger btn-sm">EXPIRED</span> </p>
                                                                                @elseif($vexpired == 0)
                                                                                 <p class="form-control-static"> <span class="badge badge-success btn-sm">NOT EXPIRED</span> </p>
                                                                                  @elseif($vexpired == 4)
                                                                                   <p class="form-control-static"> <span class="badge badge-danger btn-sm">LICENSE NOT REGISTERED</span>  </p>
                                                                                 @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                            </div>

                                                        </div><br>

                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <table>
                                                                   
                                                                    @if(!$driver_item->count())
                                                                    <div class="alert alert-danger" role="alert">
                                                                        <p>Driver Item not Found</p>
                                                                    </div>
                                                                    @else
                                                                     <tr>
                                                                        <th><b>ITEMS</b></th>
                                                                        <th><b>EXPIRE</b></th>
                                                                        <th><b>BARCODE</b></th>
                                                                        <th><b>S/N</b></th>
                                                                        <th>DATE REGISTERED</th>
                                                                        <th>EXPIRY DATE</th>
                                                                    </tr>
                                                                    @foreach($driver_item as $driver_items)
                                                                    <tr>
                                                                        <td>{{$driver_items->name}}</td>
                                                                        <td>
                                                                            @if(date('Y-m-d') > $driver_items->item_expiry_date)
                                                                            <span class="badge badge-danger btn-sm"> EXPIRED</span>
                                                                            @else
                                                                             <span class="badge badge-success btn-sm"> NOT EXPIRED</span>
                                                                            @endif
                                                                        </td>
                                                                        <td>
                                                                            @if($driver_items->barcode == '') -
                                                                            @else
                                                                            {{$driver_items->barcode}}
                                                                            @endif
                                                                        </td>
                                                                        <td>
                                                                             @if($driver_items->serial_number == '') -
                                                                            @else
                                                                            {{$driver_items->serial_number}}
                                                                            @endif</td>
                                                                        <td>{{$driver_items->date_reg}}</td>
                                                                        <td>{{$driver_items->item_expiry_date}}</td>
                                                                    </tr>
                                                                    @endforeach
                                                                    @endif
                                                                 
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <!--/row-->

                                                        <!--/row-->

                                                    </div>

                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                {{--HTML instead lincese ends here--}}


@stop