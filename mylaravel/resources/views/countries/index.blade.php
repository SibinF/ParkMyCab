
@extends('layouts.admin_layout')

<!-- Main Content -->

@section('content')
<script type="text/javascript">
	
	$(document).ready(function()
	{
        $('#location  a[href="#country"]').tab('show');

 
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            // console.log(e.target );// newly activated tab
            //console.log( e.relatedTarget );// previous active tab
 
          var id=$(this).attr('href');
          var country_url = "{{URL::to('countries/show')}}";
          var state_url = "{{URL::to('states/index')}}";
          var city_url = "{{URL::to('cities/index')}}";
          var location_url = "{{URL::to('locations/index')}}";
           // $(this).tab('show');
          var obj={'#country':country_url,'#state':state_url,'#city':city_url,'#location':location_url};
 
          // alert(id);
  
           // alert(obj[id]);
          url=obj[id];
          $.get(url, function( data ) {


                $(id).html(data);
            
            });

});

         

$('#location a').click(function (e) {
  e.preventDefault()
 /* var id=$(this).attr('href');
    var country_url = "{{URL::to('countries/show')}}";
    var state_url = "{{URL::to('states/index')}}";
     var city_url = "{{URL::to('cities/index')}}";
      var location_url = "{{URL::to('locations/index')}}";
  // $(this).tab('show');
  var obj={'#country':country_url,'#state':state_url,'#city':city_url,'#location':location_url};
 
         // alert(id);
  
        // alert(obj[id]);
url=obj[id];
          $.get(url, function( data ) {

            //alert(data);


           
                $(id).html(data);
            
            });
               // $('#myModal .load_modal').html(data);
           
*/




});




		$('#example').DataTable();
        $('.update').click(function(){
            alert('hi');
            return false;

            
           var urlGetUser = "{{URL::to('countries/add_country')}}";
            $.get(urlGetUser, function( data ) {
            $('#myModal').modal();
           
            $('#myModal').on('shown.bs.modal', function(){
                $('#myModal .load_modal').html(data);
            });
            $('#myModal').on('hidden.bs.modal', function(){
                $('#myModal .modal-body').data('');

            });

            });
});



        $('delete').click(function(){
            alert('hi');
            return false;


            
           var urlGetUser = "{{URL::to('countries/add_country')}}";
            $.get(urlGetUser, function( data ) {
            $('#myModal').modal();
           
            $('#myModal').on('shown.bs.modal', function(){
                $('#myModal .load_modal').html(data);
            });
            $('#myModal').on('hidden.bs.modal', function(){
                $('#myModal .modal-body').data('');
            });

            });
});

		$('#create').click(function(){


			
           var urlGetUser = "{{URL::to('countries/add_country')}}";
			$.get(urlGetUser, function( data ) {
            $('#myModal').modal();
           
            $('#myModal').on('shown.bs.modal', function(){
                $('#myModal .load_modal').html(data);
            });
            $('#myModal').on('hidden.bs.modal', function(){

                $('#myModal .modal-body').data('');
                 //location.reload();
            });

			});
});

	});

</script>

<div class="row">
                    <div class="col-md-12">
                    <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" id="location" role="tablist">
    <li role="presentation"><a href="#country"  aria-controls="home" role="tab" data-toggle="tab">Country Profile</a></li>
    <li role="presentation"><a href="#state" aria-controls="profile" role="tab" data-toggle="tab">State Profile</a></li>
    <li role="presentation"><a href="#city" aria-controls="messages" role="tab" data-toggle="tab">City Profile</a></li>
    <li role="presentation"  class="active"><a href="#location" aria-controls="settings" role="tab" data-toggle="tab">Locations</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane " id="country"></div>
    <div role="tabpanel" class="tab-pane" id="state"></div>
    <div role="tabpanel" class="tab-pane" id="city"></div>
    <div role="tabpanel" class="tab-pane fade in  active" id="location"></div>
  </div>

</div>
                     <!--   <div class="card">
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
                                    @foreach($countries as $country)

                                        <tr>
                                        	<td>{{$country->id}}</td>
                                        	<td>{{$country->name}}</td>
                                        	
                                        	  <td class="td-actions ">
                                                    <button id="{{$country->id}}" type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs update">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button id="{{$country->id}} type="button" rel="tooltip" title="Remove" class="btn btn-danger  btn-simple btn-xs delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                        </tr>
                                        @endforeach
                                        
                                      
                                       
                                    </tbody>

                                </table>
                           <?php echo $countries->render(); ?>
                             
                         
                            </div>

                        </div>-->


                    </div>

                   
                 </div>




                




@endsection


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content load_modal"> </div>
    </div>
</div>