<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;

use Illuminate\Contracts\Routing\ResponseFactory;


class CountriesController extends Controller
{

    //
    public function index()
    {

   	    $countries = \App\Models\Country::paginate(5);

       // return $countries;
        return View::make('countries.index')->with('countries', $countries);
    }
    public function show()
    {
    	   $countries = \App\Models\Country::all();
           $html= View::make('countries/show')->with('countries', $countries)->render();
           echo $html;
           return;
    }


    public function update(Request $request ,$id)
    {


    }
    public function delete($id)
    {
    	
    	$country = \App\Models\Country::find($id);
		
    	if($country->delete())
    			{
    				return response()->json(['success' =>true,'data'=>'The Country Details deleted Successfully']);
    			}
    	else
    	{
    		return response()->json(['success' =>true,'data'=>"Can't delete Try agin later !" ]);
    	}

    }
    public function create(Request $request ,$id=null )
    {


        return $request;
    			$cid=$request->c_id;

   			
				$country= $request->all();
    			$validate=validator::make($request->all(),
    										['name'=>'alpha|required|unique:countries,name']
    									  );
			if($validate->fails())
    			{

    				return response()->json(['error' =>true, 'errors' => $validate->errors()]);
					//return redirect()->back()->withErrors($validate->errors());
    			}

    			if($cid)
    			{
    				$city = \App\Models\Country::findOrFail($cid);
    				$city->update($country);
    				return response()->json(['success' =>true,'data'=>'The Country Details Updated Successfully']);

    			}
    			else
    			{
    				if(	\App\Models\Country::create($country))
    			{
    				return response()->json(['success' =>true,'data'=>'The Country Details added Successfully']);
    			}
    			}
			
			

    	//return redirect()->back();
		//return View::make('countries.add_country');
    }

    public function add_view()
    {
    	
    	return View::make('countries/add_country')->render();
    }
    public function edit_view($id)
    {
    	  $country =  \App\Models\Country::find($id);
    // Load user/createOrUpdate.blade.php view
    return View::make('countries/add_country')->with('country', $country);
    	
    	//return View::make('countries/add_country')->render();
    }


    public function delete_view($id)
    {

		$country =  \App\Models\Country::find($id);
    
    return View::make('countries/delete_country')->with('country', $country);
    	
    }
}
