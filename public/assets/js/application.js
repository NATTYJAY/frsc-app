$(document).ready(function(){

 $(document).on('click', '.updatecat', function(){
            idr = $(this).attr("id");
              $.get('/product/'+idr+'/edit', function (datas) {
                $('#itName').val(datas.data['name']);
                $('#dsc').val(datas.data['description']);
                $('#id').val(datas.data['id']);
                $('#ctagoryedit').modal('show');
                });
  });
 

  $(document).on('click', '.updateItem', function(){
            item_id = $(this).attr("id");
              $.get('/admin/renew/'+item_id, function (result) {
               $('#barc').val(result.data.barcode);
               $('#serial').val(result.data.serial_number);
               $('#date_r').val(result.data.date_reg);
               $('#idrr').val(result.data.id);
               $('#expDate').val(result.data.item_expiry_date);
               $('#driverItemUpdateModal').modal('show');
                });
  });

$(document).on('click', '.updatedriver', function(){
            driver_id = $(this).attr("id");
              $.get('/driver/'+driver_id+'/edited', function (result) {
               $('#dfname').val(result.data.fname);
               $('#dlname').val(result.data.lname);
               $('#dheight').val(result.data.height);
               $('#ddob').val(result.data.dob);
               $('#dnok').val(result.data.nok);
               $('#dgender').val(result.data.gender);
               $('#daddress').val(result.data.address);
               $('#dlicense_issue_date').val(result.data.license_issue_date);
               $('#dlicense_expiry_date').val(result.data.license_expiry_date);
               $('#data_id').val(result.data.id);
               
                $('#driverrenew').modal('show');
                });
  });

  $(document).on('click', '.deleteit', function(){
            item_id = $(this).attr("id");
              $.get('/admin/delete/'+item_id, function (result) {
                 if(result.success == 11){
                    $('#msggd').addClass('alert alert-success col-lg-12 col-md-12 textcenter');
                    $('#msggd').html('<strong> Data Deleted !</strong> ');
                    setTimeout(function(){
                        $('#msggd').removeClass('alert alert-danger col-lg-12 col-md-12 textcenter');
                        $('#msggd').html('');
                        location.reload();
                            }, 
                            2000);
                       }else{
                            $('#msggd').addClass('alert alert-danger col-lg-12 col-md-12  textcenter');
                            $('#msggd').html('<strong>Unconfirmed !. Please try again later</strong> ');
                   }
                });
  });

   $('#editform1').on('submit',function(e){
         e.preventDefault();
          token = $('#_token').val();
          id_ = $('#id').val();
               $.ajax({  
                    url:"/product/"+id_,  
                    type: "POST",  
                    data: new FormData(this), 
                    contentType: false,  
                    processData:false,
                    dataType : "Json",  
                    success: function(data){
                        if(data.data == true){
                        $('#msgg').addClass('alert alert-success textcenter');
                        $('#msgg').html('<strong> Data Updated !</strong> ');
                        setTimeout(function(){
                            $('#msgg').removeClass('alert alert-danger textcenter');
                            $('#msgg').html('');
                            location.reload();
                                }, 
                                2000);
                           }else{
                                $('#msgg').addClass('alert alert-danger textcenter');
                                $('#msgg').html('<strong>Unconfirmed !. Please try again later</strong> ');
                           }
                    }
                  
               });
    });

   /*DRivers details */


$('#renewDriverForm').on('submit',function(e){
         e.preventDefault();
          token = $('#_token').val();
          id_rr = $('#data_id').val();
               $.ajax({  
                    url:"/driver/update"+id_rr,
                    type: "POST", 
                    data: new FormData(this),
                    contentType: false,  
                    processData:false,
                    dataType : "Json",  
                    success: function(data){
                      console.log(data.success);
                        // if(data.success == true){
                        // $('#msgg_update').addClass('alert alert-success textcenter');
                        // $('#msgg_update').html('<strong> Data Updated !</strong> ');
                        // setTimeout(function(){
                        //     $('#msgg_update').removeClass('alert alert-success textcenter');
                        //     $('#msgg_update').html('');
                        //     location.reload();
                        //         }, 
                        //         2000);
                        //    }else{
                        //         $('#msgg_update').addClass('alert alert-danger textcenter');
                        //         $('#msgg_update').html('<strong>Unconfirmed !. Please try again later</strong> ');
                        //    }
                    }
                  
               });
    });


/*Update item driver*/


   $('#editdriverItem').on('submit',function(e){
         e.preventDefault();
          token = $('#_token').val();
          id__ = $('#idrr').val();
          
               $.ajax({  
                    url:"/admin/update/"+id__,  
                    type: "POST",  
                    data: new FormData(this), 
                    contentType: false,  
                    processData:false,
                    dataType : "Json",  
                    success: function(data){
                    
                        if(data.success == 11){
                        $('#msggs').addClass('alert alert-success col-lg-12 col-md-12 textcenter');
                        $('#msggs').html('<strong> Data Updated !</strong> ');
                        setTimeout(function(){
                            $('#msggs').removeClass('alert alert-danger col-lg-12 col-md-12 textcenter');
                            $('#msggs').html('');
                            location.reload();
                                }, 
                                2000);
                           }else{
                                $('#msggs').addClass('alert alert-danger col-lg-12 col-md-12  textcenter');
                                $('#msggs').html('<strong>Unconfirmed !. Please try again later</strong> ');
                           }
                    }
                  
               });
    });
                   
});