

 <div class="modal fade" id="ctagoryedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" >
        <div class="modal-content">
        	
        	
            <div class="modal-body">
                <form class="form-horizontal" id="editform1" role="form">
                   <div id="msgg"></div>
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6 col-md-6-offset">
                                <h3 class="box-title">Edit Item Category</h3>
                            </div>

                        </div>
                          <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                         <input type="hidden" class="form-control" id="ff" name="_method" value="PUT">
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Item Name</label>
                                    <input type="text" id="itName" class="form-control" placeholder="Item Name" name="name" >
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Description</label>
                                    <input type="text" id="dsc" class="form-control form-control" placeholder="Description" name="description">
                                </div>
                            </div>

                            <div class="col-md-6" hidden="hidden">
                                <div class="form-group">
                                    <label class="control-label">Id</label>
                                    <input type="text" id="id" class="form-control form-control" placeholder="Description" name="id" >
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <br>
                       <!--  <div class="form-actions"> -->
                            <button type="submit"  class="btn btn-outline-success col-lg-12"> <i class="fa fa-check"></i> Update</button>
<!-- 
                        </div> -->

                        <!--/row-->

                        <!--/row-->

                        <!--/row-->

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>