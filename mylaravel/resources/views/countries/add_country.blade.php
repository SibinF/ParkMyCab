
<script type="text/javascript">
    
    $(document).ready(function () {

      

         //  $('#autocomplete').focus(function(e){  $(".name_error").text(''); });
        // body...
        $('#add_country').on('submit',function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })


        e.preventDefault(); 

       
      

  var url = "{{URL::to('countries/create')}}";
        $.ajax({

           
             type:"POST",
            url: url,
           data:$(this).serialize(),
            dataType: 'json',
            success: function (data) {
                if(data.success)
                {
                     console.log('success');
                     $('#myModal').modal('hide');
                   demo.showNotification('top','right','success',data.data);
                }

                if(data.error)
                {
                    console.log('erroooooooor');
                     $(".name_error").text(data.errors.name);
                }

               
           

                
            },
            error: function (data) {
              
            }
        });
    });

    });


</script>


<div class="modal-body" >
<div class="row">
   <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Country Profile</h4>
                            </div>
                            <div class="content">
                           
                         
                    
                          @if(!empty($country))
<?php  $a= $country->name;

$b=$country->id;
 ?>


                               <form  id="add_country" method="POST" action="{{ action('CountriesController@create',$country->id) }}">
                               

                               @else

                               <?php  $a= "" ;
                                      $b="";
                                ?>
                               <form  id="add_country" method="POST" action="{{ action('CountriesController@create') }}">
                               @endif

                                    <div class="row">
                                    
                                        <div class="col-md-8">
                                            <div class="form-group" id="locationField">
                                                <label>Country Name</label>
                                                <input type="text" name="name" class="form-control " id="autocomplete"   onFocus="geolocate()" placeholder="Country Name"  value="<?php echo $a ?>">

                                                <p  class="name_error",style="color:red">{{$errors->first('name')}}</p>
                                            </div>
                                            <input type="hidden" name="c_id"    value="<?php echo $b ?>">
                                        </div>
                                      
                                        </div>
                                    
                                    <button type="submit" class="btn btn-info btn-fill pull-left ">Save Country Details</button>
                                    <div class="clearfix"></div>
                                    <meta name="_token" content="{{csrf_token() }}" />
                                </form> 
                            </div>
                        </div>
                    </div>
                    </div>
 </div>

 
 <!--<div class="modal-footer">
   <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

   <button type="button" class="btn btn-danger photo-delete" data-slug="">Delete</button>
 </div>-->
 