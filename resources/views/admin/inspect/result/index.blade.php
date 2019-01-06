@extends('layouts.admin')

@section('content')

    <div class="row">
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
        
        <div class="col-md-12">
            <div class="card card-outline-success">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Vehicle Inspection for <b>ADAMU ADAMU</b></h4>
                </div>
                <div class="card-body">
                    <div class="vtabs ">
                        <ul class="nav nav-tabs tabs-vertical" role="tablist">
                            <li class="nav-item"> <a data-toggle="tab" href="#home9" role="tab" class="btn btn-outline-primary" ><span class="fa fa-drivers-license-o ">Register Item</span></a> </li><br>
                            <li class="nav-item"> <a data-toggle="tab" href="#reg9" role="tab" class="btn btn-outline-warning" >Register Vehicle</a> </li><br>
                            <li class="nav-item"><a data-toggle="tab" href="#profile9" role="tab" class="btn btn-outline-dark">Inspect Vehicle</a>  </li>
                            <br>
                            <li class="nav-item"><a data-toggle="tab" href="#messages9" role="tab" class="btn btn-outline-info">Possession</a>  </li><br>
                            <li class="nav-item"><a data-toggle="tab" href="#update9" role="tab" class="btn btn-outline-success">Update Item</a>  </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content" >
                            <div class="tab-pane" id="home9" role="tabpanel" style="width:850px; margin-top:-30px;">
                                {{--Register drivers license item--}}

                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                <div class="ribbon-wrapper-reverse card" style="box-shadow: 5px 5px 5px 5px #888888">
                                                    <div class="ribbon ribbon-bookmark ribbon-right ribbon-danger">Please Select Item to be added to this driver License</div>
                                                    <form class="form-horizontal" role="form">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-4">

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="control-label col-md-12"><b>Select Item</b></label><br>
                                                                    <select class="form-control" name="items">
                                                                        <option selected="selected">[Choose Items to be added]</option>
                                                                        <option value="fE">Fire Extinguisher</option>
                                                                        <option value="Ta">Triangle</option>
                                                                        <option value="Ja">Jack</option>
                                                                        <option value="Tr">Tyre</option>


                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4">

                                                                </div>
                                                            </div><br>

                                                            <hr class="m-t-0 m-b-40">
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Barcode </label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="Barcode">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Serial Number</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="Serial Number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Date Registered</label>
                                                                        <div class="col-md-9">
                                                                            <input type="date" class="form-control" placeholder="MM/DD/YYYY">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group row">
                                                                        <label class="control-label text-right col-md-3">Expiry Date</label>
                                                                        <div class="col-md-9">
                                                                            <input type="date" class="form-control" placeholder="MM/DD/YYYY">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <hr class="m-t-0 m-b-40">

                                                            <div class="form-actions">
                                                                <button type="submit" class="btn btn-outline-success col-lg-12"> <i class="fa fa-check"></i><b>Add Item</b></button>

                                                            </div>

                                                        </div>



                                                    </form>
                                                </div>


                                    </div>

                                </div>

                                {{--Register drivers lincese item ends here--}}
                            </div>

                            <div class="tab-pane" id="reg9" role="tabpanel" >
                                {{--Register Vehicle Here--}}

                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3 class="box-title">Vehicle License Registration</h3>
                                            </div>

                                        </div>

                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">First Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="First Name">
                                                        {{--<small class="form-control-feedback"> This is inline help </small>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger row">
                                                    <label class="control-label text-right col-md-3">Last Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control form-control-danger" placeholder="Last Name">
                                                        {{--<small class="form-control-feedback"> This field has error. </small>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6" hidden="hidden">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Registration Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Registration Number">
                                                         </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Engine Capacity</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Engine Capacity">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Engine Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Engine Number">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Chasis Number</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Chasis Number">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        {{--<h3 class="box-title">Address</h3>--}}
                                        <hr class="m-t-0 m-b-40">
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Address </label>
                                                    <div class="col-md-9">
                                                        <textarea name="" id="" cols="5" rows="5" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Vehicle Make</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Vehicle Make">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Vehicle Colour</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Vehicle Colour">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">License Fee</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="License Fee">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
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
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Expiry Date</label>
                                                <div class="col-md-9">
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy">
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

                                {{--Register Vehicle Ends Here--}}

                            </div>
                            <div class="tab-pane  active " id="profile9" role="tabpanel" style="width:800px; margin-top:-30px;">
                                {{--HTML inspect lincese--}}

                                <div class="row">
                                    <div class="col-md-12" >
                                        <div class="card" style="box-shadow: 5px 5px 5px 5px #888888">
                                            <div class="card-body">

                                                <form class="form-horizontal" role="form">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h3 class="box-title">Vehicle License Information</h3>
                                                            </div>
                                                            <div class="col-md-6">

                                                            </div>
                                                        </div><br>
                                                        <hr class="m-t-0 m-b-40">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <img src="{{asset('assets/images/users/2.jpg')}}" alt="user" width="150">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="row">
                                                                    <!--/span-->
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="control-label text-right col-md-6" style="font-size: 20px; font-weight: bold">DRIVERS LICENSE:</label>
                                                                            <div class="col-md-6">
                                                                                <p class="form-control-static"> <span class="badge badge-success btn-sm">YES</span>  </p>
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
                                                                                <p class="form-control-static"> <span class="badge badge-danger btn-sm">NO</span> </p>
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
                                                                    <tr>
                                                                        <th><b>ITEMS</b></th>
                                                                        <th><b>EXPIRE</b></th>
                                                                        <th><b>BARCODE</b></th>
                                                                        <th><b>S/N</b></th>
                                                                        <th>DATE REGISTERED</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Fire Extinguisher</td>
                                                                        <td><span class="badge badge-success btn-sm">NO</span></td>
                                                                        <td>12DDD2121</td>
                                                                        <td>WSED323D</td>
                                                                        <td>23 JUNE 2012</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tyre</td>
                                                                        <td><span class="badge badge-danger btn-sm">YES</span></td>
                                                                        <td>SSW23FFF</td>
                                                                        <td>DSDS12DD</td>
                                                                        <td>45 AUGUST 2016</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Triangle</td>
                                                                        <td><span class="badge badge-success btn-sm">NO</span></td>
                                                                        <td>-</td>
                                                                        <td>-</td>
                                                                        <td>15 DECEMBER 2019</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jack</td>
                                                                        <td><span class="badge badge-success btn-sm">NO</span></td>
                                                                        <td>-</td>
                                                                        <td>-</td>
                                                                        <td>15 DECEMBER 2019</td>
                                                                    </tr>

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
                            </div>
                            <div class="tab-pane p-20" id="messages9" role="tabpanel" style="width:800px; margin-top:-30px;">
                                {{--Vehicle Possession--}}

                                <div class="row">
                                    <div class="col-md-12" >
                                        <div class="card" style="box-shadow: 5px 5px 5px 5px #888888">
                                            <div class="card-body">

                                                <form class="form-horizontal" role="form">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h3 class="box-title">Item Possession</h3>
                                                            </div>
                                                            <div class="col-md-6">

                                                            </div>
                                                        </div><br>
                                                        <hr class="m-t-0 m-b-40">
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <table>
                                                                    <tr>
                                                                        <th><b>ITEMS</b></th>
                                                                        <th><b>POSSESSION</b></th>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>Fire Extinguisher</td>
                                                                        <td><span class="badge badge-success btn-sm">NO</span></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tyre</td>
                                                                        <td><span class="badge badge-danger btn-sm">YES</span></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>Triangle</td>
                                                                        <td><span class="badge badge-success btn-sm">NO</span></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jack</td>
                                                                        <td><span class="badge badge-success btn-sm">NO</span></td>

                                                                    </tr>

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


                                {{--Vehicle possession ends here please--}}
                            </div>
                            <div class="tab-pane" id="update9" role="tabpanel" style="width:850px; margin-top:-30px;">
                                {{--Update Drivers Item here--}}

                                <div class="row">
                                    <div class="col-md-12" >
                                        <div class="card" style="box-shadow: 5px 5px 5px 5px #888888">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-md-6-offset">
                                                        <h3 class="box-title">Update Driver's Item Here</h3>
                                                    </div>

                                                </div>
                                                <hr class="m-t-0 m-b-40">
                                                <div class="table-responsive m-t-40">
                                                    <table id="myTable" class="table table-bordered table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th><b>Name</b></th>
                                                            <th><b>Serial Number</b></th>
                                                            <th><b>Date Registered</b></th>
                                                            <th><b>Expiration Date</b></th>
                                                            <th><b>Action</b></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Fire Extinguisher</td>
                                                            <td>DERxxx-xxx-xxx</td>
                                                            <td>DERxxx-xxx-xxx</td>
                                                            <td>DERxxx-xxx-xxx</td>

                                                            <td>
                                                                <a class="btn btn-outline-info btn-xs" href="#"  data-toggle="modal" data-target="#exampleModalLong">Alter</a>
                                                                <button type="button" class="btn btn-outline-danger btn-xs">Delete</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Fire Extinguisher</td>
                                                            <td>DERxxx-xxx-xxx</td>
                                                            <td>DERxxx-xxx-xxx</td>
                                                            <td>DERxxx-xxx-xxx</td>
                                                            <td>
                                                                <button type="button" class="btn btn-outline-info btn-xs" data-toggle="modal" data-target="#exampleModalLong">Alter</button>
                                                                <button type="button" class="btn btn-outline-danger btn-xs">Delete</button>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>3</td>
                                                            <td>Triangle</td>
                                                            <td>DERxxx-xxx-xxx</td>
                                                            <td>DERxxx-xxx-xxx</td>
                                                            <td>DERxxx-xxx-xxx</td>
                                                            <td>
                                                                <button type="button" class="btn btn-outline-info btn-xs" data-toggle="modal" data-target="#exampleModalLong">Alter</button>
                                                                <button type="button" class="btn btn-outline-danger btn-xs">Delete</button>
                                                            </td>
                                                        </tr>


                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                {{--Update Drivers Item ends here please--}}

                            </div>
                        </div>

                    </div>
                    {{--<div class="row">--}}
                        {{--<div class="col-md-4">--}}
                            {{--<a href="{{url('/result/createItem')}}" class="btn btn-outline-primary col-md-12" style="font-size: 20px"><span class="fa fa-drivers-license-o ">Register Item</span></a><br><br>--}}
                            {{--<a href="{{url('/result/inspectItem')}}" class="btn btn-outline-dark col-md-12" style="font-size: 20px">Inspect Vehicle</a>--}}
                            {{--<br><br>--}}
                            {{--<a href="#" class="btn btn-outline-success col-md-12" style="font-size: 20px">Possession</a>--}}
                        {{--</div>--}}

                        {{--<div class="col-md-8">--}}
                            {{--@yield('inspect_content')--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>

</div>

    @stop