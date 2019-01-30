@extends('layouts.vendor')

@section('content22')


{{--Update Drivers Item here--}}

                                <div class="row">
                                    <div class="col-md-12" >
                                        <div class="card" style="box-shadow: 5px 5px 5px 5px #888888">
                                            <div class="card-body">
                                                <div id="msggd"></div>
                                                <div class="row">
                                                    <div class="col-md-6 col-md-6-offset">
                                                        <h3 class="box-title">Update Driver's Item Here</h3>
                                                    </div>
                                                    @include('includes.driver_iteModal')
                                                </div>
                                                <hr class="m-t-0 m-b-40">
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                            	@if(!$driver_items->count())
                                            <div class="alert alert-danger" role="alert">
                                                <p>Driver Item not Found</p>
                                            </div>
                                            @else
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th><b>Product Name</b></th>
                                                <th><b>Driver's Name</b></th>
                                                <th><b>Product Image</b></th>
                                               <!--  <th><b>Barcode</b></th>
                                                <th><b>Serial Number</b></th> -->
                                                <th><b>Date Renewed</b></th>
                                                <th><b>Expiration Date</b></th>
                                                <th><b>Action</b></th>
                                            </tr>
                                        </thead>
                                  @foreach($driver_items as $key => $driver_item)
                            <tbody>
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$driver_item->name}}</td>
                                    <td>{{$driver_item->fname}} {{$driver_item->lname}}</td>
                                     <td> <img src="/product_image/{{$driver_item->image_path}}" alt="user" width="50" class="round"></td>
                                   <!--   <td>
                                        @if($driver_item->barcode == '') -
                                        @else
                                        {{$driver_item->barcode}}
                                        @endif
                                    </td>
                                    <td>
                                         @if($driver_item->serial_number == '') -
                                        @else
                                        {{$driver_item->serial_number}}
                                        @endif
                                    </td> -->
                                    <td>{{$driver_item->date_reg}}</td>
                                    <td>{{$driver_item->item_expiry_date}}</td>

                                    <td>
                                        <a class="btn btn-outline-info updateItem btn-xs" id = "{{$driver_item->id}}">Renew</a>
                                        <button type="button" class="btn btn-outline-danger btn-xs deleteit" id = "{{$driver_item->id}}">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                                            @endforeach
                                @endif
                               
                                
                            </table>
                        </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                {{--Update Drivers Item ends here please--}}


@stop