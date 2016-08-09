
<script type="text/javascript">
  $(document).ready(function()
  {
    $('.delete').click(function(){

            
            var id=$(this).attr('id');
//alert(id);
           
           var urlGetUser = "<?php echo 'delete/' ?>"+id;
            //var url = "{{URL::to('countries/delete')}}";
            
        $.ajax({
             type:"GET",
            
             url: urlGetUser,
             dataType: 'json',
            success: function (data) {

            //  alert(data);
                if(data.success)
                {
                     console.log('success');
                     $('#myModal').modal('hide');

                   demo.showNotification('top','right','success',data.data);
                }

                else
                {
                    console.log('erroooooooor');
                   $('#myModal').modal('hide');
                }

                  
            },
            error: function (data) {
              console.log(data);
              
            }
        });
    

            
        });

  });

</script>









<div class="modal-body">

  <h4>Are you sure want to delete {{$country->name}} with Id {{$country->id}} ?</h4>
 </div>
 <div class="modal-footer">
   <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

   <button type="button" id="{{$country->id }}" class="btn btn-danger photo-delete delete" data-slug="">Delete</button>
 </div>
