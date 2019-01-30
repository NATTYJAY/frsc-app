
{{--MODAL FOR UPDATE ITEM GOES HERE--}}


<div class="modal fade" id="driverItemUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body">
                {{--Main body start here--}}

                <div class="ribbon-wrapper-reverse card" style="box-shadow: 5px 5px 5px 5px #888888">
                    <div class="ribbon ribbon-bookmark ribbon-right ribbon-warning">Please Select Product to be Updated </div>
                    <form class="form-horizontal" role="form" id="editdriverItem" >
                        <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                         <input type="hidden" class="form-control" id="ffy" name="_method" value="POST">
                        <div class="form-body">
                            <div class="row">
                                <input type="text" name="id" id="idrr" hidden="hidden">
                               <!--  <div class="col-md-4">
                                    <label class="control-label col-md-12"><b>Select Item</b></label><br>
                                    <select class="form-control" name="item_id">
                                         @foreach($cat as $categor)
                                            <option value="{{$categor->id}}">{{strtoupper($categor->name)}}</option>
                                        @endforeach


                                    </select>
                                </div> -->
                                <div class="col-md-4" id="img">

                                </div>
                            </div><br>
                            <div id="msggs" role="alert">
                                
                            </div>
                            <hr class="m-t-0 m-b-40">
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Barcode </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Barcode"name="barcode" id="barc" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Serial Number</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Serial Number" name="serial_number" id="serial" readonly="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Date Registered</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" placeholder="MM/DD/YYYY" name="date_reg" id="date_r">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Expiry Date</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" placeholder="MM/DD/YYYY" name="item_expiry_date" id="expDate">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <hr class="m-t-0 m-b-40">

                            <div class="form-actions">
                                <button type="submit" class="btn btn-outline-success col-lg-12"> <i class="fa fa-check"></i><b>Renew Product</b></button>

                            </div>


                        </div>



                    </form>
                </div>

                {{--Main body ends here--}}
            </div>

        </div>
    </div>
</div>



{{--MODAL FOR UPDATE ITEM ENDS HERE PLEASE--}}