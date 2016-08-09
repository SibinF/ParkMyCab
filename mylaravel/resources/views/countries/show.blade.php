

<script type="text/javascript">
    $(document).ready(function()
    {

$('#create').click(function(){

            
           var urlGetUser = "{{URL::to('countries/add_country')}}";
            $.get(urlGetUser, function( data ) {
            $('#myModal').modal();
           
            $('#myModal').on('shown.bs.modal', function(){
                $('#myModal .load_modal').html(data);
            });
            $('#myModal').on('hidden.bs.modal', function(){

                
                 $('#location  a[href="#state"]').tab('show');
                   $('#location  a[href="#country"]').tab('show');

                $('#myModal .modal-body').data('');

                 //location.reload();
            });

            });
});



$('.update').click(function(){

            
            var id=$(this).attr('id');
          
           var urlGetUser = "<?php echo 'edit_country/' ?>"+id;
            $.get(urlGetUser, function( data ) {
            $('#myModal').modal();
           
            $('#myModal').on('shown.bs.modal', function(){
                $('#myModal .load_modal').html(data);
            });
            $('#myModal').on('hidden.bs.modal', function(){

                
                 $('#location  a[href="#state"]').tab('show');
                   $('#location  a[href="#country"]').tab('show');

                $('#myModal .modal-body').data('');

                 //location.reload();
            });

            });
});






$('.delete').click(function(){

            
            var id=$(this).attr('id');
          
          
           var urlGetUser = "<?php echo 'delete_country/' ?>"+id;
            $.get(urlGetUser, function( data ) {
            $('#myModal').modal();
           
            $('#myModal').on('shown.bs.modal', function(){
                $('#myModal .load_modal').html(data);
            });
            $('#myModal').on('hidden.bs.modal', function(){

                
                 $('#location  a[href="#state"]').tab('show');
                   $('#location  a[href="#country"]').tab('show');

                $('#myModal .modal-body').data('');

                 //location.reload();
            });

            });
});





    });

</script>




<div class="card">
                            <div class="header">

                            	<div class="row">
                            		<div class="col-md-10">
 										<h4 class="title">Service Available Areas</h4> 
                            		</div>
                            		<div class="col-md-2">
                            	   <button type="submit" id="create" class="btn btn-info btn-fill pull-right">Add Country</button>
                            		</div>
                            	</div>
                              <p class="category">The ParkMyCab services are available on in the following locations</p>
                            </div>
                           

                            <div class="content table-responsive table-full-width">
                            
                            
                             
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	
                                    </thead>
                                    <tbody>
                                    <?php $id=1;?>
                                    @foreach($countries as $country)
                                        
                                        <tr>
                                        	<td><?php echo $id; ?></td>
                                        	<td>{{$country->name}}</td>
                                        	
                                        	  <td class="td-actions ">
                                                    <button id="{{$country->id}}" type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs update">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button id="{{$country->id}}" type="button" rel="tooltip" title="Remove" class="btn btn-danger  btn-simple btn-xs delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                        </tr>
                                       <?php  $id++;?>
                                        @endforeach
                                        
                                      
                                       
                                    </tbody>

                                </table>
                          
                             
                         
                            </div>

                        </div>